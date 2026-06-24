<?php
$page_title          = 'Pricing | Mark Attendance – Simple, Transparent Plans';
$meta_description    = 'Mark Attendance pricing plans for businesses of every size. Starter, Business, and Enterprise plans. Start free, upgrade anytime.';
$canonical_url       = 'https://www.markattendance.com/pricing';
$og_description      = 'Mark Attendance pricing plans for businesses of every size. Starter, Business, and Enterprise plans. Start free, upgrade anytime.';
$og_image            = 'https://www.markattendance.com/assets/og-pricing.png';
$twitter_description = 'Mark Attendance pricing plans for businesses of every size. Starter, Business, and Enterprise plans. Start free, upgrade anytime.';
$twitter_image       = 'https://www.markattendance.com/assets/og-pricing.png';
$noindex             = true;
$current_page        = 'pricing';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Pricing | Mark Attendance",
    "url": "https://www.markattendance.com/pricing",
    "description": "Mark Attendance pricing plans for businesses of every size. Starter, Business, and Enterprise plans.",
    "mainEntity": {
      "@type": "ItemList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@type": "Offer",
            "name": "Starter Plan",
            "description": "Perfect for small businesses up to 50 employees. Includes 1 location, Android & iOS apps, basic reports, and email support.",
            "price": "29.00",
            "priceCurrency": "USD",
            "priceSpecification": {
              "@type": "UnitPriceSpecification",
              "price": "29.00",
              "priceCurrency": "USD",
              "unitText": "MONTH"
            },
            "eligibleCustomerType": "https://schema.org/BusinessEntityType",
            "seller": {
              "@type": "Organization",
              "name": "Mark Attendance",
              "url": "https://www.markattendance.com"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@type": "Offer",
            "name": "Business Plan",
            "description": "Ideal for growing businesses with multiple locations. Up to 500 employees, 5 locations, advanced reports, shift & leave management, and priority support.",
            "price": "79.00",
            "priceCurrency": "USD",
            "priceSpecification": {
              "@type": "UnitPriceSpecification",
              "price": "79.00",
              "priceCurrency": "USD",
              "unitText": "MONTH"
            },
            "eligibleCustomerType": "https://schema.org/BusinessEntityType",
            "seller": {
              "@type": "Organization",
              "name": "Mark Attendance",
              "url": "https://www.markattendance.com"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@type": "Offer",
            "name": "Enterprise Plan",
            "description": "For large organisations with custom requirements. Unlimited employees, unlimited locations, custom integrations, dedicated account manager, and SLA.",
            "priceCurrency": "USD",
            "eligibleCustomerType": "https://schema.org/BusinessEntityType",
            "seller": {
              "@type": "Organization",
              "name": "Mark Attendance",
              "url": "https://www.markattendance.com"
            }
          }
        }
      ]
    }
  }
