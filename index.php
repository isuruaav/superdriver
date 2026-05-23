
<?php include 'header.php'; ?>
<body>

<a href="#main" class="sr-only focus:not-sr-only" style="position:fixed;top:1rem;left:1rem;z-index:100;padding:.5rem 1rem;border-radius:.5rem;background:white;color:var(--french-blue)">Skip to content</a>

<!-- NAVBAR -->
<header class="navbar" role="banner">
  <div class="container-main" style="height:4rem;display:flex;align-items:center;justify-content:space-between;gap:1rem;">
    <a href="#" class="flex items-center gap-2" style="text-decoration:none;" aria-label="Super Drivers home">
      <img src="logo.png" alt="Super Drivers" style="height:48px;width:auto;object-fit:contain;">
    </a>
    <nav class="hidden md:flex items-center gap-1" aria-label="Main navigation">
      <a href="#about"   class="px-3 py-2 rounded-lg text-sm font-medium text-muted transition-all" style="border-radius:.5rem;transition:all 180ms ease;" onmouseover="this.style.background='var(--color-surface-offset)'" onmouseout="this.style.background='transparent'">About</a>
      <a href="#services" class="px-3 py-2 rounded-lg text-sm font-medium text-muted transition-all" style="border-radius:.5rem;transition:all 180ms ease;" onmouseover="this.style.background='var(--color-surface-offset)'" onmouseout="this.style.background='transparent'">Services</a>
      <a href="#pricing"  class="px-3 py-2 rounded-lg text-sm font-medium text-muted transition-all" style="border-radius:.5rem;transition:all 180ms ease;" onmouseover="this.style.background='var(--color-surface-offset)'" onmouseout="this.style.background='transparent'">Pricing</a>
      <a href="#contact"  class="px-3 py-2 rounded-lg text-sm font-medium text-muted transition-all" style="border-radius:.5rem;transition:all 180ms ease;" onmouseover="this.style.background='var(--color-surface-offset)'" onmouseout="this.style.background='transparent'">Contact</a>
    </nav>
    <div class="flex items-center gap-2">
      <button class="theme-toggle" data-theme-toggle aria-label="Switch to dark mode">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
      </button>
      <a href="#pricing" class="btn-primary hidden sm:inline-flex text-sm">Book a Driver</a>
      <button class="md:hidden w-10 h-10 flex items-center justify-center theme-toggle" id="menuBtn" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobileMenu">
        <svg id="menuIcon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg>
      </button>
    </div>
  </div>
  <div class="mobile-menu md:hidden" id="mobileMenu" role="navigation" aria-label="Mobile navigation" style="border-top:1px solid color-mix(in srgb,var(--sky-aqua) 25%,transparent)">
    <div class="container-main py-4 flex flex-col gap-1">
      <a href="#about"    class="px-3 py-2 rounded-lg text-sm font-medium text-muted" onclick="closeMenu()">About</a>
      <a href="#services" class="px-3 py-2 rounded-lg text-sm font-medium text-muted" onclick="closeMenu()">Services</a>
      <a href="#pricing"  class="px-3 py-2 rounded-lg text-sm font-medium text-muted" onclick="closeMenu()">Pricing</a>
      <a href="#contact"  class="px-3 py-2 rounded-lg text-sm font-medium text-muted" onclick="closeMenu()">Contact</a>
      <a href="#pricing" class="btn-primary mt-2 justify-center" onclick="closeMenu()">Book a Driver</a>
    </div>
  </div>
</header>

