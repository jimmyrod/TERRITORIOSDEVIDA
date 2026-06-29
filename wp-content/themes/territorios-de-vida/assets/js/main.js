(function () {
  'use strict';

  const navToggle = document.querySelector('[data-nav-toggle]');
  const primaryNav = document.querySelector('[data-primary-nav]');

  if (navToggle && primaryNav) {
    navToggle.addEventListener('click', () => {
      const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
      navToggle.setAttribute('aria-expanded', String(!isOpen));
      primaryNav.classList.toggle('is-open', !isOpen);
    });

    primaryNav.addEventListener('click', (event) => {
      const target = event.target;
      if (target instanceof HTMLAnchorElement) {
        navToggle.setAttribute('aria-expanded', 'false');
        primaryNav.classList.remove('is-open');
      }
    });
  }

  const accordionTriggers = document.querySelectorAll('[data-accordion-trigger]');
  accordionTriggers.forEach((trigger) => {
    trigger.addEventListener('click', () => {
      const panelId = trigger.getAttribute('aria-controls');
      const panel = panelId ? document.getElementById(panelId) : null;
      if (!panel) return;
      const isOpen = trigger.getAttribute('aria-expanded') === 'true';
      trigger.setAttribute('aria-expanded', String(!isOpen));
      panel.hidden = isOpen;
    });
  });

  const sections = document.querySelectorAll('[data-section]');
  const navLinks = document.querySelectorAll('[data-nav-link]');
  if ('IntersectionObserver' in window && sections.length && navLinks.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const id = entry.target.getAttribute('data-section');
        navLinks.forEach((link) => {
          const active = link.getAttribute('data-nav-link') === id;
          if (active) {
            link.setAttribute('aria-current', 'true');
          } else {
            link.removeAttribute('aria-current');
          }
        });
      });
    }, { rootMargin: '-40% 0px -52% 0px', threshold: 0.01 });

    sections.forEach((section) => observer.observe(section));
  }

  const filters = document.querySelector('[data-document-filters]');
  const rows = document.querySelectorAll('[data-document-row]');
  if (filters && rows.length) {
    const year = filters.querySelector('[data-filter-year]');
    const type = filters.querySelector('[data-filter-type]');
    const search = filters.querySelector('[data-filter-search]');
    const applyFilters = () => {
      const yearValue = year ? year.value : '';
      const typeValue = type ? type.value.toLowerCase() : '';
      const searchValue = search ? search.value.trim().toLowerCase() : '';
      rows.forEach((row) => {
        const matchesYear = !yearValue || row.getAttribute('data-year') === yearValue;
        const matchesType = !typeValue || (row.getAttribute('data-type') || '').includes(typeValue);
        const matchesSearch = !searchValue || (row.getAttribute('data-title') || '').includes(searchValue);
        row.classList.toggle('is-hidden', !(matchesYear && matchesType && matchesSearch));
      });
    };
    filters.addEventListener('input', applyFilters);
    filters.addEventListener('change', applyFilters);
  }

  const contactForm = document.querySelector('[data-contact-form]');
  if (contactForm) {
    contactForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const status = contactForm.querySelector('[data-form-status]');
      if (status) {
        status.textContent = 'Formulario preparado. Para producción, configurar SMTP seguro y control antispam antes de habilitar envíos.';
      }
    });
  }
})();
