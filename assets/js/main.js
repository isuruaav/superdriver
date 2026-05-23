

/* ══════════════════════════════════════════
   2. THEME TOGGLE (Dark / Light)
══════════════════════════════════════════ */
(function () {
  const t = document.querySelector('[data-theme-toggle]');
  const r = document.documentElement;
  let d = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  r.setAttribute('data-theme', d);

  function updateIcon() {
    if (!t) return;
    t.setAttribute('aria-label', 'Switch to ' + (d === 'dark' ? 'light' : 'dark') + ' mode');
    t.innerHTML = d === 'dark'
      ? '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>'
      : '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>';
  }
  updateIcon();
  if (t) t.addEventListener('click', () => {
    d = d === 'dark' ? 'light' : 'dark';
    r.setAttribute('data-theme', d);
    updateIcon();
  });
})();


/* ══════════════════════════════════════════
   3. MOBILE MENU
══════════════════════════════════════════ */
const menuBtn    = document.getElementById('menuBtn');
const mobileMenu = document.getElementById('mobileMenu');

function closeMenu() {
  mobileMenu.classList.remove('open');
  menuBtn.setAttribute('aria-expanded', 'false');
  menuBtn.querySelector('svg').innerHTML = '<path d="M3 12h18M3 6h18M3 18h18"/>';
}

menuBtn.addEventListener('click', () => {
  const isOpen = mobileMenu.classList.toggle('open');
  menuBtn.setAttribute('aria-expanded', String(isOpen));
  menuBtn.querySelector('svg').innerHTML = isOpen
    ? '<path d="M18 6L6 18M6 6l12 12"/>'
    : '<path d="M3 12h18M3 6h18M3 18h18"/>';
});

document.addEventListener('click', (e) => {
  if (!menuBtn.contains(e.target) && !mobileMenu.contains(e.target)) closeMenu();
});


/* ══════════════════════════════════════════
   4. PRICING TABS
══════════════════════════════════════════ */
function switchTab(name) {
  document.querySelectorAll('.tab-btn').forEach(btn => {
    const active = btn.dataset.tab === name;
    btn.classList.toggle('active', active);
    btn.setAttribute('aria-selected', String(active));
  });
  document.querySelectorAll('.tab-panel').forEach(panel => {
    panel.classList.toggle('active', panel.id === 'tab-' + name);
  });
}


/* ══════════════════════════════════════════
   5. SCROLL REVEAL
══════════════════════════════════════════ */
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      setTimeout(() => entry.target.classList.add('visible'), i * 60);
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