<main id="main">

  <!-- HERO -->
  <section class="hero-section" aria-labelledby="hero-heading">
    <img src="assets/images/og-image.jpg" alt="" class="hero-bg-img" aria-hidden="true" width="1600" height="900" loading="eager" decoding="async">
    <div class="hero-bg-overlay" aria-hidden="true"></div>
    <div class="container-main">
      <div class="max-w-[700px]">
        <div class="service-chip inline-flex mb-6 reveal">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/><circle cx="12" cy="10" r="3"/></svg>
          Kandy &amp; Colombo
        </div>
        <h1 id="hero-heading" class="reveal" style="font-size:clamp(2.6rem,6vw,5rem);font-family:var(--font-display);line-height:1.1;margin-bottom:1.25rem;">
          <span class="hero-gradient-text">Trusted Drivers</span><br>at Your Service
        </h1>
        <p class="reveal text-muted" style="font-size:clamp(1rem,1.5vw,1.2rem);max-width:58ch;margin-bottom:2rem;line-height:1.7;">
          Professional, verified drivers for your personal and commercial vehicles — available 24×7 across Kandy and Colombo. Flexible packages, no hidden charges, no cancellation fees.
        </p>
        <div class="reveal flex flex-wrap gap-3">
          <a href="#pricing" class="btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M9 20l-5.447-2.724A1 1 0 0 1 3 16.382V5.618a1 1 0 0 1 1.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0 0 21 18.382V7.618a1 1 0 0 0-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
            View Pricing
          </a>
          <a href="#about" style="padding:.75rem 1.75rem;border-radius:var(--radius-full);font-size:.9375rem;font-weight:500;display:inline-flex;align-items:center;gap:.5rem;border:1.5px solid color-mix(in srgb,var(--frosted-blue) 60%,transparent);color:var(--color-text);transition:all 180ms ease;background:color-mix(in srgb,var(--light-cyan) 30%,transparent);">
            Learn More
          </a>
        </div>
      </div>

      <!-- Stats -->
      <div class="reveal mt-16 grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="section-card text-center">
          <div class="stat-num text-primary" style="font-family:var(--font-display);font-size:clamp(1.8rem,4vw,2.5rem);line-height:1;">24×7</div>
          <div class="text-muted text-sm mt-1">Service Hours</div>
        </div>
        <div class="section-card text-center">
          <div class="stat-num text-primary" style="font-family:var(--font-display);font-size:clamp(1.8rem,4vw,2.5rem);line-height:1;">2</div>
          <div class="text-muted text-sm mt-1">Cities Covered</div>
        </div>
        <div class="section-card text-center">
          <div class="stat-num text-primary" style="font-family:var(--font-display);font-size:clamp(1.8rem,4vw,2.5rem);line-height:1;">0</div>
          <div class="text-muted text-sm mt-1">Hidden Charges</div>
        </div>
        <div class="section-card text-center">
          <div class="stat-num text-primary" style="font-family:var(--font-display);font-size:clamp(1.8rem,4vw,2.5rem);line-height:1;">1hr</div>
          <div class="text-muted text-sm mt-1">Advance Booking</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="container-main py-20" aria-labelledby="about-heading">
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div>
        <p class="font-semibold text-sm uppercase tracking-widest mb-3 reveal" style="color:var(--bright-teal-blue);">About Us</p>
        <h2 id="about-heading" class="reveal" style="font-size:clamp(2rem,4vw,3rem);color:var(--color-text);">Your ride, your<br><em>comfort</em></h2>
        <p class="text-muted mt-5 reveal" style="max-width:52ch;line-height:1.8;">
          Our online driver service is designed to provide reliable, professional, and verified drivers for personal and commercial vehicles. In today's fast-paced world, vehicle owners often need skilled drivers for short-term, long-term, or on-demand requirements.
        </p>
        <p class="text-muted mt-4 reveal" style="max-width:52ch;line-height:1.8;">
          Our platform bridges this gap by connecting customers with experienced drivers quickly and conveniently. Whether it's for daily commuting, assistance, or emergency situations, our services ensure safety, punctuality, and comfort at every step.
        </p>
        <p class="text-muted mt-4 reveal" style="max-width:52ch;line-height:1.8;">
          All drivers registered on our platform are carefully screened, licensed, and trained to meet high service standards. By combining technology with dependable human resources, our goal is to make driver hiring easy, transport-oriented, and affordable.
        </p>
      </div>
      <div class="flex flex-col gap-4">
        <div class="section-card reveal">
          <div class="flex items-start gap-4">
            <div class="icon-wrap-sm" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue)"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/></svg>
            </div>
            <div>
              <h3 style="font-family:var(--font-display);font-size:1.3rem;margin-bottom:.4rem;">Vision</h3>
              <p class="text-muted text-sm leading-relaxed">To become the most trusted and convenient drive-hiring service, ensuring safe, reliable, and stress-free travel for everyone.</p>
            </div>
          </div>
        </div>
        <div class="section-card reveal">
          <div class="flex items-start gap-4">
            <div class="icon-wrap-sm" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue)"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <div>
              <h3 style="font-family:var(--font-display);font-size:1.3rem;margin-bottom:.4rem;">Mission</h3>
              <p class="text-muted text-sm leading-relaxed">To connect customers with professional, verified, and experienced drivers through a simple and efficient platform, providing safe, affordable, and timely driving services.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container-main"><hr class="divider"></div>

  <!-- SERVICES -->
  <section id="services" class="container-main py-20" aria-labelledby="services-heading">
    <div class="text-center max-w-[540px] mx-auto mb-12">
      <p class="font-semibold text-sm uppercase tracking-widest mb-3 reveal" style="color:var(--bright-teal-blue);">Our Services</p>
      <h2 id="services-heading" class="reveal" style="font-size:clamp(1.8rem,4vw,2.8rem);">Everything you need<br>on the road</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <div class="section-card reveal flex flex-col gap-3">
        <div class="icon-wrap" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue)"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <h3 style="font-family:var(--font-display);font-size:1.2rem;">24 × 7 Service</h3>
        <p class="text-muted text-sm leading-relaxed">Round-the-clock availability means a driver is always just a call away, any time of day or night.</p>
      </div>
      <div class="section-card reveal flex flex-col gap-3">
        <div class="icon-wrap" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue)"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
        <h3 style="font-family:var(--font-display);font-size:1.2rem;">Online Booking</h3>
        <p class="text-muted text-sm leading-relaxed">Simple and seamless digital booking. Reserve your driver at least one hour in advance from anywhere.</p>
      </div>
      <div class="section-card reveal flex flex-col gap-3">
        <div class="icon-wrap" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue)"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3 style="font-family:var(--font-display);font-size:1.2rem;">Kandy &amp; Colombo</h3>
        <p class="text-muted text-sm leading-relaxed">Operating in two major cities with experienced local drivers who know every route.</p>
      </div>
      <div class="section-card reveal flex flex-col gap-3">
        <div class="icon-wrap" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue)"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
        <h3 style="font-family:var(--font-display);font-size:1.2rem;">Light &amp; Heavy Vehicles</h3>
        <p class="text-muted text-sm leading-relaxed">Drivers skilled in all vehicle types — from personal cars to commercial and heavy vehicles.</p>
      </div>
      <div class="section-card reveal flex flex-col gap-3">
        <div class="icon-wrap" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue)"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <h3 style="font-family:var(--font-display);font-size:1.2rem;">Verified Drivers</h3>
        <p class="text-muted text-sm leading-relaxed">Every driver is carefully screened, licensed, experienced, skilled, reliable, disciplined, and kind.</p>
      </div>
      <div class="section-card reveal flex flex-col gap-3">
        <div class="icon-wrap" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue)"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
        <h3 style="font-family:var(--font-display);font-size:1.2rem;">Flexible Packages</h3>
        <p class="text-muted text-sm leading-relaxed">Hourly, half-day, full-day, or long-distance packages designed to fit your schedule and budget.</p>
      </div>
    </div>
  </section>

  <div class="container-main"><hr class="divider"></div>

  <!-- PRICING -->
  <section id="pricing" class="container-main py-20" aria-labelledby="pricing-heading">
    <div class="text-center max-w-[540px] mx-auto mb-10">
      <p class="font-semibold text-sm uppercase tracking-widest mb-3 reveal" style="color:var(--bright-teal-blue);">Pricing</p>
      <h2 id="pricing-heading" class="reveal" style="font-size:clamp(1.8rem,4vw,2.8rem);">Transparent &amp; affordable<br><em>packages</em></h2>
      <p class="text-muted mt-3 reveal text-sm">No hidden charges. No cancellation fees. Book at least 1 hour in advance.</p>
    </div>

    <!-- Tabs -->
    <div class="flex justify-center mb-8 reveal">
      <div class="inline-flex gap-1 p-1 rounded-full border" style="background:var(--color-surface-2);border-color:color-mix(in srgb,var(--sky-aqua) 35%,transparent);">
        <button class="tab-btn active" data-tab="day"      onclick="switchTab('day')"      aria-selected="true">☀️ Day Time</button>
        <button class="tab-btn"        data-tab="night"    onclick="switchTab('night')"    aria-selected="false">🌙 Night Time</button>
        <button class="tab-btn"        data-tab="distance" onclick="switchTab('distance')" aria-selected="false">📏 Distance</button>
      </div>
    </div>

    <!-- Day -->
    <div class="tab-panel active" id="tab-day">
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3 max-w-[860px] mx-auto">
        <div class="price-card featured-card"><div><span style="font-size:.8rem;font-weight:500;" class="text-muted">3 Hours</span><span class="min-badge">Minimum</span></div><span class="price-badge">LKR 2,000</span></div>
        <div class="price-card"><div class="text-sm font-medium">4 Hours</div><span class="price-badge">LKR 2,500</span></div>
        <div class="price-card"><div class="text-sm font-medium">5 Hours</div><span class="price-badge">LKR 3,000</span></div>
        <div class="price-card"><div class="text-sm font-medium">6 Hours</div><span class="price-badge">LKR 3,500</span></div>
        <div class="price-card"><div class="text-sm font-medium">7 Hours</div><span class="price-badge">LKR 4,000</span></div>
        <div class="price-card"><div class="text-sm font-medium">8 Hours</div><span class="price-badge">LKR 4,500</span></div>
        <div class="price-card"><div class="text-sm font-medium">9 Hours</div><span class="price-badge">LKR 5,000</span></div>
        <div class="price-card"><div class="text-sm font-medium">10 Hours</div><span class="price-badge">LKR 5,500</span></div>
        <div class="price-card"><div class="text-sm font-medium">11 Hours</div><span class="price-badge">LKR 6,000</span></div>
        <div class="price-card featured-card"><div class="text-sm font-medium">12 Hours</div><span class="price-badge">LKR 6,500</span></div>
      </div>
    </div>

    <!-- Night -->
    <div class="tab-panel" id="tab-night">
      <div class="grid sm:grid-cols-2 gap-3 max-w-[640px] mx-auto">
        <div class="price-card featured-card"><div><span class="text-sm font-medium">1 Hour</span><span class="min-badge">Minimum</span></div><span class="price-badge">LKR 2,500</span></div>
        <div class="price-card"><div class="text-sm font-medium">2 Hours</div><span class="price-badge">LKR 3,000</span></div>
        <div class="price-card"><div class="text-sm font-medium">3 Hours</div><span class="price-badge">LKR 3,500</span></div>
        <div class="price-card"><div class="text-sm font-medium">4 Hours</div><span class="price-badge">LKR 4,000</span></div>
        <div class="price-card featured-card sm:col-span-2"><div class="text-sm font-medium">Full Night 🌕</div><span class="price-badge">LKR 6,500</span></div>
      </div>
    </div>

    <!-- Distance -->
    <div class="tab-panel" id="tab-distance">
      <div class="grid sm:grid-cols-2 gap-3 max-w-[640px] mx-auto">
        <div class="price-card"><div><div class="text-sm font-medium">1st 15 minutes</div><div class="text-muted" style="font-size:.75rem;">Waiting grace period</div></div><span class="price-badge">Free</span></div>
        <div class="price-card"><div><div class="text-sm font-medium">Waiting (after 15 min)</div><div class="text-muted" style="font-size:.75rem;">First charge</div></div><span class="price-badge">LKR 250</span></div>
      
        <div class="price-card featured-card"><div><div class="text-sm font-medium">First 10 km</div><div class="text-muted" style="font-size:.75rem;">Base distance fare</div></div><span class="price-badge">LKR 1,800</span></div>
        <div class="price-card sm:col-span-2"><div class="text-sm font-medium">Additional Distance</div><span class="price-badge">LKR 100 / km</span></div>
      </div>
    </div>

    <!-- Notes -->
    <div class="mt-8 max-w-[860px] mx-auto">
      <div class="section-card reveal">
        <h3 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.75rem;">Important Notes</h3>
        <ul class="space-y-2 text-muted text-sm">
          <li class="flex items-start gap-2">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mt-0\.5 shrink-0" style="color:var(--bright-teal-blue);margin-top:.125rem;flex-shrink:0;" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
            <span>An additional <strong>LKR 500</strong> is charged for heavy vehicles.</span>
          </li>
          <li class="flex items-start gap-2">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue);margin-top:.125rem;flex-shrink:0;" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
            <span>Long-distance trips: <strong>LKR 5,000 per day</strong> — food and lodging to be provided by the client.</span>
          </li>
          <li class="flex items-start gap-2">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue);margin-top:.125rem;flex-shrink:0;" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
            <span><strong>No hidden charges</strong> — the price you see is the price you pay.</span>
          </li>
          <li class="flex items-start gap-2">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue);margin-top:.125rem;flex-shrink:0;" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
            <span><strong>No cancellation fees</strong> — cancel anytime without penalty.</span>
          </li>
          <li class="flex items-start gap-2">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--bright-teal-blue);margin-top:.125rem;flex-shrink:0;" aria-hidden="true"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
            <span>Please book your driver <strong>at least 1 hour in advance</strong>.</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <div class="container-main"><hr class="divider"></div>

  <!-- FAQ -->
  <section class="container-main py-20" aria-labelledby="faq-heading">
    <div class="grid md:grid-cols-[2fr_3fr] gap-12 items-start">
      <div>
        <p class="font-semibold text-sm uppercase tracking-widest mb-3 reveal" style="color:var(--bright-teal-blue);">FAQ</p>
        <h2 id="faq-heading" class="reveal" style="font-size:clamp(1.8rem,4vw,2.8rem);">Common<br>questions</h2>
      </div>
      <div class="flex flex-col">
        <div class="accordion-item">
          <details>
            <summary class="flex justify-between items-center py-4 gap-4">
              <span class="font-medium text-sm">How far in advance should I book?</span>
              <span class="acc-icon shrink-0" style="color:var(--bright-teal-blue)" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </summary>
            <p class="text-muted text-sm pb-4 leading-relaxed" style="max-width:60ch;">Please book at least <strong>1 hour in advance</strong> to ensure a driver is available. For long-distance or special trips, we recommend booking earlier.</p>
          </details>
        </div>
        <div class="accordion-item">
          <details>
            <summary class="flex justify-between items-center py-4 gap-4">
              <span class="font-medium text-sm">Are there any cancellation fees?</span>
              <span class="acc-icon shrink-0" style="color:var(--bright-teal-blue)" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </summary>
            <p class="text-muted text-sm pb-4 leading-relaxed" style="max-width:60ch;">No. We have a <strong>zero cancellation fee policy</strong>. You can cancel your booking at any time without any charges.</p>
          </details>
        </div>
        <div class="accordion-item">
          <details>
            <summary class="flex justify-between items-center py-4 gap-4">
              <span class="font-medium text-sm">Do you serve heavy vehicle drivers?</span>
              <span class="acc-icon shrink-0" style="color:var(--bright-teal-blue)" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </summary>
            <p class="text-muted text-sm pb-4 leading-relaxed" style="max-width:60ch;">Yes! We provide drivers for both light and heavy vehicles. An additional <strong>LKR 500</strong> applies for heavy vehicle bookings.</p>
          </details>
        </div>
        <div class="accordion-item">
          <details>
            <summary class="flex justify-between items-center py-4 gap-4">
              <span class="font-medium text-sm">What areas do you cover?</span>
              <span class="acc-icon shrink-0" style="color:var(--bright-teal-blue)" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </summary>
            <p class="text-muted text-sm pb-4 leading-relaxed" style="max-width:60ch;">We currently operate in <strong>Kandy and Colombo</strong>. Long-distance trips anywhere in Sri Lanka are available at LKR 4,200/day.</p>
          </details>
        </div>
        <div class="accordion-item" style="border-bottom:none;">
          <details>
            <summary class="flex justify-between items-center py-4 gap-4">
              <span class="font-medium text-sm">Are your drivers verified and safe?</span>
              <span class="acc-icon shrink-0" style="color:var(--bright-teal-blue)" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </summary>
            <p class="text-muted text-sm pb-4 leading-relaxed" style="max-width:60ch;">Absolutely. All drivers are <strong>carefully screened, licensed, and trained</strong>. We only onboard experienced, disciplined, and kind drivers who meet our high service standards.</p>
          </details>
        </div>
      </div>
    </div>
  </section>

  <div class="container-main"><hr class="divider"></div>

  <!-- CONTACT -->
  <section id="contact" class="py-20" aria-labelledby="contact-heading">
    <div class="container-main">
      <div class="section-card reveal text-center" style="background:linear-gradient(135deg, color-mix(in srgb,var(--bright-teal-blue) 8%,transparent), color-mix(in srgb,var(--turquoise-surf) 8%,transparent)); border-color:color-mix(in srgb,var(--bright-teal-blue) 30%,transparent); padding:clamp(2.5rem,6vw,4rem);">
        <h2 id="contact-heading" style="font-size:clamp(1.8rem,4vw,3rem);" class="mb-4">Ready to book your<br><em class="hero-gradient-text">trusted driver?</em></h2>
        <p class="text-muted mx-auto mb-8 text-sm leading-relaxed" style="max-width:48ch;">Contact us to book your driver. Available 24 × 7 in Kandy and Colombo with professional, verified drivers.</p>
        <div class="flex flex-wrap gap-3 justify-center">
          <a href="tel:+94770062650" class="btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.15 11.93 19.79 19.79 0 0 1 1.08 3.34 2 2 0 0 1 3.07 1.12h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 8.91a16 16 0 0 0 5.99 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16l.92.92z"/></svg>
            Call Now
          </a>
          <a href="https://wa.me/94770062650" target="_blank" rel="noopener noreferrer" style="padding:.75rem 1.75rem;border-radius:var(--radius-full);font-size:.9375rem;font-weight:500;display:inline-flex;align-items:center;gap:.5rem;border:1.5px solid color-mix(in srgb,var(--bright-teal-blue) 35%,transparent);color:var(--bright-teal-blue);transition:all 180ms ease;background:color-mix(in srgb,var(--light-cyan) 35%,transparent);">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
            WhatsApp
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>