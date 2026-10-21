(function () {
  'use strict';

  var header = document.querySelector('.header');
  var toggle = document.querySelector('.nav__toggle');
  var menu = document.getElementById('nav-menu');

  // Sticky header shadow
  function onScroll() {
    header.classList.toggle('is-scrolled', window.scrollY > 10);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // Mobile navigation
  toggle.addEventListener('click', function () {
    var open = menu.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', String(open));
  });
  menu.addEventListener('click', function (e) {
    if (e.target.tagName === 'A') {
      menu.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });

  // Count-up numbers
  function countUp(el) {
    var target = parseInt(el.getAttribute('data-count'), 10);
    var suffix = el.getAttribute('data-suffix') || '';
    var start = null;
    var duration = 1600;
    function step(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.round(target * eased).toLocaleString() + suffix;
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  // Scroll reveal
  var revealTargets = document.querySelectorAll(
    '.section-head, .feature, .service, .step, .plan, .quote, .why-card, .about__visual, .about__content, .faq details, .contact__form, .progress, .stat'
  );

  if (!('IntersectionObserver' in window)) {
    revealTargets.forEach(function (el) { el.classList.add('is-visible'); });
    document.querySelectorAll('[data-count]').forEach(function (el) {
      el.textContent = el.getAttribute('data-count') + (el.getAttribute('data-suffix') || '');
    });
    return;
  }

  revealTargets.forEach(function (el) {
    if (!el.classList.contains('progress')) el.classList.add('reveal');
  });

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      var el = entry.target;
      el.classList.add('is-visible');
      var counter = el.querySelector('[data-count]');
      if (counter) countUp(counter);
      io.unobserve(el);
    });
  }, { threshold: 0.15 });

  revealTargets.forEach(function (el) { io.observe(el); });

  // Highlight the current section in the nav
  var links = menu.querySelectorAll('a[href^="#"]');
  var sections = Array.prototype.map.call(links, function (a) {
    return document.querySelector(a.getAttribute('href'));
  });
  var navIo = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      links.forEach(function (a) {
        a.classList.toggle('is-active', a.getAttribute('href') === '#' + entry.target.id);
      });
    });
  }, { rootMargin: '-45% 0px -50% 0px' });
  sections.forEach(function (s) { if (s) navIo.observe(s); });

  var year = document.getElementById('year');
  if (year) year.textContent = new Date().getFullYear();
})();
