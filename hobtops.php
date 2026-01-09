<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Premium Kitchen Hobs & Cooktops Collection</title>
  <meta name="description" content="Discover premium kitchen hobs and cooktops with precise flame control, elegant designs, and advanced safety features for modern cooking spaces.">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <style>
        body {
    padding-top: 80px;   /* 90px header + 20px gap */
}


    :root {
      --blue: #0d4f9e;
      --violet: #8b2fa3;
      --pink: #cf3fa6;
      --white: #ffffff;
      --dark: #111;
      --light-blue: #e8f1ff;
      --light-violet: #f5e9ff;
      --light-pink: #fff0f9;
      --gray: #666;
      --light-gray: #f8f9fa;
      --medium-gray: #e9ecef;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }

    body {
      background: #fdfbff;
      color: var(--dark);
      overflow-x: hidden;
      line-height: 1.6;
    }

    /* HERO SECTION */
    .hero {
      position: relative;
      height: 85vh;
      display: flex;
      align-items: center;
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 40px;
      overflow: hidden;
    }

    .hero-content {
      flex: 1;
      z-index: 10;
      padding-right: 60px;
    }

    .hero h1 {
      font-size: 68px;
      font-weight: 800;
      margin-bottom: 25px;
      background: linear-gradient(90deg, var(--blue), var(--violet));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      line-height: 1.1;
    }

    .hero h1 span {
      display: block;
      font-size: 42px;
      color: var(--dark);
      background: none;
      -webkit-text-fill-color: var(--dark);
      margin-top: 10px;
    }

    .hero p {
      font-size: 20px;
      color: #555;
      max-width: 550px;
      margin-bottom: 40px;
      line-height: 1.7;
    }

    .hero-stats {
      display: none;
      gap: 40px;
      margin-top: 50px;
      flex-wrap: wrap;
    }

    .stat-item {
      text-align: center;
      padding: 12px 15px;
      border-radius: 18px;
      background: rgba(255, 255, 255, 0.9);
      box-shadow: 0 12px 35px rgba(139, 47, 163, 0.12);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.4);
      min-width: 160px;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeUp 0.8s ease forwards;
    }

    .stat-item:nth-child(1) { animation-delay: 0.5s; }
    .stat-item:nth-child(2) { animation-delay: 0.7s; }
    .stat-item:nth-child(3) { animation-delay: 0.9s; }

    @keyframes fadeUp {
      to { opacity: 1; transform: translateY(0); }
    }

    .stat-number {
      font-size: 20px;
      font-weight: 800;
      background: linear-gradient(90deg, var(--violet), var(--pink));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: block;
      line-height: 1;
    }

    .stat-label {
      font-size: 12px;
      color: #666;
      font-weight: 600;
      margin-top: 10px;
      text-transform: uppercase;
      letter-spacing: 1.5px;
    }

    .hero-image-container {
      flex: 1;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .hero-image {
      width: 100%;
      max-width: 700px;
      animation: zoomOut 2s ease-out 0.3s forwards;
      transform: scale(1.25) translateX(50px);
      filter: drop-shadow(0 35px 65px rgba(0,0,0,0.25));
      border-radius: 20px;
      overflow: hidden;
      opacity: 0;
    }

    @keyframes zoomOut {
      0% { transform: scale(1.25) translateX(50px); opacity: 0; }
      100% { transform: scale(1) translateX(0); opacity: 1; }
    }

    .floating-element {
      position: absolute;
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, var(--violet), var(--pink));
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 30px;
      z-index: 5;
      box-shadow: 0 15px 35px rgba(139, 47, 163, 0.3);
      animation: float 6s ease-in-out infinite;
    }

    .floating-1 {
      top: 20%;
      left: 10%;
      animation-delay: 0s;
    }

    .floating-2 {
      bottom: 25%;
      right: 15%;
      animation-delay: 1.5s;
      width: 60px;
      height: 60px;
      font-size: 24px;
      background: linear-gradient(135deg, var(--blue), var(--violet));
    }

    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(0deg); }
      50% { transform: translateY(-25px) rotate(5deg); }
    }

    /* SECTION TITLE */
    .section-title {
      text-align: center;
      font-size: 48px;
      font-weight: 800;
      margin: 100px 0 25px;
      background: linear-gradient(90deg, var(--violet), var(--pink));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 120px;
      height: 4px;
      background: linear-gradient(90deg, var(--violet), var(--pink));
      border-radius: 2px;
    }

    .section-desc {
      text-align: center;
      font-size: 18px;
      color: #666;
      max-width: 700px;
      margin: 0 auto 70px;
      line-height: 1.7;
    }

    /* BENEFITS SECTION */
    .benefits-section {
      background: linear-gradient(135deg, var(--light-blue), var(--light-violet));
      padding: 80px 7vw;
      position: relative;
      overflow: hidden;
    }

    .benefits-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 40px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .benefit-card {
      background: var(--white);
      padding: 40px 30px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 15px 35px rgba(13, 79, 158, 0.1);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      border-top: 4px solid var(--blue);
    }

    .benefit-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 25px 50px rgba(13, 79, 158, 0.15);
    }

    .benefit-icon {
      font-size: 48px;
      margin-bottom: 25px;
      color: var(--violet);
      display: block;
    }

    .benefit-card h3 {
      font-size: 22px;
      font-weight: 700;
      color: var(--blue);
      margin-bottom: 15px;
    }

    .benefit-card p {
      color: #666;
      line-height: 1.7;
    }

    /* PRODUCT GRID */
    .product-grid {
      padding: 0 7vw 100px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 50px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .product-card {
      background: var(--white);
      border-radius: 22px;
      padding: 35px 30px;
      box-shadow: 0 15px 45px rgba(0,0,0,0.08);
      transition: 0.4s ease;
      text-align: center;
      position: relative;
      border: 1px solid rgba(255,255,255,0.5);
      overflow: hidden;
    }

    .product-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, var(--violet), var(--pink));
    }

    .product-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 25px 60px rgba(139, 47, 163, 0.15);
    }

    .product-card img {
      height: 220px;
      object-fit: contain;
      width: 100%;
      margin-bottom: 25px;
      transition: transform 0.5s;
    }

    .product-card:hover img {
      transform: scale(1.05);
    }

    .product-card h3 {
      font-size: 22px;
      font-weight: 700;
      color: var(--violet);
      margin-bottom: 15px;
      line-height: 1.3;
    }

    .product-card p {
      font-size: 15px;
      color: #666;
      line-height: 1.6;
      margin-bottom: 25px;
      min-height: 75px;
    }

    .product-features {
      display: flex;
      justify-content: center;
      gap: 8px;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }

    .feature-tag {
      background: linear-gradient(90deg, rgba(139, 47, 163, 0.1), rgba(207, 63, 166, 0.1));
      color: var(--violet);
      padding: 6px 12px;
      border-radius: 15px;
      font-size: 12px;
      font-weight: 600;
    }

    .burner-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background: linear-gradient(90deg, var(--blue), var(--violet));
      color: white;
      padding: 6px 12px;
      border-radius: 15px;
      font-size: 12px;
      font-weight: 700;
      z-index: 2;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* TECHNICAL SPECIFICATIONS */
    .dimension-section {
      background: linear-gradient(135deg, rgba(13, 79, 158, 0.03), rgba(139, 47, 163, 0.03));
      padding: 80px 7vw;
      position: relative;
      overflow: hidden;
    }

    .dimension-title {
      font-size: 42px;
      font-weight: 800;
      text-align: center;
      margin-bottom: 15px;
      background: linear-gradient(90deg, var(--blue), var(--violet));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .dimension-subtitle {
      text-align: center;
      font-size: 16px;
      color: #666;
      max-width: 600px;
      margin: 0 auto 50px;
    }

    .dimension-container {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 60px;
      max-width: 1200px;
      margin: 0 auto;
      flex-wrap: wrap;
    }

    .dimension-image {
      flex: 1;
      min-width: 500px;
      position: relative;
      border-radius: 25px;
      overflow: hidden;
      box-shadow: 0 25px 60px rgba(0,0,0,0.15);
      height: 500px;
    }

    .dimension-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.8s;
    }

    .dimension-image:hover img {
      transform: scale(1.05);
    }

    .dimension-specs {
      flex: 1;
      min-width: 500px;
    }

    .specs-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .spec-card {
      background: white;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.05);
      text-align: center;
      border-left: 4px solid var(--violet);
      transition: transform 0.3s;
    }

    .spec-card:hover {
      transform: translateY(-5px);
    }

    .spec-icon {
      font-size: 32px;
      margin-bottom: 15px;
      color: var(--violet);
      display: block;
    }

    .spec-value {
      font-size: 28px;
      font-weight: 800;
      color: var(--blue);
      display: block;
      margin-bottom: 5px;
    }

    .spec-label {
      font-size: 14px;
      color: #666;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .dimension-highlight {
      margin-top: 40px;
      text-align: center;
      font-style: italic;
      color: #777;
      font-size: 15px;
      padding: 20px;
      background: rgba(139, 47, 163, 0.05);
      border-radius: 10px;
      border-left: 3px solid var(--violet);
    }

    /* COMPARISON TABLE */
    .comparison-section {
      padding: 80px 7vw;
      background: var(--white);
    }

    .comparison-table {
      max-width: 1200px;
      margin: 0 auto;
      overflow-x: auto;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th {
      background: linear-gradient(90deg, var(--blue), var(--violet));
      color: white;
      padding: 20px;
      text-align: left;
      font-weight: 600;
    }

    td {
      padding: 18px 20px;
      border-bottom: 1px solid var(--medium-gray);
    }

    tr:nth-child(even) {
      background: var(--light-gray);
    }

    tr:hover {
      background: var(--light-violet);
    }

    .checkmark {
      color: #4CAF50;
      font-weight: bold;
    }

    .crossmark {
      color: #f44336;
      font-weight: bold;
    }

    /* FAQ SECTION */
    .faq-section {
      padding: 80px 7vw;
      background: linear-gradient(135deg, var(--light-pink), var(--light-violet));
    }

    .faq-title {
      font-size: 42px;
      font-weight: 800;
      text-align: center;
      margin-bottom: 15px;
      background: linear-gradient(90deg, var(--violet), var(--pink));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .faq-subtitle {
      text-align: center;
      font-size: 16px;
      color: #666;
      max-width: 600px;
      margin: 0 auto 50px;
    }

    .faq-container {
      max-width: 900px;
      margin: 0 auto;
    }

    .faq-item {
      background: var(--white);
      border-radius: 15px;
      margin-bottom: 20px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.04);
      border: 1px solid rgba(139, 47, 163, 0.08);
    }

    .faq-question {
      padding: 25px;
      font-size: 18px;
      font-weight: 700;
      color: var(--violet);
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(139, 47, 163, 0.02);
      transition: background 0.3s;
    }

    .faq-question:hover {
      background: rgba(139, 47, 163, 0.05);
    }

    .faq-question i {
      font-size: 20px;
      transition: transform 0.3s;
    }

    .faq-item.active .faq-question i {
      transform: rotate(180deg);
    }

    .faq-answer {
      padding: 0 25px;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease, padding 0.3s ease;
      color: #555;
      line-height: 1.7;
    }

    .faq-item.active .faq-answer {
      padding: 0 25px 25px;
      max-height: 500px;
    }

    /* CTA SECTION */
    .cta-section {
      background: linear-gradient(135deg, var(--blue), var(--violet));
      padding: 80px 7vw;
      text-align: center;
      color: white;
      position: relative;
      overflow: hidden;
    }

    .cta-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" opacity="0.1"><path d="M0,100 Q250,50 500,100 T1000,50 V100 H0 Z" fill="white"/></svg>');
      background-size: cover;
    }

    .cta-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      margin: 0 auto;
    }

    .cta-content h2 {
      font-size: 42px;
      font-weight: 800;
      margin-bottom: 20px;
    }

    .cta-content p {
      font-size: 18px;
      margin-bottom: 40px;
      opacity: 0.9;
    }

    .cta-buttons {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .primary-cta {
      background: var(--pink);
      color: white;
      padding: 16px 40px;
      border-radius: 50px;
      font-weight: 700;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s ease;
      font-size: 18px;
    }

    .primary-cta:hover {
      background: white;
      color: var(--pink);
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(255,255,255,0.2);
    }

    .secondary-cta {
      background: transparent;
      color: white;
      padding: 16px 40px;
      border-radius: 50px;
      font-weight: 700;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      border: 2px solid white;
      transition: all 0.3s ease;
      font-size: 18px;
    }

    .secondary-cta:hover {
      background: white;
      color: var(--violet);
      transform: translateY(-5px);
    }

    /* RESPONSIVE DESIGN */
    @media (max-width: 1200px) {
      .hero h1 { font-size: 60px; }
      .hero-image { max-width: 600px; }
      .dimension-container { flex-direction: column; }
      .dimension-image, .dimension-specs { min-width: 100%; }
      .dimension-image { height: 400px; }
      .product-grid { grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); }
    }

    @media (max-width: 992px) {
      .hero {
        flex-direction: column;
        height: auto;
        padding: 80px 40px;
        text-align: center;
      }
      .hero-content {
        padding-right: 0;
        margin-bottom: 60px;
      }
      .hero-stats { justify-content: center; }
      .floating-element { display: none; }
      .specs-grid { grid-template-columns: 1fr; }
    }

    @media (max-width: 768px) {
      .hero h1 { font-size: 42px; }
      .hero h1 span { font-size: 32px; }
      .hero-stats { gap: 20px; }
      .stat-item { min-width: 140px; padding: 20px; }
      .section-title { font-size: 36px; }
      .dimension-title, .faq-title { font-size: 36px; }
      .faq-question { font-size: 16px; padding: 20px; }
      .faq-answer { padding: 0 20px; }
      .faq-item.active .faq-answer { padding: 0 20px 20px; }
      .product-grid { grid-template-columns: 1fr; }
      .cta-content h2 { font-size: 32px; }
      .cta-buttons { flex-direction: column; align-items: center; }
    }

    @media (max-width: 576px) {
      .product-grid { padding: 0 5vw 60px; }
      .dimension-section, .faq-section, .benefits-section, .comparison-section, .cta-section { padding: 60px 5vw; }
      .hero-stats { flex-direction: column; align-items: center; }
      .stat-item { width: 80%; }
      .dimension-image { min-width: 100%; height: 300px; }
      .benefit-card { padding: 30px 20px; }
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Premium Kitchen Hobs & Cooktops
        <span>Precision Heating. Refined Design.</span>
      </h1>
      
      <p>
        Elevate your cooking experience with our premium range of kitchen hobs.
        Designed for precise flame control, rapid heating, and seamless integration —
        crafted for modern lifestyles and elegant kitchens.
      </p>
      
      <div class="hero-stats">
        <div class="stat-item">
          <span class="stat-number">High Efficiency</span>
          <span class="stat-label">Burner Design</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">Auto / Manual</span>
          <span class="stat-label">Ignition Options</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">Premium Glass</span>
          <span class="stat-label">Surface Finish</span>
        </div>
      </div>
    </div>
    
    <div class="hero-image-container">
      <div class="floating-element floating-1">
        <i class="fas fa-fire"></i>
      </div>
      <div class="floating-element floating-2">
        <i class="fas fa-sliders-h"></i>
      </div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/Hornet-3-2.webp" alt="Premium Glass HOBTOP" class="hero-image" />
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits-section">
    <h2 class="section-title">Why Choose Our Hobs</h2>
    <p class="section-desc">Experience superior cooking performance with intelligent features</p>
    
    <div class="benefits-grid">
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-burn"></i>
        </div>
        <h3>Precise Flame Control</h3>
        <p>Multi-level flame adjustment for perfect cooking results every time</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-bolt"></i>
        </div>
        <h3>Auto Ignition</h3>
        <p>Instant, hassle-free ignition with electronic spark technology</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3>Advanced Safety</h3>
        <p>Flame failure protection and child lock for worry-free cooking</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-broom"></i>
        </div>
        <h3>Easy Cleaning</h3>
        <p>Glass surfaces and removable parts for effortless maintenance</p>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <h2 class="section-title">Discover Premium HOBTOP Designs</h2>
  <p class="section-desc">
    A thoughtfully curated collection of premium kitchen hobs —
    combining powerful burners, elegant glass finishes,
    and advanced safety features for refined cooking spaces.
  </p>
  
  <section class="product-grid">
    <!-- Product Cards -->
    <div class="product-card">
      <div class="burner-badge">3 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/Hornet-3-1.webp" alt="Hornet Cooktop 3 Burner" />
      <h3>Hornet Cooktop 3 Burner</h3>
      <p>
        A compact yet powerful cooktop with high-efficiency brass burners,
        ideal for everyday cooking in modern, space-conscious kitchens.
      </p>
      <div class="product-features">
        <span class="feature-tag">Brass Burners</span>
        <span class="feature-tag">Flame Safety</span>
        <span class="feature-tag">Compact Design</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">4 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/Hornet-4-1.webp" alt="Hornet Cooktop 4 Burner" />
      <h3>Hornet Cooktop 4 Burner</h3>
      <p>
        Designed for family kitchens, this four-burner cooktop offers
        versatile flame control and reliable performance for multitasking.
      </p>
      <div class="product-features">
        <span class="feature-tag">Four Burners</span>
        <span class="feature-tag">Dual Flame</span>
        <span class="feature-tag">Auto Ignition</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">3 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/Maple-0.webp" alt="Maple Cooktop 3 Burner" />
      <h3>Maple Cooktop 3 Burner</h3>
      <p>
        Sleek glass surface paired with precision burners,
        bringing contemporary style and effortless control to your kitchen.
      </p>
      <div class="product-features">
        <span class="feature-tag">Glass Surface</span>
        <span class="feature-tag">Touch Controls</span>
        <span class="feature-tag">Child Lock</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">4 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/maple-4-0.webp" alt="Maple Cooktop 4 Burner" />
      <h3>Maple Cooktop 4 Burner</h3>
      <p>
        A premium glass hob with rapid heating zones,
        crafted for modern homes that demand style and performance.
      </p>
      <div class="product-features">
        <span class="feature-tag">Rapid Heating</span>
        <span class="feature-tag">Timer Function</span>
        <span class="feature-tag">Boost Mode</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">3 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/olive-3-1.webp" alt="Olive Cooktop 3 Burner" />
      <h3>Olive Cooktop 3 Burner</h3>
      <p>
        An energy-efficient cooktop with optimized burner placement,
        designed for consistent cooking and everyday durability.
      </p>
      <div class="product-features">
        <span class="feature-tag">Energy Efficient</span>
        <span class="feature-tag">Stainless Steel</span>
        <span class="feature-tag">Easy Clean</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">4 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/olive-3-1.webp" alt="Olive Cooktop 4 Burner" />
      <h3>Olive Cooktop 4 Burner</h3>
      <p>
        High-power burners with professional-grade performance,
        perfect for fast cooking and heavy meal preparation.
      </p>
      <div class="product-features">
        <span class="feature-tag">High Power</span>
        <span class="feature-tag">Triple Crown</span>
        <span class="feature-tag">Professional Grade</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">3 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/Piano-3-1.webp" alt="Piano Auto Cooktop 3 Burner" />
      <h3>Piano Auto Cooktop 3 Burner</h3>
      <p>
        Elegant piano-black finish with automatic ignition,
        offering smooth operation and refined aesthetics.
      </p>
      <div class="product-features">
        <span class="feature-tag">Auto Ignition</span>
        <span class="feature-tag">Piano Finish</span>
        <span class="feature-tag">Precise Control</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">4 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/Piano-4BR-Auto-Top-1-1.webp" alt="Piano Auto Cooktop 4 Burner" />
      <h3>Piano Auto Cooktop 4 Burner</h3>
      <p>
        A full-size auto-ignition cooktop combining premium design,
        comfort handling, and efficient flame distribution.
      </p>
      <div class="product-features">
        <span class="feature-tag">Full Auto Ignition</span>
        <span class="feature-tag">Spill-Proof</span>
        <span class="feature-tag">Knurled Knobs</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">3 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/Piano-3-Non-Auto-1.webp" alt="Piano Non Auto Cooktop 3 Burner" />
      <h3>Piano Non Auto Cooktop 3 Burner</h3>
      <p>
        Classic manual ignition paired with a luxurious finish,
        engineered for stable flames and long-term reliability.
      </p>
      <div class="product-features">
        <span class="feature-tag">Manual Ignition</span>
        <span class="feature-tag">Piano Black</span>
        <span class="feature-tag">Stable Flame</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">4 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/Piano-4-Br-Non-Auto-1.webp" alt="Piano Non Auto Cooktop 4 Burner" />
      <h3>Piano Non Auto Cooktop 4 Burner</h3>
      <p>
        Robust construction with cast iron supports,
        built for durability and confident everyday cooking.
      </p>
      <div class="product-features">
        <span class="feature-tag">Cast Iron Grates</span>
        <span class="feature-tag">Durable Build</span>
        <span class="feature-tag">Elegant Design</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">4 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/pvd-4-rose-gold.webp" alt="PVD Cooktop 4BR – Rose Gold" />
      <h3>PVD Cooktop 4BR – Rose Gold</h3>
      <p>
        A statement cooktop featuring rose gold PVD coating,
        crafted for luxury kitchens that demand distinction.
      </p>
      <div class="product-features">
        <span class="feature-tag">Rose Gold Finish</span>
        <span class="feature-tag">PVD Coating</span>
        <span class="feature-tag">Luxury Design</span>
      </div>
    </div>

    <div class="product-card">
      <div class="burner-badge">3 Burner</div>
      <img src="https://carysil.com/wp-content/uploads/2025/07/rose-gold-3br.webp" alt="PVD Cooktop Rose Gold 3 Br" />
      <h3>PVD Cooktop Rose Gold 3 Br</h3>
      <p>
        Compact luxury with premium rose gold detailing,
        designed to elevate modern kitchen interiors.
      </p>
      <div class="product-features">
        <span class="feature-tag">Compact Luxury</span>
        <span class="feature-tag">Rose Gold</span>
        <span class="feature-tag">Premium Build</span>
      </div>
    </div>
  </section>

  <!-- Technical Specifications -->
  <section class="dimension-section" id="technical-specs">
    <div class="dimension-title">Technical Specifications</div>
    <div class="dimension-subtitle">
      Precision-engineered dimensions designed for performance, safety, and seamless installation
    </div>
    
    <div class="dimension-container">
      <div class="dimension-image">
        <img src="https://5.imimg.com/data5/SELLER/Default/2025/3/497162870/FN/XO/AO/32144756/carysil-80-cm-4-burner-cooktop-hornet-4-burner-auto.jpg" alt="HOBTOP Technical Design" />
      </div>
      
      <div class="dimension-specs">
        <div class="specs-grid">
          <div class="spec-card">
            <div class="spec-icon">
              <i class="fas fa-arrows-alt-h"></i>
            </div>
            <span class="spec-value">750mm</span>
            <span class="spec-label">Standard Width</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">
              <i class="fas fa-arrows-alt-v"></i>
            </div>
            <span class="spec-value">520mm</span>
            <span class="spec-label">Standard Depth</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">
              <i class="fas fa-ruler-combined"></i>
            </div>
            <span class="spec-value">4 Zones</span>
            <span class="spec-label">Cooking Zones</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <span class="spec-value">7.2kW</span>
            <span class="spec-label">Total Power</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">
              <i class="fas fa-thermometer-half"></i>
            </div>
            <span class="spec-value">12 Levels</span>
            <span class="spec-label">Heat Settings</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">
              <i class="fas fa-clock"></i>
            </div>
            <span class="spec-value">180 Min</span>
            <span class="spec-label">Timer Range</span>
          </div>
        </div>
        
        <div class="dimension-highlight">
          <i class="fas fa-lightbulb" style="color:var(--violet); margin-right:10px;"></i>
          Compatible with standard kitchen countertops and designed
          for safe, efficient everyday cooking
        </div>
      </div>
    </div>
  </section>

  <!-- Comparison Table -->
  <section class="comparison-section">
    <h2 class="section-title">Series Comparison</h2>
    <p class="section-desc">Choose the perfect hob series based on your cooking needs and kitchen style</p>
    
    <div class="comparison-table">
      <table>
        <thead>
          <tr>
            <th>Feature</th>
            <th>Hornet Series</th>
            <th>Maple Series</th>
            <th>Piano Series</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Surface Material</td>
            <td>Stainless Steel</td>
            <td class="checkmark">Tempered Glass</td>
            <td class="checkmark">Piano Black Glass</td>
          </tr>
          <tr>
            <td>Burner Efficiency</td>
            <td class="checkmark">High</td>
            <td class="checkmark">Very High</td>
            <td class="checkmark">Premium</td>
          </tr>
          <tr>
            <td>Ignition Type</td>
            <td>Manual/Auto</td>
            <td class="checkmark">Auto</td>
            <td>Manual & Auto</td>
          </tr>
          <tr>
            <td>Safety Features</td>
            <td>Basic</td>
            <td class="checkmark">Advanced</td>
            <td class="checkmark">Premium</td>
          </tr>
          <tr>
            <td>Cleaning</td>
            <td>Easy</td>
            <td class="checkmark">Very Easy</td>
            <td class="checkmark">Easiest</td>
          </tr>
          <tr>
            <td>Design Style</td>
            <td>Classic</td>
            <td class="checkmark">Modern</td>
            <td class="checkmark">Luxury</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="faq-title">Expert Insights</div>
    <div class="faq-subtitle">
      Expert guidance to help you choose the right hob for your kitchen and cooking style
    </div>
    
    <div class="faq-container">
      <div class="faq-item">
        <div class="faq-question">
          <span>What are the advantages of PVD finish cooktops?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            PVD finishes offer superior durability, scratch resistance,
            and long-lasting color retention. They enhance aesthetics
            while withstanding heat, daily use, and cleaning.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>What distinguishes Piano Auto from Piano Non-Auto cooktops?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Auto cooktops ignite electronically for ease and convenience,
            while non-auto models use manual ignition.
            Both deliver identical cooking performance and premium build quality.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>How do I choose between Hornet, Maple, and Olive series?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Hornet suits traditional kitchens, Maple complements modern glass interiors,
            and Olive focuses on energy efficiency.
            Choose based on design preference and cooking habits.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>What maintenance ensures long-term cooktop performance?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Routine cleaning, gentle glass care,
            and periodic safety checks ensure long-term performance.
            Professional servicing every few years is recommended.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section" id="contact">
    <div class="cta-content">
      <h2>Ready to Upgrade Your Kitchen?</h2>
      <p>
        Book a free consultation with our hob experts. Get personalized recommendations, 
        installation guidance, and exclusive offers on premium cooktop collections.
      </p>
      
      <div class="cta-buttons">
        <a href="tel:+919876543210" class="primary-cta">
          <i class="fas fa-phone"></i>
          Call Now: +91 9945689996
        </a>
        <a href="mailto:info@homestyle.com" class="secondary-cta">
          <i class="fas fa-envelope"></i>
          Email Inquiry
        </a>
      </div>
      
      <div style="margin-top: 40px; font-size: 14px; opacity: 0.8;">
        <i class="fas fa-shield-alt"></i> 5-Year Warranty | 
        <i class="fas fa-truck"></i> Free Installation | 
        <i class="fas fa-clock"></i> 24/7 Support
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // FAQ functionality
      const faqQuestions = document.querySelectorAll('.faq-question');
      
      faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
          const faqItem = this.parentElement;
          const isActive = faqItem.classList.contains('active');
          
          // Close all FAQ items
          document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
          });
          
          // If clicked item wasn't active, open it
          if (!isActive) {
            faqItem.classList.add('active');
          }
        });
      });
      
      // Open first FAQ by default
      if (faqQuestions.length > 0) {
        faqQuestions[0].parentElement.classList.add('active');
      }
      
      // Floating elements animation on hover
      const floatingElements = document.querySelectorAll('.floating-element');
      floatingElements.forEach(el => {
        el.addEventListener('mouseenter', function() {
          this.style.transform = 'scale(1.2)';
        });
        el.addEventListener('mouseleave', function() {
          this.style.transform = 'scale(1)';
        });
      });
    });
  </script>
  
<?php include "floating-buttons.php" ?>
<?php include 'footer.php'; ?>
</body>
</html>