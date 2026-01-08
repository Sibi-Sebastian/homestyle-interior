<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Premium Faucets & Sinks Collection</title>
  <meta name="description" content="Discover premium kitchen and bathroom faucets and sinks with elegant design, smooth water flow, and lasting durability for modern interiors.">
  
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

    /* CATEGORY SECTION TITLES */
    .category-title {
      font-size: 42px;
      font-weight: 800;
      text-align: center;
      margin: 100px 0 25px;
      background: linear-gradient(90deg, var(--blue), var(--violet));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      position: relative;
    }

    .category-title::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 120px;
      height: 4px;
      background: linear-gradient(90deg, var(--blue), var(--violet));
      border-radius: 2px;
    }

    .category-subtitle {
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

    /* TECHNICAL SPECIFICATIONS */
    .spec-section {
      background: linear-gradient(135deg, rgba(13, 79, 158, 0.03), rgba(139, 47, 163, 0.03));
      padding: 80px 7vw;
      position: relative;
      overflow: hidden;
    }

    .spec-title {
      font-size: 42px;
      font-weight: 800;
      text-align: center;
      margin-bottom: 15px;
      background: linear-gradient(90deg, var(--blue), var(--violet));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .spec-subtitle {
      text-align: center;
      font-size: 16px;
      color: #666;
      max-width: 600px;
      margin: 0 auto 50px;
    }

    .spec-container {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 60px;
      max-width: 1200px;
      margin: 0 auto;
      flex-wrap: wrap;
    }

    .spec-image {
      flex: 1;
      min-width: 500px;
      position: relative;
      border-radius: 25px;
      overflow: hidden;
      box-shadow: 0 25px 60px rgba(0,0,0,0.15);
      height: 500px;
    }

    .spec-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.8s;
    }

    .spec-image:hover img {
      transform: scale(1.05);
    }

    .spec-details {
      flex: 1;
      min-width: 500px;
    }

    .specs-list {
      list-style: none;
    }

    .specs-list li {
      padding: 25px;
      margin-bottom: 20px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      border-left: 4px solid var(--violet);
      transition: transform 0.3s;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .specs-list li:hover {
      transform: translateX(10px);
      background: white;
    }

    .spec-category {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .spec-category i {
      font-size: 24px;
      color: var(--violet);
      margin-right: 15px;
      width: 40px;
    }

    .spec-category h4 {
      font-size: 18px;
      color: var(--dark);
    }

    .spec-text {
      padding-left: 55px;
      color: #666;
      line-height: 1.6;
    }

    .spec-highlight {
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
      .spec-container { flex-direction: column; }
      .spec-image, .spec-details { min-width: 100%; }
      .spec-image { height: 400px; }
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
    }

    @media (max-width: 768px) {
      .hero h1 { font-size: 42px; }
      .hero h1 span { font-size: 32px; }
      .hero-stats { gap: 20px; }
      .stat-item { min-width: 140px; padding: 20px; }
      .section-title, .category-title { font-size: 36px; }
      .spec-title, .faq-title { font-size: 36px; }
      .faq-question { font-size: 16px; padding: 20px; }
      .faq-answer { padding: 0 20px; }
      .faq-item.active .faq-answer { padding: 0 20px 20px; }
      .product-grid { grid-template-columns: 1fr; }
      .cta-content h2 { font-size: 32px; }
      .cta-buttons { flex-direction: column; align-items: center; }
    }

    @media (max-width: 576px) {
      .product-grid { padding: 0 5vw 60px; }
      .spec-section, .faq-section, .benefits-section, .comparison-section, .cta-section { padding: 60px 5vw; }
      .hero-stats { flex-direction: column; align-items: center; }
      .stat-item { width: 80%; }
      .spec-image { min-width: 100%; height: 300px; }
      .benefit-card { padding: 30px 20px; }
    }
  </style>
</head>
<body>
<?php include 'header.php'; ?>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Premium Water Solutions
        <span>Precision Flow. Timeless Design.</span>
      </h1>
      
      <p>
        Enhance your kitchen and bathroom spaces with our curated range of premium faucets and sinks.
        Designed for smooth water flow, lasting durability, and refined aesthetics — crafted to complement modern interiors.
      </p>
      
      <div class="hero-stats">
        <div class="stat-item">
          <span class="stat-number">Premium</span>
          <span class="stat-label">Material Quality</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">Smooth</span>
          <span class="stat-label">Water Control</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">Multiple</span>
          <span class="stat-label">Finish Options</span>
        </div>
      </div>
    </div>
    
    <div class="hero-image-container">
      <div class="floating-element floating-1">
        <i class="fas fa-faucet"></i>
      </div>
      <div class="floating-element floating-2">
        <i class="fas fa-tint"></i>
      </div>
      <img src="https://cdn11.bigcommerce.com/s-wfrpmvke08/images/stencil/original/products/4601/18542/565561-insitu-2__14303.1680736363.jpg?c=1" alt="Premium Kitchen Faucet" class="hero-image" />
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits-section">
    <h2 class="section-title">Why Choose Our Water Solutions</h2>
    <p class="section-desc">Experience superior performance with intelligent engineering and elegant design</p>
    
    <div class="benefits-grid">
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-tint"></i>
        </div>
        <h3>Optimal Water Flow</h3>
        <p>Precision-engineered aerators ensure smooth, efficient water flow with minimal splash</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3>Durable Construction</h3>
        <p>Premium materials and corrosion-resistant finishes for long-lasting performance</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-leaf"></i>
        </div>
        <h3>Water Efficient</h3>
        <p>Advanced flow restrictors reduce water consumption without compromising performance</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-sparkles"></i>
        </div>
        <h3>Easy Maintenance</h3>
        <p>Smooth surfaces and accessible parts simplify cleaning and upkeep</p>
      </div>
    </div>
  </section>

  <!-- SINKS SECTION -->
  <div class="category-title">Premium Sinks Collection</div>
  <div class="category-subtitle">
    A refined selection of kitchen sinks crafted for durability,
    daily convenience, and seamless integration with modern kitchen designs.
  </div>
  
  <section class="product-grid">
    <!-- Sink Cards -->
    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/AL-250R_Champange.3449.png" alt="Carysil 250R Tango Double Bowl Kitchen Sink" />
      <h3>Carysil 250R Tango Double Bowl Kitchen Sink</h3>
      <p>
        A spacious double-bowl sink designed for effortless multitasking,
        featuring sound-reducing construction and a refined stainless steel finish.
      </p>
      <div class="product-features">
        <span class="feature-tag">Double Bowl</span>
        <span class="feature-tag">Soundproof</span>
        <span class="feature-tag">Stainless Steel</span>
      </div>
    </div>

    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/06/Waltz-560-FE_Croma.webp" alt="Carysil 560 EF Waltz Single Bowl Kitchen Sink" />
      <h3>Carysil 560 EF Waltz Single Bowl Kitchen Sink</h3>
      <p>
        A deep single-bowl sink ideal for large cookware,
        crafted with premium steel for durability and easy maintenance.
      </p>
      <div class="product-features">
        <span class="feature-tag">Single Bowl</span>
        <span class="feature-tag">Deep Basin</span>
        <span class="feature-tag">Easy Clean</span>
      </div>
    </div>

    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/ASD-1.png" alt="American Design ASB1818 Kitchen Sink" />
      <h3>American Design ASB1818 Kitchen Sink</h3>
      <p>
        Clean American styling combined with robust construction,
        perfectly sized for contemporary kitchen layouts.
      </p>
      <div class="product-features">
        <span class="feature-tag">American Design</span>
        <span class="feature-tag">Premium Finish</span>
        <span class="feature-tag">Durable</span>
      </div>
    </div>

    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/24x20x8-0.webp" alt="Carysil Elegance Plus Single Bowl 24x20x8" />
      <h3>Carysil Elegance Plus Single Bowl 24x20x8</h3>
      <p>
        A generously sized single-bowl sink with sound-absorbing technology,
        designed for quiet performance and everyday comfort.
      </p>
      <div class="product-features">
        <span class="feature-tag">Elegance Plus</span>
        <span class="feature-tag">Spacious</span>
        <span class="feature-tag">Soundproof</span>
      </div>
    </div>

    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/tip-toe-2.webp" alt="Carysil D100L Tip Toe Single Bowl with Drainer" />
      <h3>Carysil D100L Tip Toe Single Bowl with Drainer</h3>
      <p>
        An intelligently designed sink with an integrated drainer,
        offering practical workflow and ergonomic convenience.
      </p>
      <div class="product-features">
        <span class="feature-tag">Integrated Drainer</span>
        <span class="feature-tag">Ergonomic</span>
        <span class="feature-tag">Practical Design</span>
      </div>
    </div>

    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/Big-b-4.webp" alt="Carysil Big Bowl Kitchen Sink" />
      <h3>Carysil Big Bowl Kitchen Sink</h3>
      <p>
        An extra-large bowl sink built for heavy usage,
        ideal for handling oversized utensils with ease.
      </p>
      <div class="product-features">
        <span class="feature-tag">Big Bowl</span>
        <span class="feature-tag">Extra Large</span>
        <span class="feature-tag">Maximum Capacity</span>
      </div>
    </div>
  </section>

  <!-- FAUCETS SECTION -->
  <div class="category-title">Premium Faucets Collection</div>
  <div class="category-subtitle">
    Thoughtfully designed faucets combining advanced engineering,
    smooth operation, and elegant finishes for kitchens and bathrooms.
  </div>

  <section class="product-grid">
    <!-- Faucet Cards -->
    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/ALA-confelx-2.webp" alt="ALA 01504 Kitchen Faucet" />
      <h3>ALA 01504 Kitchen Faucet</h3>
      <p>
        A minimalist faucet offering smooth operation,
        precision control, and long-lasting ceramic valve technology.
      </p>
      <div class="product-features">
        <span class="feature-tag">Ceramic Valves</span>
        <span class="feature-tag">Smooth Operation</span>
        <span class="feature-tag">Modern Design</span>
      </div>
    </div>

    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/1506-Nera-1.webp" alt="ALA 01506 Kitchen Faucet" />
      <h3>ALA 01506 Kitchen Faucet</h3>
      <p>
        A high-arc faucet with pull-down spray functionality,
        designed for flexibility, reach, and effortless cleaning.
      </p>
      <div class="product-features">
        <span class="feature-tag">High-Arc Design</span>
        <span class="feature-tag">Pull-Down Sprayer</span>
        <span class="feature-tag">Magnetic Docking</span>
      </div>
    </div>

    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/1507-Cornflakes-2.webp" alt="ALA 01507 Kitchen Faucet" />
      <h3>ALA 01507 Kitchen Faucet</h3>
      <p>
        Inspired by professional kitchens,
        this faucet combines bold design with dependable daily performance.
      </p>
      <div class="product-features">
        <span class="feature-tag">Professional Grade</span>
        <span class="feature-tag">Industrial Styling</span>
        <span class="feature-tag">Heavy-Duty</span>
      </div>
    </div>

    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/amaze-3-0.webp" alt="Amaze 3 Kitchen Faucet" />
      <h3>Amaze 3 Kitchen Faucet</h3>
      <p>
        A contemporary faucet that blends innovative styling
        with practical functionality for modern kitchen spaces.
      </p>
      <div class="product-features">
        <span class="feature-tag">Innovative Design</span>
        <span class="feature-tag">Advanced Features</span>
        <span class="feature-tag">Elegant Aesthetics</span>
      </div>
    </div>

    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/ALA-1514-1.webp" alt="Carysil Alpha04 Kitchen Faucet" />
      <h3>Carysil Alpha 04 Kitchen Faucet</h3>
      <p>
        A refined faucet crafted for precision water control,
        featuring durable internals and timeless design.
      </p>
      <div class="product-features">
        <span class="feature-tag">Alpha Series</span>
        <span class="feature-tag">Premium Construction</span>
        <span class="feature-tag">Precise Control</span>
      </div>
    </div>

    <div class="product-card">
      <img src="https://carysil.com/wp-content/uploads/2025/07/chicago-03.webp" alt="Chicago 03 Kitchen Faucet" />
      <h3>Chicago 03 Kitchen Faucet</h3>
      <p>
        Classic aesthetics meet modern performance,
        creating a faucet that suits both traditional and contemporary interiors.
      </p>
      <div class="product-features">
        <span class="feature-tag">Classic Design</span>
        <span class="feature-tag">Modern Functionality</span>
        <span class="feature-tag">Timeless Aesthetic</span>
      </div>
    </div>
  </section>

  <!-- Technical Specifications -->
  <section class="spec-section">
    <div class="spec-title">Technical Excellence</div>
    <div class="spec-subtitle">
      Engineered to deliver reliable performance,
      water efficiency, and long-term durability.
    </div>
    
    <div class="spec-container">
      <div class="spec-image">
        <img src="https://carysil.com/wp-content/uploads/2025/07/render-nera.png" alt="Faucet Technology" />
      </div>
      
      <div class="spec-details">
        <ul class="specs-list">
          <li>
            <div class="spec-category">
              <i class="fas fa-tachometer-alt"></i>
              <h4>Flow Rate Technology</h4>
            </div>
            <p class="spec-text">Advanced aerator technology ensures smooth water flow
            while reducing unnecessary water consumption.</p>
          </li>
          
          <li>
            <div class="spec-category">
              <i class="fas fa-temperature-high"></i>
              <h4>Temperature Control</h4>
            </div>
            <p class="spec-text">Precision valve systems provide consistent temperature control
            for enhanced comfort and safety.</p>
          </li>
          
          <li>
            <div class="spec-category">
              <i class="fas fa-microchip"></i>
              <h4>Smart Sensor Technology</h4>
            </div>
            <p class="spec-text">Touch-free sensor options enable hygienic operation,
            ideal for modern kitchens and bathrooms.</p>
          </li>
          
          <li>
            <div class="spec-category">
              <i class="fas fa-ruler-combined"></i>
              <h4>Installation Flexibility</h4>
            </div>
            <p class="spec-text">Universal mounting systems ensure compatibility
            with most standard countertop and sink configurations.</p>
          </li>
        </ul>
        
        <div class="spec-highlight">
          <i class="fas fa-leaf" style="color:var(--violet); margin-right:10px;"></i>
          Designed to support water efficiency without compromising
          on performance or user comfort.
        </div>
      </div>
    </div>
  </section>

  <!-- Comparison Table -->
  <section class="comparison-section">
    <h2 class="section-title">Material & Finish Comparison</h2>
    <p class="section-desc">Choose the right materials and finishes for your specific needs and preferences</p>
    
    <div class="comparison-table">
      <table>
        <thead>
          <tr>
            <th>Feature</th>
            <th>Stainless Steel</th>
            <th>Brass Construction</th>
            <th>PVD Coated</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Durability</td>
            <td class="checkmark">Excellent</td>
            <td class="checkmark">Superior</td>
            <td class="checkmark">Premium</td>
          </tr>
          <tr>
            <td>Corrosion Resistance</td>
            <td class="checkmark">High</td>
            <td class="checkmark">Very High</td>
            <td class="checkmark">Highest</td>
          </tr>
          <tr>
            <td>Finish Options</td>
            <td>Limited</td>
            <td>Standard</td>
            <td class="checkmark">Multiple</td>
          </tr>
          <tr>
            <td>Maintenance</td>
            <td class="checkmark">Easy</td>
            <td>Moderate</td>
            <td class="checkmark">Easy</td>
          </tr>
          <tr>
            <td>Lifespan</td>
            <td>10-15 Years</td>
            <td>15-20 Years</td>
            <td class="checkmark">20+ Years</td>
          </tr>
          <tr>
            <td>Warranty</td>
            <td>5 Years</td>
            <td>7 Years</td>
            <td class="checkmark">10 Years</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="faq-title">Expert Insights</div>
    <div class="faq-subtitle">
      Helpful answers to guide you in choosing the right faucets and sinks for your space
    </div>
    
    <div class="faq-container">
      <div class="faq-item">
        <div class="faq-question">
          <span>What are the benefits of touchless faucets in kitchen and bathroom applications?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Touchless faucets improve hygiene, reduce water wastage,
            and offer hands-free convenience — ideal for busy kitchens and bathrooms.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>How do I choose between different sink materials like stainless steel, granite composite, or fireclay?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Stainless steel offers durability and easy maintenance,
            granite composite provides strength and color options,
            while fireclay delivers a classic, premium appearance.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>What factors determine water pressure in faucets and how can I optimize it?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Water pressure depends on plumbing, aerators, and valve quality.
            Choosing well-engineered faucets ensures balanced flow and efficiency.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>What maintenance extends the life of kitchen and bathroom faucets?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Regular gentle cleaning, aerator checks,
            and proper care of finishes help maintain performance and appearance.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section" id="contact">
    <div class="cta-content">
      <h2>Ready to Upgrade Your Water Solutions?</h2>
      <p>
        Book a free consultation with our experts. Get personalized recommendations, 
        installation guidance, and exclusive offers on premium faucets and sinks collections.
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
        <i class="fas fa-shield-alt"></i> 10-Year Warranty | 
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