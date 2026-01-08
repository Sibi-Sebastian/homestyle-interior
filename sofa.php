<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Premium Sofa Collection</title>
  <meta name="description" content="Discover premium sofa collections with luxurious comfort, elegant designs, and superior craftsmanship for modern living spaces.">
  
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

    /* MATERIALS SHOWCASE SECTION - CREATIVE ADDITION */
    .materials-section {
      padding: 80px 7vw;
      background: linear-gradient(135deg, var(--light-pink), var(--light-violet));
      position: relative;
      overflow: hidden;
    }

    .materials-showcase {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .material-card {
      background: var(--white);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 20px 50px rgba(0,0,0,0.1);
      transition: transform 0.4s ease;
      position: relative;
    }

    .material-card:hover {
      transform: translateY(-15px);
    }

    .material-image {
      height: 250px;
      overflow: hidden;
    }

    .material-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.8s;
    }

    .material-card:hover .material-image img {
      transform: scale(1.1);
    }

    .material-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(to bottom, transparent 60%, rgba(0,0,0,0.7));
      display: flex;
      align-items: flex-end;
      padding: 25px;
    }

    .material-info {
      color: white;
    }

    .material-info h3 {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .material-info p {
      font-size: 14px;
      opacity: 0.9;
    }

    .material-tags {
      display: flex;
      gap: 10px;
      margin-top: 15px;
    }

    .material-tag {
      background: rgba(255,255,255,0.2);
      backdrop-filter: blur(10px);
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
    }

    /* BENEFITS SECTION */
    .benefits-section {
      padding: 80px 7vw;
      background: linear-gradient(135deg, var(--light-blue), var(--light-violet));
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
      object-fit: cover;
      width: 100%;
      margin-bottom: 25px;
      border-radius: 12px;
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

    .product-type {
      font-size: 13px;
      color: var(--blue);
      font-weight: 600;
      margin-top: 10px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    /* STYLE INSPIRATION SECTION - CREATIVE ADDITION */
    .style-section {
      padding: 80px 7vw;
      background: white;
    }

    .style-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 40px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .style-card {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0,0,0,0.1);
      position: relative;
    }

    .style-image {
      height: 400px;
      overflow: hidden;
    }

    .style-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.8s;
    }

    .style-card:hover .style-image img {
      transform: scale(1.1);
    }

    .style-content {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
      color: white;
      padding: 30px;
      transform: translateY(20px);
      transition: transform 0.4s ease;
    }

    .style-card:hover .style-content {
      transform: translateY(0);
    }

    .style-content h3 {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .style-content p {
      font-size: 14px;
      opacity: 0.9;
      margin-bottom: 15px;
    }

    .style-tags {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .style-tag {
      background: rgba(255,255,255,0.2);
      backdrop-filter: blur(10px);
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
    }

    /* COMPARISON TABLE */
    .comparison-section {
      padding: 80px 7vw;
      background: linear-gradient(135deg, rgba(13, 79, 158, 0.03), rgba(139, 47, 163, 0.03));
    }

    .comparison-table {
      max-width: 1200px;
      margin: 0 auto;
      overflow-x: auto;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.08);
      background: white;
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
      .product-grid { grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); }
      .style-image { height: 350px; }
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
      .style-grid { grid-template-columns: 1fr; }
    }

    @media (max-width: 768px) {
      .hero h1 { font-size: 42px; }
      .hero h1 span { font-size: 32px; }
      .hero-stats { gap: 20px; }
      .stat-item { min-width: 140px; padding: 20px; }
      .section-title { font-size: 36px; }
      .faq-title { font-size: 36px; }
      .faq-question { font-size: 16px; padding: 20px; }
      .faq-answer { padding: 0 20px; }
      .faq-item.active .faq-answer { padding: 0 20px 20px; }
      .product-grid { grid-template-columns: 1fr; }
      .cta-content h2 { font-size: 32px; }
      .cta-buttons { flex-direction: column; align-items: center; }
      .style-image { height: 300px; }
      .material-image { height: 200px; }
    }

    @media (max-width: 576px) {
      .product-grid { padding: 0 5vw 60px; }
      .materials-section, .benefits-section, .style-section, .comparison-section, .faq-section, .cta-section { padding: 60px 5vw; }
      .hero-stats { flex-direction: column; align-items: center; }
      .stat-item { width: 80%; }
      .benefit-card { padding: 30px 20px; }
    }
  </style>
</head>
<body>
<?php include 'header.php'; ?>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Premium Sofa Collection
        <span>Crafted for Comfort. Designed for Living.</span>
      </h1>
      
      <p>
        Discover refined seating crafted for modern lifestyles.
        Our premium sofa collection blends ergonomic comfort,
        luxurious materials, and timeless design — made to
        elevate living spaces with effortless elegance.
      </p>
      
      <div class="hero-stats">
        <div class="stat-item">
          <span class="stat-number">Ergonomic</span>
          <span class="stat-label">Seating Comfort</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">Premium</span>
          <span class="stat-label">Upholstery</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">Solid</span>
          <span class="stat-label">Wood Framework</span>
        </div>
      </div>
    </div>
    
    <div class="hero-image-container">
      <div class="floating-element floating-1">
        <i class="fas fa-couch"></i>
      </div>
      <div class="floating-element floating-2">
        <i class="fas fa-star"></i>
      </div>
      <img src="images/furniture/sofas/1680685596231a1f94015a959-HLKT00000801_living-room-800x600_7-main.jpg" alt="Premium Sofa Design" class="hero-image" />
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits-section">
    <h2 class="section-title">Why Choose Our Sofas</h2>
    <p class="section-desc">Experience superior comfort with intelligent design and luxurious craftsmanship</p>
    
    <div class="benefits-grid">
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-heart"></i>
        </div>
        <h3>Optimal Comfort</h3>
        <p>High-density foam and ergonomic design for all-day relaxation</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3>Durable Construction</h3>
        <p>Solid wood frames and premium upholstery for long-lasting use</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-sparkles"></i>
        </div>
        <h3>Easy Maintenance</h3>
        <p>Stain-resistant fabrics and removable covers for effortless care</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-palette"></i>
        </div>
        <h3>Versatile Designs</h3>
        <p>Multiple styles and colors to match any interior aesthetic</p>
      </div>
    </div>
  </section>

  <!-- Materials Showcase Section -->
  <section class="materials-section">
    <h2 class="section-title">Premium Materials Collection</h2>
    <p class="section-desc">Explore our curated selection of luxurious upholstery materials and finishes</p>
    
    <div class="materials-showcase">
      <div class="material-card">
        <div class="material-image">
          <img src="https://m.media-amazon.com/images/I/61l3VjOhgbL._AC_UF894,1000_QL80_.jpg" alt="Premium Leather">
        </div>
        <div class="material-overlay">
          <div class="material-info">
            <h3>Genuine Leather</h3>
            <p>Luxurious, durable, and ages beautifully over time</p>
            <div class="material-tags">
              <span class="material-tag">Luxury</span>
              <span class="material-tag">Durable</span>
              <span class="material-tag">Timeless</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="material-card">
        <div class="material-image">
          <img src="https://abodehaven.com.au/cdn/shop/files/ScreenShot2024-05-23at12.09.53pm_7fc47fec-d896-4792-bc63-8884066d4824_700x700.png?v=1723771205" alt="Linen Fabric">
        </div>
        <div class="material-overlay">
          <div class="material-info">
            <h3>Natural Linen</h3>
            <p>Breathable, textured, and perfect for airy, modern spaces</p>
            <div class="material-tags">
              <span class="material-tag">Natural</span>
              <span class="material-tag">Breathable</span>
              <span class="material-tag">Textured</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="material-card">
        <div class="material-image">
          <img src="https://themapletree.in/cdn/shop/files/0052059_piedmont-chesterfield-velvet-sofa-range-beige-3-seater.jpg?v=1692631500" alt="Velvet Fabric">
        </div>
        <div class="material-overlay">
          <div class="material-info">
            <h3>Luxury Velvet</h3>
            <p>Rich, opulent texture that adds depth and sophistication</p>
            <div class="material-tags">
              <span class="material-tag">Opulent</span>
              <span class="material-tag">Plush</span>
              <span class="material-tag">Elegant</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <h2 class="section-title">Discover Premium Sofa Designs</h2>
  <p class="section-desc">
    A curated collection of premium sofas — combining exceptional comfort,
    refined craftsmanship, and timeless aesthetics to elevate modern living spaces.
  </p>
  
  <section class="product-grid">
    <!-- Sofa 1 -->
    <div class="product-card">
      <img src="images/furniture/sofas/168068426589523a19d664f15-HLKT00000791_living-room-800x600_9-main.jpg" alt="Luxury Fabric Sofa" />
      <h3>Luxury Fabric Sofa</h3>
      <p>
        Designed for everyday comfort, this premium fabric sofa offers plush seating,
        breathable upholstery, and a refined silhouette for modern living rooms.
      </p>
      <div class="product-features">
        <span class="feature-tag">Premium Fabric</span>
        <span class="feature-tag">Deep Seating</span>
        <span class="feature-tag">High Comfort</span>
      </div>
      <div class="product-type">3 Seater Sofa</div>
    </div>

    <!-- Sofa 2 -->
    <div class="product-card">
      <img src="images/furniture/sofas/1680685190607f5a016ef3f59-HLKT00000797_living-room-800x600_11-main.webp" alt="Modern L Shape Sofa" />
      <h3>Modern L-Shape Sofa</h3>
      <p>
        Perfect for spacious interiors, this L-shaped sofa maximizes seating while
        maintaining a sleek, contemporary aesthetic.
      </p>
      <div class="product-features">
        <span class="feature-tag">L Shape Design</span>
        <span class="feature-tag">Space Efficient</span>
        <span class="feature-tag">Soft Cushions</span>
      </div>
      <div class="product-type">Sectional Sofa</div>
    </div>

    <!-- Sofa 3 -->
    <div class="product-card">
      <img src="images/furniture/sofas/1681378715189588de527c069-HLKT00000841_batch-3-800x600_8-main.webp" alt="Compact Sofa Set" />
      <h3>Compact Sofa Set</h3>
      <p>
        A smart choice for apartments and cozy spaces, combining ergonomic comfort
        with a compact, modern form.
      </p>
      <div class="product-features">
        <span class="feature-tag">Compact Size</span>
        <span class="feature-tag">Ergonomic Design</span>
        <span class="feature-tag">Easy Maintenance</span>
      </div>
      <div class="product-type">2 Seater Sofa</div>
    </div>

    <!-- Sofa 4 -->
    <div class="product-card">
      <img src="images/furniture/sofas/1680685596231a1f94015a959-HLKT00000801_living-room-800x600_7-main.jpg" alt="Recliner Sofa" />
      <h3>Luxury Recliner Sofa</h3>
      <p>
        Experience next-level relaxation with smooth reclining action, padded armrests,
        and premium cushioning for ultimate comfort.
      </p>
      <div class="product-features">
        <span class="feature-tag">Recliner Mechanism</span>
        <span class="feature-tag">Plush Padding</span>
        <span class="feature-tag">Relax Mode</span>
      </div>
      <div class="product-type">Recliner Sofa</div>
    </div>

    <!-- Sofa 5 -->
    <div class="product-card">
      <img src="images/furniture/sofas/1681283290810be933de9aea9-HLKT00000837_batch-2-800x600_14-main (1).webp" alt="Leather Sofa Set" />
      <h3>Premium Leather Sofa</h3>
      <p>
        Crafted with high-quality leather upholstery, this sofa delivers timeless luxury,
        durability, and superior seating comfort.
      </p>
      <div class="product-features">
        <span class="feature-tag">Genuine Leather</span>
        <span class="feature-tag">Elegant Finish</span>
        <span class="feature-tag">Long Lasting</span>
      </div>
      <div class="product-type">Luxury Sofa</div>
    </div>

    <!-- Sofa 6 -->
    <div class="product-card">
      <img src="images/furniture/sofas/16806846147212c8833b1075e-HLKT00000792_living-room-800x600_3-main.webp" alt="Sofa Cum Bed" />
      <h3>Sofa Cum Bed</h3>
      <p>
        A multifunctional design that transforms effortlessly from a sofa to a bed,
        ideal for modern homes and guest rooms.
      </p>
      <div class="product-features">
        <span class="feature-tag">Convertible Design</span>
        <span class="feature-tag">Space Saving</span>
        <span class="feature-tag">Dual Purpose</span>
      </div>
      <div class="product-type">Sofa Bed</div>
    </div>

    <!-- Sofa 7 -->
    <div class="product-card">
      <img src="images/furniture/sofas/1680685427045654d0cd50d52-HLKT00000799_living-room-800x600_5-main.webp" alt="Classic Wooden Sofa" />
      <h3>Classic Wooden Sofa</h3>
      <p>
        Built with solid wood craftsmanship, this sofa blends traditional strength
        with modern upholstery comfort.
      </p>
      <div class="product-features">
        <span class="feature-tag">Solid Wood</span>
        <span class="feature-tag">Handcrafted</span>
        <span class="feature-tag">Durable Frame</span>
      </div>
      <div class="product-type">Wooden Sofa</div>
    </div>

    <!-- Sofa 8 -->
    <div class="product-card">
      <img src="images/furniture/sofas/5.webp" alt="Designer Sofa" />
      <h3>Designer Statement Sofa</h3>
      <p>
        A bold centerpiece for premium interiors, featuring unique styling,
        luxurious textures, and standout comfort.
      </p>
      <div class="product-features">
        <span class="feature-tag">Designer Look</span>
        <span class="feature-tag">Premium Finish</span>
        <span class="feature-tag">Modern Style</span>
      </div>
      <div class="product-type">Designer Sofa</div>
    </div>
  </section>

  <!-- Style Inspiration Section -->
  <section class="style-section">
    <h2 class="section-title">Living Style Inspiration</h2>
    <p class="section-desc">Discover how our sofas transform different living spaces</p>
    
    <div class="style-grid">
      <div class="style-card">
        <div class="style-image">
          <img src="https://www.beautifulhomes.asianpaints.com/content/dam/asianpaintsbeautifulhomes/gallery/living-room/classic-contemporary-living-room-with-orange-sofa-and-white-wall-trims/modern-living-room-with-cozy-seating.jpg.transform/bh-gallery-listing/image.webp" alt="Modern Living Room">
        </div>
        <div class="style-content">
          <h3>Contemporary Living</h3>
          <p>Clean lines and neutral tones create a modern, sophisticated atmosphere</p>
          <div class="style-tags">
            <span class="style-tag">Modern</span>
            <span class="style-tag">Minimalist</span>
            <span class="style-tag">Neutral Tones</span>
          </div>
        </div>
      </div>
      
      <div class="style-card">
        <div class="style-image">
          <img src="https://designwanted.com/wp-content/uploads/2022/07/Kova-Sofa-Collection-by-Albany-Park-cover.jpg.webp" alt="Cozy Family Room">
        </div>
        <div class="style-content">
          <h3>Family Comfort</h3>
          <p>Plush, durable sofas designed for everyday family use and relaxation</p>
          <div class="style-tags">
            <span class="style-tag">Family Friendly</span>
            <span class="style-tag">Comfort Focused</span>
            <span class="style-tag">Durable</span>
          </div>
        </div>
      </div>
      
      <div class="style-card">
        <div class="style-image">
          <img src="https://shopps.in/wp-content/uploads/2023/10/1200x1200-38.jpg" alt="Luxury Lounge">
        </div>
        <div class="style-content">
          <h3>Luxury Lounge</h3>
          <p>Opulent designs with premium materials for sophisticated entertainment spaces</p>
          <div class="style-tags">
            <span class="style-tag">Luxury</span>
            <span class="style-tag">Entertainment</span>
            <span class="style-tag">Statement Piece</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comparison Table -->
  <section class="comparison-section">
    <h2 class="section-title">Sofa Type Comparison</h2>
    <p class="section-desc">Choose the perfect sofa type based on your space requirements and lifestyle</p>
    
    <div class="comparison-table">
      <table>
        <thead>
          <tr>
            <th>Feature</th>
            <th>Fabric Sofas</th>
            <th>Leather Sofas</th>
            <th>Sectional Sofas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Comfort Level</td>
            <td class="checkmark">Soft & Cozy</td>
            <td class="checkmark">Firm & Supportive</td>
            <td class="checkmark">Maximum Comfort</td>
          </tr>
          <tr>
            <td>Maintenance</td>
            <td class="checkmark">Easy</td>
            <td>Moderate</td>
            <td>Moderate</td>
          </tr>
          <tr>
            <td>Durability</td>
            <td>Good</td>
            <td class="checkmark">Excellent</td>
            <td class="checkmark">Excellent</td>
          </tr>
          <tr>
            <td>Space Required</td>
            <td>Compact</td>
            <td>Medium</td>
            <td>Large</td>
          </tr>
          <tr>
            <td>Style Options</td>
            <td class="checkmark">Multiple</td>
            <td>Classic</td>
            <td class="checkmark">Modern</td>
          </tr>
          <tr>
            <td>Best For</td>
            <td>Small Families</td>
            <td>Formal Living</td>
            <td>Large Families</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="faq-title">Expert Insights</div>
    <div class="faq-subtitle">
      Expert guidance to help you choose the right sofa for comfort, style, and durability
    </div>
    
    <div class="faq-container">
      <div class="faq-item">
        <div class="faq-question">
          <span>What makes a sofa comfortable for everyday use?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Everyday comfort depends on high-density foam cushioning, proper seat depth,
            ergonomic back support, and breathable upholstery.
            Our sofas are designed to provide lasting comfort without losing shape over time.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>How does sofa design influence living room aesthetics?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            A sofa often becomes the visual anchor of a living room.
            Clean lines create a modern feel, curved designs add softness,
            and bold fabrics or colors make a strong design statement.
            The right sofa balances comfort with visual elegance.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>What materials are best for long-lasting sofas?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Durable sofas use solid wood or metal frames, premium foam,
            and high-quality fabric or leather upholstery.
            These materials ensure strength, longevity,
            and resistance to everyday wear and tear.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>How do I choose the right sofa size for my space?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Measure your room carefully and allow enough space for movement.
            Compact sofas work well in apartments, while L-shaped or sectional sofas
            suit larger living areas.
            Proportion and layout are key to achieving visual balance.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section" id="contact">
    <div class="cta-content">
      <h2>Ready to Transform Your Living Space?</h2>
      <p>
        Book a free consultation with our sofa experts. Get personalized recommendations, 
        fabric samples, and professional measuring services for your home.
      </p>
      
      <div class="cta-buttons">
        <a href="tel:+919876543210" class="primary-cta">
          <i class="fas fa-phone"></i>
          Call Now: +91 9945689996
        </a>
        <a href="mailto:info@homestyle.com" class="secondary-cta">
          <i class="fas fa-envelope"></i>
          Request Fabric Samples
        </a>
      </div>
      
      <div style="margin-top: 40px; font-size: 14px; opacity: 0.8;">
        <i class="fas fa-ruler-combined"></i> Free Measuring | 
        <i class="fas fa-truck"></i> Professional Delivery | 
        <i class="fas fa-shield-alt"></i> 7-Year Warranty
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