JSONLD;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<!-- Main content -->
  <main class="page-body">

    <!-- 1. PAGE HERO -->
    <section class="page-hero" aria-label="Pricing hero">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M4.5 2.5L7.5 6L4.5 9.5" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span aria-current="page">Pricing</span>
        </nav>
        <span class="tag reveal">Pricing</span>
        <h1 class="reveal d1">Simple, Transparent Pricing</h1>
        <p class="reveal d2">No hidden fees. No per-swipe charges. Pick a plan and grow without surprises.</p>
      </div>
    </section>

    <!-- 2. PRICING GRID WITH TOGGLE -->
    <section class="section" aria-labelledby="pricing-heading" id="pricing">
      <div class="container">

        <!-- Monthly / Annual toggle -->
        <div class="pricing-toggle-wrap reveal">
          <span class="toggle-label active" id="label-monthly">Monthly</span>
          <button
            class="toggle-switch"
            id="billing-toggle"
            role="switch"
            aria-checked="false"
            aria-label="Switch to annual billing"
          ></button>
          <span class="toggle-label" id="label-annual">
            Annual&nbsp;<span class="save-badge">Save 18%</span>
          </span>
        </div>

        <div class="pricing-grid" id="pricing-grid" aria-label="Pricing plans">

          <!-- STARTER -->
          <div class="pricing-card reveal d1" aria-label="Starter plan">
            <div class="plan-name">Starter</div>

            <div class="plan-price-monthly">
              <div class="plan-price">$29<sub>/month</sub></div>
            </div>
            <div class="plan-price-annual">
              <div class="plan-price">$24<sub>/month</sub></div>
            </div>

            <p class="plan-desc">Perfect for small businesses up to 50 employees</p>
            <ul class="plan-features" aria-label="Starter plan features">
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Up to 50 employees
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                1 location
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Android &amp; iOS apps
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Basic reports
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Email support
              </li>
              <li class="plan-feature disabled" aria-label="API access not included">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 12L12 4M4 4l8 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                API access
              </li>
            </ul>
            <a href="/contact" class="btn btn-outline btn-full">Get Started</a>
          </div>

          <!-- BUSINESS (popular) -->
          <div class="pricing-card popular reveal d2" aria-label="Business plan – Most Popular">
            <div class="popular-badge" aria-label="Most popular plan">Most Popular</div>
            <div class="plan-name">Business</div>

            <div class="plan-price-monthly">
              <div class="plan-price">$79<sub>/month</sub></div>
            </div>
            <div class="plan-price-annual">
              <div class="plan-price">$65<sub>/month</sub></div>
            </div>

            <p class="plan-desc">Ideal for growing businesses with multiple locations</p>
            <ul class="plan-features" aria-label="Business plan features">
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Up to 500 employees
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Up to 5 locations
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Android &amp; iOS apps
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Advanced reports + scheduling
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Shift &amp; leave management
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Priority support + API access
              </li>
            </ul>
            <a href="/contact#demo" class="btn btn-primary btn-full">Start Free Trial</a>
          </div>

          <!-- ENTERPRISE -->
          <div class="pricing-card reveal d3" aria-label="Enterprise plan">
            <div class="plan-name">Enterprise</div>

            <div class="plan-price-monthly">
              <div class="plan-price plan-price-custom">Custom</div>
            </div>
            <div class="plan-price-annual">
              <div class="plan-price plan-price-custom">Custom</div>
            </div>

            <p class="plan-desc">For large organisations with custom requirements</p>
            <ul class="plan-features" aria-label="Enterprise plan features">
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Unlimited employees
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Unlimited locations
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                All Business features
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Custom integrations &amp; API
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Dedicated account manager
              </li>
              <li class="plan-feature">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                SLA &amp; on-site support
              </li>
            </ul>
            <a href="/contact" class="btn btn-outline btn-full">Talk to Sales</a>
          </div>

        </div><!-- /pricing-grid -->
      </div>
    </section>

    <!-- 3. FEATURES COMPARISON TABLE -->
    <section class="section section-alt" aria-labelledby="compare-heading" id="compare">
      <div class="container">
        <div class="section-header reveal">
          <h2 id="compare-heading">Compare Plans in Detail</h2>
          <p>A full breakdown of every feature so you can choose with confidence.</p>
        </div>

        <div class="table-wrap reveal d1">
          <table class="comp-table" aria-label="Feature comparison across Starter, Business, and Enterprise plans">
            <thead>
              <tr>
                <th scope="col">Feature</th>
                <th scope="col">Starter</th>
                <th scope="col" class="pop-col">Business</th>
                <th scope="col">Enterprise</th>
              </tr>
            </thead>
            <tbody>

              <!-- Core -->
              <tr class="cat-row">
                <td colspan="4">Core</td>
              </tr>
              <tr>
                <td>Face Recognition</td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>Employees</td>
                <td><span class="t-text">Up to 50</span></td>
                <td class="pop-col"><span class="t-text">Up to 500</span></td>
                <td><span class="t-text">Unlimited</span></td>
              </tr>
              <tr>
                <td>Locations</td>
                <td><span class="t-text">1</span></td>
                <td class="pop-col"><span class="t-text">Up to 5</span></td>
                <td><span class="t-text">Unlimited</span></td>
              </tr>
              <tr>
                <td>Mobile App (Android &amp; iOS)</td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>

              <!-- Reporting -->
              <tr class="cat-row">
                <td colspan="4">Reporting</td>
              </tr>
              <tr>
                <td>Basic Reports</td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>Advanced Reports</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>Custom Schedules</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>Export Formats</td>
                <td><span class="t-text">CSV</span></td>
                <td class="pop-col"><span class="t-text">CSV, PDF, Excel</span></td>
                <td><span class="t-text">All formats</span></td>
              </tr>

              <!-- Management -->
              <tr class="cat-row">
                <td colspan="4">Management</td>
              </tr>
              <tr>
                <td>Shift Management</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>Leave Management</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>Multi-Role Access</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>

              <!-- Integration -->
              <tr class="cat-row">
                <td colspan="4">Integration</td>
              </tr>
              <tr>
                <td>CSV Export</td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>REST API</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>Webhooks</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-cross" aria-label="Not included">—</span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>Payroll Integration</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-cross" aria-label="Not included">—</span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>

              <!-- Support -->
              <tr class="cat-row">
                <td colspan="4">Support</td>
              </tr>
              <tr>
                <td>Email Support</td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>Priority Support</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>Dedicated Manager</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-cross" aria-label="Not included">—</span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>
              <tr>
                <td>SLA</td>
                <td><span class="t-cross" aria-label="Not included">—</span></td>
                <td class="pop-col"><span class="t-cross" aria-label="Not included">—</span></td>
                <td><span class="t-check" aria-label="Included"><svg viewBox="0 0 16 16" fill="none"><path d="M3 8L6.5 11.5L13 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span></td>
              </tr>

            </tbody>
          </table>
        </div><!-- /table-wrap -->
      </div>
    </section>

    <!-- 4. FAQ SECTION -->
    <section class="section" aria-labelledby="faq-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="tag">FAQ</span>
          <h2 id="faq-heading">Frequently Asked Questions</h2>
          <p>Everything you need to know before choosing a plan.</p>
        </div>

        <div class="faq-list reveal d1" role="list">

          <div class="faq-item" role="listitem">
            <button class="faq-q" aria-expanded="false" aria-controls="faq-a1" id="faq-q1">
              <h4>Is there a free trial?</h4>
              <span class="faq-btn" aria-hidden="true">
                <svg viewBox="0 0 14 14" fill="none"><path d="M2 5L7 10L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </button>
            <div class="faq-a" id="faq-a1" role="region" aria-labelledby="faq-q1">
              <p>Yes. The Business plan includes a 14-day free trial, no credit card required.</p>
            </div>
          </div>

          <div class="faq-item" role="listitem">
            <button class="faq-q" aria-expanded="false" aria-controls="faq-a2" id="faq-q2">
              <h4>Can I change plans later?</h4>
              <span class="faq-btn" aria-hidden="true">
                <svg viewBox="0 0 14 14" fill="none"><path d="M2 5L7 10L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </button>
            <div class="faq-a" id="faq-a2" role="region" aria-labelledby="faq-q2">
              <p>Absolutely. Upgrade or downgrade at any time. Changes take effect at the next billing cycle.</p>
            </div>
          </div>

          <div class="faq-item" role="listitem">
            <button class="faq-q" aria-expanded="false" aria-controls="faq-a3" id="faq-q3">
              <h4>How is 'employees' counted?</h4>
              <span class="faq-btn" aria-hidden="true">
                <svg viewBox="0 0 14 14" fill="none"><path d="M2 5L7 10L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </button>
            <div class="faq-a" id="faq-a3" role="region" aria-labelledby="faq-q3">
              <p>Active enrolled employees. Deactivated profiles don't count toward your limit.</p>
            </div>
          </div>

          <div class="faq-item" role="listitem">
            <button class="faq-q" aria-expanded="false" aria-controls="faq-a4" id="faq-q4">
              <h4>What payment methods are accepted?</h4>
              <span class="faq-btn" aria-hidden="true">
                <svg viewBox="0 0 14 14" fill="none"><path d="M2 5L7 10L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </button>
            <div class="faq-a" id="faq-a4" role="region" aria-labelledby="faq-q4">
              <p>We accept major credit cards, bank transfers, and PayPak/JazzCash for Pakistani customers.</p>
            </div>
          </div>

          <div class="faq-item" role="listitem">
            <button class="faq-q" aria-expanded="false" aria-controls="faq-a5" id="faq-q5">
              <h4>Is there a setup fee?</h4>
              <span class="faq-btn" aria-hidden="true">
                <svg viewBox="0 0 14 14" fill="none"><path d="M2 5L7 10L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </button>
            <div class="faq-a" id="faq-a5" role="region" aria-labelledby="faq-q5">
              <p>No setup fee. Business and Enterprise plans include free onboarding assistance.</p>
            </div>
          </div>

        </div><!-- /faq-list -->
      </div>
    </section>

    <!-- 5. CTA BANNER -->
    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading" class="reveal">Not Sure Which Plan Is Right for You?</h2>
        <p class="reveal d1">Book a free consultation and we'll recommend the best fit.</p>
        <div class="cta-btns reveal d2">
          <a href="#compare" class="btn btn-ghost">
            <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M3 6h14M3 10h14M3 14h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            Compare Features
          </a>
          <a href="/contact" class="btn btn-ghost">
            <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M10 2a8 8 0 100 16A8 8 0 0010 2zm0 4v4l3 1.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Talk to Sales
          </a>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>
