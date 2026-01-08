<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Premium Designer Curtains Collection</title>
  <meta name="description" content="Discover premium designer curtains with luxurious fabrics, elegant designs, and perfect light control for modern living spaces.">
  
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

    /* FABRIC SHOWCASE SECTION - CREATIVE ADDITION */
    .fabric-section {
      padding: 80px 7vw;
      background: linear-gradient(135deg, var(--light-pink), var(--light-violet));
      position: relative;
      overflow: hidden;
    }

    .fabric-showcase {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .fabric-card {
      background: var(--white);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 20px 50px rgba(0,0,0,0.1);
      transition: transform 0.4s ease;
      position: relative;
    }

    .fabric-card:hover {
      transform: translateY(-15px);
    }

    .fabric-image {
      height: 250px;
      overflow: hidden;
    }

    .fabric-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.8s;
    }

    .fabric-card:hover .fabric-image img {
      transform: scale(1.1);
    }

    .fabric-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(to bottom, transparent 60%, rgba(0,0,0,0.7));
      display: flex;
      align-items: flex-end;
      padding: 25px;
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .fabric-card:hover .fabric-overlay {
      opacity: 1;
    }

    .fabric-info {
      color: white;
      transform: translateY(20px);
      transition: transform 0.4s ease;
    }

    .fabric-card:hover .fabric-info {
      transform: translateY(0);
    }

    .fabric-info h3 {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .fabric-info p {
      font-size: 14px;
      opacity: 0.9;
      margin-bottom: 15px;
    }

    .fabric-tags {
      display: flex;
      gap: 10px;
      margin-top: 15px;
    }

    .fabric-tag {
      background: rgba(255,255,255,0.2);
      backdrop-filter: blur(10px);
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
    }

    .fabric-tag {
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

    /* ROOM INSPIRATION SECTION - CREATIVE ADDITION */
    .inspiration-section {
      padding: 80px 7vw;
      background: white;
    }

    .inspiration-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 40px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .room-card {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0,0,0,0.1);
      position: relative;
      cursor: pointer;
      transition: transform 0.8s ease;
    }

    .room-card:hover {
      transform: translateY(-10px);
    }

    .room-image {
      height: 400px;
      overflow: hidden;
    }

    .room-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 1.5s ease;
    }

    .room-card:hover .room-image img {
      transform: scale(1.1);
    }

    .room-content {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.9), rgba(0,0,0,0.3), transparent);
      color: white;
      padding: 30px;
      transform: translateY(100%);
      transition: transform 1s ease, opacity 1s ease;
      opacity: 0;
    }

    .room-card:hover .room-content {
      transform: translateY(0);
      opacity: 1;
    }

    .room-content h3 {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 10px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .room-content p {
      font-size: 14px;
      opacity: 0.9;
      margin-bottom: 15px;
      line-height: 1.5;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }

    .room-tags {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .room-tag {
      background: rgba(255,255,255,0.25);
      backdrop-filter: blur(10px);
      padding: 6px 15px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
      border: 1px solid rgba(255,255,255,0.3);
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
      .room-image { height: 350px; }
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
      .inspiration-grid { grid-template-columns: 1fr; }
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
      .room-image { height: 300px; }
      .fabric-image { height: 200px; }
    }

    @media (max-width: 576px) {
      .product-grid { padding: 0 5vw 60px; }
      .fabric-section, .benefits-section, .inspiration-section, .comparison-section, .faq-section, .cta-section { padding: 60px 5vw; }
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
      <h1>Designer Curtains for Refined Living</h1>
      <p>
        Transform your interiors with our curated curtain collection — designed to
        balance privacy, natural light, and aesthetic harmony. Premium fabrics,
        elegant drapes, and flawless tailoring crafted for modern homes.
      </p>
      
      <div class="hero-stats">
        <div class="stat-item">
          <span class="stat-number">Premium Fabrics</span>
          <span class="stat-label">Luxury Textures</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">Light Control</span>
          <span class="stat-label">Sheer to Blackout</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">Custom Fit</span>
          <span class="stat-label">Tailored Perfection</span>
        </div>
      </div>
    </div>
    
    <div class="hero-image-container">
      <div class="floating-element floating-1">
        <i class="fas fa-border-style"></i>
      </div>
      <div class="floating-element floating-2">
        <i class="fas fa-feather-alt"></i>
      </div>
      <img src="https://static.vecteezy.com/system/resources/thumbnails/048/831/098/small/elegant-red-stage-curtain-opening-on-a-black-background-photo.jpeg" alt="Luxury Curtain Design" class="hero-image" />
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits-section">
    <h2 class="section-title">Why Choose Our Curtains</h2>
    <p class="section-desc">Experience superior quality with intelligent design and luxurious comfort</p>
    
    <div class="benefits-grid">
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-sun"></i>
        </div>
        <h3>Perfect Light Control</h3>
        <p>From sheer daylight filters to complete blackout solutions for optimal ambiance</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3>Premium Materials</h3>
        <p>Luxurious fabrics with fade resistance and long-lasting durability</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-leaf"></i>
        </div>
        <h3>Thermal Efficiency</h3>
        <p>Energy-efficient fabrics that help regulate room temperature year-round</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-sparkles"></i>
        </div>
        <h3>Easy Maintenance</h3>
        <p>Machine-washable and wrinkle-resistant fabrics for effortless care</p>
      </div>
    </div>
  </section>

  <!-- Fabric Showcase Section -->
  <section class="fabric-section">
    <h2 class="section-title">Premium Fabric Collection</h2>
    <p class="section-desc">Explore our curated selection of luxurious fabrics in various textures and finishes</p>
    
    <div class="fabric-showcase">
      <div class="fabric-card">
        <div class="fabric-image">
          <img src="https://m.media-amazon.com/images/I/71M8FAUWYUL._AC_UF894,1000_QL80_.jpg" alt="Linen Fabric">
        </div>
        <div class="fabric-overlay">
          <div class="fabric-info">
            <h3>Natural Linen</h3>
            <p>Breathable, textured, and perfect for airy spaces</p>
            <div class="fabric-tags">
              <span class="fabric-tag">Natural</span>
              <span class="fabric-tag">Breathable</span>
              <span class="fabric-tag">Texture</span>
            </div>

          </div>
        </div>
      </div>
      
      <div class="fabric-card">
        <div class="fabric-image">
          <img src="https://i0.wp.com/hbfabrics.pk/wp-content/uploads/2022/11/royal-blue.jpg?fit=500%2C500&ssl=1" alt="Velvet Fabric">
        </div>
        <div class="fabric-overlay">
          <div class="fabric-info">
            <h3>Luxury Velvet</h3>
            <p>Rich, opulent texture for dramatic elegance</p>
            <div class="fabric-tags">
              <span class="fabric-tag">Luxury</span>
              <span class="fabric-tag">Insulating</span>
              <span class="fabric-tag">Dramatic</span>
            </div>

          </div>
        </div>
      </div>
      
      <div class="fabric-card">
        <div class="fabric-image">
          <img src="https://m.media-amazon.com/images/I/71RrIsuhOrL.jpg" alt="Silk Fabric">
        </div>
        <div class="fabric-overlay">
          <div class="fabric-info">
            <h3>Silk Sheer</h3>
            <p>Delicate, luminous, and perfect for soft light diffusion</p>
            <div class="fabric-tags">
              <span class="fabric-tag">Delicate</span>
              <span class="fabric-tag">Luminous</span>
              <span class="fabric-tag">Elegant</span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <h2 class="section-title">Discover Elegant Curtain Designs</h2>
  <p class="section-desc">
    A curated collection of premium curtains — combining luxurious fabrics,
    refined craftsmanship, and perfect light control to elevate modern living spaces.
  </p>
  
  <section class="product-grid">
    <!-- Curtain Type 1 -->
    <div class="product-card">
      <img src="images/furniture/curtains/simple-elegant-curtain-design-for-home-beige-bedroom-decor-768x306.webp" alt="Sheer Elegance Curtains" />
      <h3>Sheer Elegance Curtains</h3>
      <p>
        Light and airy sheer curtains designed to softly filter daylight while
        maintaining privacy. Ideal for living rooms and sunlit spaces.
      </p>
      <div class="product-features">
        <span class="feature-tag">Premium Sheer Fabric</span>
        <span class="feature-tag">Soft Light Diffusion</span>
        <span class="feature-tag">Elegant Finish</span>
      </div>
      <div class="product-type">Sheer Curtains</div>
    </div>

    <!-- Curtain Type 2 -->
    <div class="product-card">
      <img src="images/furniture/curtains/luxury-modern-curtain-design-for-home-elegant-beige-tones-768x579.webp" alt="Luxury Blackout Curtains" />
      <h3>Luxury Blackout Curtains</h3>
      <p>
        Designed for complete light control and privacy, these blackout curtains
        provide insulation, noise reduction, and a rich, refined look.
      </p>
      <div class="product-features">
        <span class="feature-tag">100% Light Blocking</span>
        <span class="feature-tag">Thermal Insulation</span>
        <span class="feature-tag">Noise Reduction</span>
      </div>
      <div class="product-type">Blackout Curtains</div>
    </div>

    <!-- Curtain Type 3 -->
    <div class="product-card">
      <img src="images/furniture/curtains/luxury-modern-curtain-design-for-home-elegant-living-style-768x431.webp" alt="Designer Drapes" />
      <h3>Designer Drapes</h3>
      <p>
        Statement drapes crafted with luxurious textures and tailored pleats,
        adding depth, drama, and sophistication to premium interiors.
      </p>
      <div class="product-features">
        <span class="feature-tag">Luxury Textiles</span>
        <span class="feature-tag">Tailored Pleats</span>
        <span class="feature-tag">Premium Finish</span>
      </div>
      <div class="product-type">Designer Drapes</div>
    </div>

    <!-- Curtain Type 4 -->
    <div class="product-card">
      <img src="images/furniture/curtains/modern-curtain-design-for-home-office-elegant-beige-drapes-768x313.webp" alt="Motorized Curtains" />
      <h3>Motorized Curtains</h3>
      <p>
        Smart motorized curtain systems offering effortless control through remote
        or automation — blending convenience with contemporary luxury.
      </p>
      <div class="product-features">
        <span class="feature-tag">Smart Control</span>
        <span class="feature-tag">Silent Motor</span>
        <span class="feature-tag">Home Automation Ready</span>
      </div>
      <div class="product-type">Motorized Curtains</div>
    </div>

    <!-- Curtain Type 5 -->
    <div class="product-card">
      <img src="images/furniture/curtains/modern-curtain-design-for-home-office-elegant-beige-drapes-768x313.webp" alt="Printed Curtains" />
      <h3>Printed Curtains</h3>
      <p>
        Contemporary printed designs that add personality and artistic expression
        to modern living spaces, bedrooms, and lounges.
      </p>
      <div class="product-features">
        <span class="feature-tag">Modern Patterns</span>
        <span class="feature-tag">Fade Resistant</span>
        <span class="feature-tag">Easy Maintenance</span>
      </div>
      <div class="product-type">Printed Curtains</div>
    </div>

    <!-- Curtain Type 6 -->
    <div class="product-card">
      <img src="images/furniture/curtains/luxury-modern-curtain-design-for-home-pink-elegant-drapes-768x313.webp" alt="Layered Curtains" />
      <h3>Layered Curtains</h3>
      <p>
        A perfect combination of sheer and blackout layers, allowing flexible
        control of light, privacy, and ambience throughout the day.
      </p>
      <div class="product-features">
        <span class="feature-tag">Dual Layer</span>
        <span class="feature-tag">Day & Night Control</span>
        <span class="feature-tag">Custom Styling</span>
      </div>
      <div class="product-type">Layered Curtains</div>
    </div>

    <!-- Curtain Type 7 -->
    <div class="product-card">
      <img src="images/furniture/curtains/simple-elegant-curtain-design-for-home-beige-bedroom-decor-768x306.webp" alt="Natural Linen Curtains" />
      <h3>Natural Linen Curtains</h3>
      <p>
        Crafted from breathable natural fibers, linen curtains bring warmth,
        texture, and an organic charm to contemporary interiors.
      </p>
      <div class="product-features">
        <span class="feature-tag">Natural Fabric</span>
        <span class="feature-tag">Breathable Texture</span>
        <span class="feature-tag">Timeless Appeal</span>
      </div>
      <div class="product-type">Linen Curtains</div>
    </div>

    <!-- Curtain Type 8 -->
    <div class="product-card">
      <img src="./images/furniture/curtains/simple-modern-curtain-design-for-home-elegant-minimal-style-768x329.webp" alt="Custom Tailored Curtains" />
      <h3>Custom Tailored Curtains</h3>
      <p>
        Made-to-measure curtains tailored precisely to your space, offering
        complete customization in fabric, color, and finish.
      </p>
      <div class="product-features">
        <span class="feature-tag">Made to Measure</span>
        <span class="feature-tag">Fabric Customization</span>
        <span class="feature-tag">Perfect Fit</span>
      </div>
      <div class="product-type">Custom Curtains</div>
    </div>
  </section>

  <!-- Room Inspiration Section -->
  <section class="inspiration-section">
    <h2 class="section-title">Room Inspiration</h2>
    <p class="section-desc">Discover how our curtains transform different living spaces</p>
    
    <div class="inspiration-grid">
      <div class="room-card">
        <div class="room-image">
          <img src="images/furniture/curtains/luxury-modern-curtain-design-for-home-elegant-living-style-768x431.webp" alt="Living Room">
        </div>
        <div class="room-content">
          <h3>Living Room Elegance</h3>
          <p>Sheer curtains that softly filter natural light while maintaining privacy and style</p>
          <div class="room-tags">
            <span class="room-tag">Sheer Curtains</span>
            <span class="room-tag">Daylight</span>
            <span class="room-tag">Modern Living</span>
          </div>
        </div>
      </div>
      
      <div class="room-card">
        <div class="room-image">
          <img src="images/furniture/curtains/simple-elegant-curtain-design-for-home-beige-bedroom-decor-768x306.webp" alt="Bedroom">
        </div>
        <div class="room-content">
          <h3>Bedroom Sanctuary</h3>
          <p>Blackout curtains for complete darkness and peaceful, uninterrupted sleep</p>
          <div class="room-tags">
            <span class="room-tag">Blackout</span>
            <span class="room-tag">Sleep Quality</span>
            <span class="room-tag">Privacy</span>
          </div>
        </div>
      </div>
      
      <div class="room-card">
        <div class="room-image">
          <img src="images/furniture/curtains/modern-curtain-design-for-home-office-elegant-beige-drapes-768x313.webp" alt="Home Office">
        </div>
        <div class="room-content">
          <h3>Home Office Productivity</h3>
          <p>Layered curtains offering flexible light control for focused work sessions</p>
          <div class="room-tags">
            <span class="room-tag">Light Control</span>
            <span class="room-tag">Productivity</span>
            <span class="room-tag">Home Office</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comparison Table -->
  <section class="comparison-section">
    <h2 class="section-title">Curtain Type Comparison</h2>
    <p class="section-desc">Choose the perfect curtain type based on your room requirements and lifestyle</p>
    
    <div class="comparison-table">
      <table>
        <thead>
          <tr>
            <th>Feature</th>
            <th>Sheer Curtains</th>
            <th>Blackout Curtains</th>
            <th>Layered Curtains</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Light Control</td>
            <td class="checkmark">Soft Filter</td>
            <td class="checkmark">Complete Block</td>
            <td class="checkmark">Adjustable</td>
          </tr>
          <tr>
            <td>Privacy Level</td>
            <td>Medium</td>
            <td class="checkmark">Maximum</td>
            <td class="checkmark">Adjustable</td>
          </tr>
          <tr>
            <td>Thermal Insulation</td>
            <td>Low</td>
            <td class="checkmark">High</td>
            <td class="checkmark">Medium-High</td>
          </tr>
          <tr>
            <td>Noise Reduction</td>
            <td>Low</td>
            <td class="checkmark">High</td>
            <td class="checkmark">Medium</td>
          </tr>
          <tr>
            <td>Room Types</td>
            <td>Living, Dining</td>
            <td>Bedrooms, Media</td>
            <td class="checkmark">All Rooms</td>
          </tr>
          <tr>
            <td>Maintenance</td>
            <td class="checkmark">Easy</td>
            <td>Moderate</td>
            <td>Moderate</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="faq-title">Expert Insights</div>
    <div class="faq-subtitle">
      Professional guidance to help you choose the perfect curtains for style, comfort, and functionality
    </div>
    
    <div class="faq-container">
      <div class="faq-item">
        <div class="faq-question">
          <span>What factors should I consider when choosing curtains?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Selecting the right curtains depends on light control, privacy needs,
            fabric quality, and interior style. Sheer fabrics enhance daylight,
            blackout curtains ensure complete privacy, and layered designs offer
            flexibility for both day and night use.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>How do curtains influence the overall interior aesthetics?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Curtains play a major role in defining the mood of a space.
            Soft sheers create an airy feel, textured fabrics add warmth,
            and tailored drapes introduce structure and sophistication.
            The right choice enhances harmony between furniture and décor.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>What are the advantages of blackout and layered curtains?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Blackout curtains block light, reduce noise, and improve thermal insulation,
            making them ideal for bedrooms and media rooms.
            Layered curtains combine sheers and blackout fabrics,
            offering adaptable light control and visual depth.
          </p>
        </div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">
          <span>How important are measurements and installation for curtains?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>
            Accurate measurements ensure a perfect fit and refined appearance.
            Proper height, width, and mounting style enhance fabric fall,
            improve light coverage, and elevate the overall look of the space.
            Professional installation guarantees flawless results.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section" id="contact">
    <div class="cta-content">
      <h2>Ready to Transform Your Spaces?</h2>
      <p>
        Book a free consultation with our curtain experts. Get personalized recommendations, 
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
        <i class="fas fa-truck"></i> Professional Installation | 
        <i class="fas fa-shield-alt"></i> 5-Year Quality Guarantee
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