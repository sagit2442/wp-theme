<?php get_header(); ?>

<?php
$hero_title = get_theme_mod('slt_hero_title', 'SL Luxury Tours & Travel');
$hero_sub   = get_theme_mod('slt_hero_subtitle', 'Luxury & comfortable private tours with Toyota Axio in Sri Lanka.');
$phone      = get_theme_mod('slt_phone', '+94777958036');
$whatsapp   = get_theme_mod('slt_whatsapp', '+94777958036');
$hero_bg    = get_theme_mod('slt_hero_bg', '');
$bg_style   = $hero_bg ? "style=\"background-image:url('".esc_url($hero_bg)."');\"" : "";
?>

<section class="hero" id="home">
  <div class="hero-bg" <?php echo $bg_style; ?>></div>
  <div class="container">
    <div class="hero-inner">
      <div class="hero-card">
        <h1><?php echo esc_html($hero_title); ?></h1>
        <p><?php echo esc_html($hero_sub); ?></p>

        <div class="badges">
          <span class="badge">🚗 Toyota Axio • A/C</span>
          <span class="badge">🕒 Punctual & Safe</span>
          <span class="badge">⭐ Friendly Driver</span>
          <span class="badge">💰 Reasonable Price</span>
        </div>

        <div style="display:flex; gap:10px; flex-wrap:wrap;">
          <a class="btn whatsapp" href="<?php echo esc_url(slt_whatsapp_link()); ?>" target="_blank" rel="noopener">
            WhatsApp Booking
          </a>
          <a class="btn primary" href="#services">View Services</a>
          <a class="btn" href="tel:<?php echo esc_attr($phone); ?>">Call Now</a>
        </div>
      </div>

      <div class="hero-card">
        <h3 style="margin:0 0 10px;">Quick Contact</h3>
        <p style="margin:0 0 12px; color: var(--muted);">
          Feel free to contact me — I can suggest an itinerary & plan your round tour.
        </p>

        <div class="quick">
          <div class="row"><span>WhatsApp</span><b><?php echo esc_html($whatsapp); ?></b></div>
          <div class="row"><span>Phone</span><b><?php echo esc_html($phone); ?></b></div>
          <div class="hr"></div>
          <div class="row"><span>Service</span><b>Airport • Weddings • Tours</b></div>
          <div class="row"><span>Type</span><b>Private Taxi / Tour</b></div>
        </div>

        <div style="margin-top:14px;">
          <a class="btn primary" href="<?php echo esc_url(slt_whatsapp_link()); ?>" target="_blank" rel="noopener">
            Chat Now on WhatsApp
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section" id="services">
  <div class="container">
    <div class="title">
      <div>
        <h2>Services</h2>
        <p class="sub">Choose the service you need — fast response via WhatsApp.</p>
      </div>
      <a class="btn" href="<?php echo esc_url(slt_whatsapp_link()); ?>" target="_blank" rel="noopener">Get a Quote</a>
    </div>

    <div class="cards">
      <div class="card">
        <h3>Airport Pick Up</h3>
        <p>Pickup from Bandaranaike Airport & transfer to your hotel safely and comfortably.</p>
      </div>
      <div class="card">
        <h3>Airport Drop Off (Flight)</h3>
        <p>On-time drop off with route planning to avoid traffic delays.</p>
      </div>
      <div class="card">
        <h3>Wedding Hire</h3>
        <p>Clean, stylish car with a professional driver for weddings & special events.</p>
      </div>
    </div>

    <div style="height:14px"></div>

    <div class="split">
      <div class="card">
        <h3>Round Tour</h3>
        <p>1-day / multi-day round tours with itinerary suggestions and custom planning.</p>
        <ul class="list" style="margin-top:12px;">
          <li>Custom Itinerary <span>Suggested places</span></li>
          <li>Comfortable Ride <span>A/C & clean</span></li>
          <li>Flexible Time <span>Your schedule</span></li>
        </ul>
      </div>

      <div class="card">
        <h3>Why choose us?</h3>
        <ul class="list" style="margin-top:12px;">
          <li>Reliable service <span>Trusted travel</span></li>
          <li>Reasonable price <span>Fair quotes</span></li>
          <li>Friendly & experienced driver <span>Tourist friendly</span></li>
          <li>Itinerary planning <span>With suggestions</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section" id="booking">
  <div class="container">
    <div class="cta">
      <h2>Book Your Trip</h2>
      <p>Send: date • pickup location • destination • passengers. I’ll reply with a plan and price.</p>
      <div style="display:flex; gap:10px; flex-wrap:wrap;">
        <a class="btn whatsapp" href="<?php echo esc_url(slt_whatsapp_link()); ?>" target="_blank" rel="noopener">
          WhatsApp: <?php echo esc_html($whatsapp); ?>
        </a>
        <a class="btn" href="tel:<?php echo esc_attr($phone); ?>">Call: <?php echo esc_html($phone); ?></a>
      </div>
    </div>
  </div>
</section>

<a class="btn whatsapp floating-whatsapp" href="<?php echo esc_url(slt_whatsapp_link()); ?>" target="_blank" rel="noopener">
  WhatsApp
</a>

<?php get_footer(); ?>
