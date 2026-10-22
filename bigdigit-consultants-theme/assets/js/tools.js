(function () {
	'use strict';

	/* ------------------------------------------------------------------
	 * Price estimator rates. Edit these numbers to change the estimate.
	 * ------------------------------------------------------------------ */
	var RATES = {
		bookkeepingMonthly: { 100: 199, 250: 299, 500: 449, 501: 649 }, // by transactions per month
		catchUp: { 0: 0, 3: 300, 6: 600, 12: 1200, 13: 1800 },          // one-time, by months behind
		payrollRunBase: 25,        // per pay run
		payrollPerEmployee: 4,     // per employee, per pay run
		payrollMinMonthly: 75,
		runsPerMonth: { weekly: 52 / 12, biweekly: 26 / 12, semimonthly: 2, monthly: 1 },
		taxReturn: { individual: 250, schedulec: 450, entity: 950 },     // per return
		extraState: 150,           // per additional state
		rangeLow: 0.9,             // the estimate is shown as a range around the calculated price
		rangeHigh: 1.15
	};

	var MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
	var DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

	/* ---------------------------- Deadlines --------------------------- */

	// Only two federal holidays can land on these due dates: Martin Luther King Jr. Day
	// (third Monday of January) and DC Emancipation Day (April 16, observed on the nearest
	// weekday), which the IRS honors for filing deadlines.
	function isHoliday(d) {
		if (d.getMonth() === 0 && d.getDay() === 1 && d.getDate() >= 15 && d.getDate() <= 21) return true;
		if (d.getMonth() === 3) {
			var dow = new Date(d.getFullYear(), 3, 16).getDay();
			var observed = dow === 6 ? 15 : dow === 0 ? 17 : 16;
			return d.getDate() === observed;
		}
		return false;
	}

	// A due date on a weekend or holiday moves to the next business day.
	function businessDay(date) {
		var d = new Date(date.getTime());
		while (d.getDay() === 0 || d.getDay() === 6 || isHoliday(d)) d.setDate(d.getDate() + 1);
		return d;
	}

	function nextOccurrence(month, day, now) {
		var year = now.getFullYear();
		var due = businessDay(new Date(year, month - 1, day));
		var endOfDue = new Date(due.getFullYear(), due.getMonth(), due.getDate() + 1);
		if (endOfDue <= now) due = businessDay(new Date(year + 1, month - 1, day));
		return due;
	}

	function label(date) {
		return DAYS[date.getDay()] + ', ' + MONTHS[date.getMonth()] + ' ' + date.getDate() + ', ' + date.getFullYear();
	}

	function markNext(panel) {
		var now = new Date();
		var today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
		var best = null;
		panel.querySelectorAll('.dl__item').forEach(function (li) {
			li.classList.remove('is-next');
			var m = parseInt(li.getAttribute('data-month'), 10);
			var d = parseInt(li.getAttribute('data-day'), 10);
			if (!m || !d) return;
			var date = nextOccurrence(m, d, now);
			if (!best || date < best.date) best = { li: li, date: date };
		});
		var out = panel.querySelector('[data-next]');
		if (!best || !out) return;
		best.li.classList.add('is-next');
		var days = Math.round((best.date - today) / 86400000);
		var when = days === 0 ? 'today' : days === 1 ? 'tomorrow' : 'in ' + days + ' days';
		out.innerHTML = '';
		var strong = document.createElement('strong');
		strong.textContent = 'Next deadline:';
		var em = document.createElement('em');
		em.textContent = label(best.date) + ' (' + when + ')';
		out.appendChild(strong);
		out.appendChild(document.createTextNode(' '));
		out.appendChild(em);
		out.appendChild(document.createTextNode(' · ' + best.li.querySelector('h3').textContent));
		out.classList.add('is-ready');
	}

	function initDeadlines(root) {
		var tabs = Array.prototype.slice.call(root.querySelectorAll('[role="tab"]'));
		var panels = tabs.map(function (t) { return document.getElementById(t.getAttribute('aria-controls')); });
		if (!tabs.length || panels.indexOf(null) !== -1) return;

		root.classList.add('is-tabbed');
		panels.forEach(markNext);

		function select(index, focus) {
			tabs.forEach(function (tab, i) {
				var on = i === index;
				tab.setAttribute('aria-selected', on ? 'true' : 'false');
				tab.tabIndex = on ? 0 : -1;
				panels[i].hidden = !on;
			});
			if (focus) tabs[index].focus();
		}

		tabs.forEach(function (tab, i) {
			tab.addEventListener('click', function () { select(i, false); });
			tab.addEventListener('keydown', function (e) {
				var n = tabs.length;
				var next = null;
				if (e.key === 'ArrowRight' || e.key === 'ArrowDown') next = (i + 1) % n;
				else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') next = (i - 1 + n) % n;
				else if (e.key === 'Home') next = 0;
				else if (e.key === 'End') next = n - 1;
				if (next === null) return;
				e.preventDefault();
				select(next, true);
			});
		});

		select(0, false);
	}

	/* ---------------------------- Estimator --------------------------- */

	function round5(n) { return Math.round(n / 5) * 5; }
	function money(n) { return '$' + Math.round(n).toLocaleString('en-US'); }
	function range(n) { return money(round5(n * RATES.rangeLow)) + ' – ' + money(round5(n * RATES.rangeHigh)); }

	function initEstimator(root) {
		var form = root.querySelector('.estimator__form');
		if (!form) return;
		var el = function (name) { return form.elements[name]; };
		var out = function (name) { return root.querySelector('[data-out="' + name + '"]'); };
		var summary = '';

		function checked(value) {
			return Array.prototype.some.call(form.querySelectorAll('input[name="svc"]'), function (c) {
				return c.checked && c.value === value;
			});
		}

		function text(select) { return select.options[select.selectedIndex].text; }

		function update() {
			var lines = [];
			var monthly = 0;
			var oneTime = 0;
			var parts = [];

			form.querySelectorAll('[data-group]').forEach(function (g) {
				g.hidden = !checked(g.getAttribute('data-group'));
			});

			if (checked('bookkeeping')) {
				var bk = RATES.bookkeepingMonthly[el('tx').value];
				monthly += bk;
				lines.push(['Bookkeeping', money(bk) + '/mo']);
				parts.push('Bookkeeping (' + text(el('tx')).toLowerCase() + ' transactions/mo)');
				var cu = RATES.catchUp[el('behind').value];
				if (cu) {
					oneTime += cu;
					lines.push(['Catch-up bookkeeping', money(cu)]);
					parts.push('catch-up for books ' + text(el('behind')).toLowerCase() + ' behind');
				}
			}

			if (checked('payroll')) {
				var emp = Math.max(1, Math.min(500, parseInt(el('emp').value, 10) || 1));
				var runs = RATES.runsPerMonth[el('freq').value];
				var pr = Math.max(RATES.payrollMinMonthly, round5(runs * (RATES.payrollRunBase + RATES.payrollPerEmployee * emp)));
				monthly += pr;
				lines.push(['Payroll (' + emp + (emp === 1 ? ' employee' : ' employees') + ')', money(pr) + '/mo']);
				parts.push('Payroll (' + emp + (emp === 1 ? ' employee, ' : ' employees, ') + text(el('freq')).toLowerCase() + ')');
			}

			if (checked('tax')) {
				var extra = Math.max(0, parseInt(el('states').value, 10) - 1);
				var tax = RATES.taxReturn[el('taxtype').value] + extra * RATES.extraState;
				oneTime += tax;
				lines.push(['Tax preparation', money(tax)]);
				parts.push('Tax preparation (' + text(el('taxtype')) + ', ' + text(el('states')) + ')');
			}

			var any = lines.length > 0;
			out('empty').hidden = any;
			out('results').hidden = !any;
			out('monthly-wrap').hidden = monthly === 0;
			out('onetime-wrap').hidden = oneTime === 0;

			var list = out('lines');
			list.innerHTML = '';
			lines.forEach(function (l) {
				var li = document.createElement('li');
				var a = document.createElement('span');
				var b = document.createElement('span');
				a.textContent = l[0];
				b.textContent = l[1];
				li.appendChild(a);
				li.appendChild(b);
				list.appendChild(li);
			});

			out('monthly').textContent = monthly ? range(monthly) : '$0';
			out('onetime').textContent = oneTime ? range(oneTime) : '$0';
			out('first').textContent = range(monthly * 12 + oneTime);

			summary = 'Price estimate request: ' + parts.join('; ') + '. Estimated ' +
				(monthly ? range(monthly) + ' per month' : '') +
				(monthly && oneTime ? ' plus ' : '') +
				(oneTime ? range(oneTime) + ' in one-time fees' : '') + '.';
		}

		form.addEventListener('input', update);
		form.addEventListener('change', update);
		form.addEventListener('submit', function (e) { e.preventDefault(); });

		// Carry the estimate into the contact form.
		var cta = root.querySelector('[data-estimate-cta]');
		if (cta) {
			cta.addEventListener('click', function () {
				var message = document.querySelector('.contact__form textarea[name="message"]');
				if (message && !message.value.trim()) message.value = summary;
				var service = document.querySelector('.contact__form select[name="service"]');
				if (service) {
					var wanted = checked('bookkeeping') ? 'Bookkeeping' : checked('payroll') ? 'Payroll Management' : checked('tax') ? 'Tax Preparation' : '';
					Array.prototype.forEach.call(service.options, function (o) { if (o.text === wanted) service.value = o.value || o.text; });
				}
			});
		}

		update();
	}

	document.querySelectorAll('[data-deadlines]').forEach(initDeadlines);
	document.querySelectorAll('[data-estimator]').forEach(initEstimator);
})();
