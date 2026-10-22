(function () {
	'use strict';

	document.documentElement.classList.add('js');

	var headerWrap = document.querySelector('.site-header-wrap');

	// Header shadow once the page scrolls.
	if (headerWrap) {
		var onScroll = function () {
			headerWrap.classList.toggle('is-scrolled', window.scrollY > 40);
		};
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	}

	// Count-up for stats such as "1,200+" or "98%": animates the number, keeps the suffix.
	function countUp(el) {
		var match = el.textContent.trim().match(/^([^\d]*)([\d,.]+)(.*)$/);
		if (!match) return;
		var prefix = match[1];
		var target = parseFloat(match[2].replace(/,/g, ''));
		var useComma = match[2].indexOf(',') !== -1;
		var suffix = match[3];
		var start = null;
		var duration = 1600;
		function format(n) {
			var s = String(Math.round(n));
			return useComma ? s.replace(/\B(?=(\d{3})+(?!\d))/g, ',') : s;
		}
		function step(ts) {
			if (!start) start = ts;
			var p = Math.min((ts - start) / duration, 1);
			var eased = 1 - Math.pow(1 - p, 3);
			el.textContent = prefix + format(target * eased) + suffix;
			if (p < 1) {
				requestAnimationFrame(step);
			} else {
				el.textContent = match[0];
			}
		}
		requestAnimationFrame(step);
	}

	if (!('IntersectionObserver' in window)) {
		document.querySelectorAll('.progress').forEach(function (el) { el.classList.add('is-visible'); });
		return;
	}

	var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	var revealTargets = document.querySelectorAll(
		'.section-head, .feature, .service, .step, .plan, .quote-card, .why-card, .about__visual, .about__content, .faq .wp-block-details, .contact__form, .stat, .post-card, .dl, .estimator'
	);

	revealTargets.forEach(function (el) { el.classList.add('reveal'); });

	var io = new IntersectionObserver(function (entries) {
		entries.forEach(function (entry) {
			if (!entry.isIntersecting) return;
			var el = entry.target;
			el.classList.add('is-visible');
			var num = el.querySelector('.stat__num');
			if (num && !reduceMotion) countUp(num);
			io.unobserve(el);
		});
	}, { threshold: 0.15 });

	revealTargets.forEach(function (el) { io.observe(el); });
	document.querySelectorAll('.progress').forEach(function (el) { io.observe(el); });

	// Highlight the menu link for the section in view (homepage anchors).
	var links = Array.prototype.filter.call(
		document.querySelectorAll('.main-nav a.wp-block-navigation-item__content'),
		function (a) { return a.hash && a.pathname === window.location.pathname; }
	);
	if (links.length) {
		var navIo = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (!entry.isIntersecting) return;
				links.forEach(function (a) {
					a.classList.toggle('is-active', a.hash === '#' + entry.target.id);
				});
			});
		}, { rootMargin: '-45% 0px -50% 0px' });
		links.forEach(function (a) {
			var target = document.getElementById(a.hash.slice(1));
			if (target) navIo.observe(target);
		});
	}
})();
