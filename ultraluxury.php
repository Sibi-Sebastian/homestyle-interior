<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Luxury | Supreme Peps Mattress</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --deep-blue: #050e8f;
            --pink: #dc3169;
            --gold: #fec33b;
            --coral: #f86f48;
            --light-grey: #f8f9fa;
            --medium-grey: #e9ecef;
            --dark-grey: #333;
            --white: #ffffff;
            --black: #000000;
            --platinum: #e5e4e2;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #fafafa;
            color: var(--dark-grey);
            padding-top: 80px;
            overflow-x: hidden;
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 60px 0;
        }

        h1, h2, h3, h4 {
            font-weight: 700;
            line-height: 1.2;
        }

        h1 {
            font-size: 3.2rem;
            margin-bottom: 1rem;
            color: var(--white);
        }

        h2 {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            color: var(--deep-blue);
            text-align: center;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 0.8rem;
            color: var(--deep-blue);
        }

        p {
            font-size: 1rem;
            margin-bottom: 1rem;
            color: var(--dark-grey);
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            min-width: 180px;
        }

        .btn-primary {
            background-color: var(--gold);
            color: var(--deep-blue);
            box-shadow: 0 8px 20px rgba(254, 195, 59, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(254, 195, 59, 0.4);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(254, 195, 59, 0.7);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(254, 195, 59, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(254, 195, 59, 0);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -200% center;
            }
            100% {
                background-position: 200% center;
            }
        }

        @keyframes glow {
            0% {
                box-shadow: 0 0 20px rgba(254, 195, 59, 0.5);
            }
            50% {
                box-shadow: 0 0 40px rgba(254, 195, 59, 0.8);
            }
            100% {
                box-shadow: 0 0 20px rgba(254, 195, 59, 0.5);
            }
        }

        /* Hero Section - Ultra Luxury Theme */
        .hero {
            background: linear-gradient(rgba(5, 14, 143, 0.92), rgba(5, 14, 143, 0.88)), 
                        url('https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N11-Grand-Palais-Lifestyle.jpg') center/cover no-repeat;
            color: var(--white);
            padding: 100px 0 60px;
            min-height: 95vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.08) 50%, transparent 70%);
            animation: shimmer 4s infinite linear;
            background-size: 200% auto;
        }

        .hero:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 70% 20%, rgba(254, 195, 59, 0.1) 0%, transparent 50%);
        }

.hero-content {
    max-width: 700px;
    margin: 0 auto;      /* centers it horizontally */
    z-index: 2;
    position: relative;
    animation: fadeIn 1s ease-out;
}

        .hero-tag {
            display: inline-block;
            background: linear-gradient(135deg, var(--gold), #ffd700);
            color: var(--deep-blue);
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 800;
            margin-bottom: 20px;
            font-size: 0.9rem;
            border: 2px solid rgba(255,255,255,0.5);
            text-transform: uppercase;
            letter-spacing: 1px;
            animation: glow 3s infinite;
        }

        /* Ultra Gallery */
        .gallery {
            padding: 80px 0;
            background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);
        }

        .gallery-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .main-image {
            width: 100%;
            height: 550px;
            border-radius: 25px;
            overflow: hidden;
            margin-bottom: 25px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            background: var(--white);
            border: 4px solid var(--gold);
            position: relative;
        }

        .main-image:before {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            right: -4px;
            bottom: -4px;
            background: linear-gradient(45deg, var(--gold), var(--pink), var(--coral), var(--deep-blue));
            border-radius: 28px;
            z-index: -1;
            animation: shimmer 3s infinite linear;
            background-size: 400% 400%;
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .main-image:hover img {
            transform: scale(1.02);
        }

        .thumbnails {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .thumb {
            height: 120px;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 3px solid transparent;
            position: relative;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .thumb:hover {
            transform: translateY(-5px) scale(1.05);
            border-color: var(--gold);
            box-shadow: 0 15px 30px rgba(254, 195, 59, 0.2);
        }

        .thumb.active {
            border-color: var(--pink);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(220, 49, 105, 0.25);
        }

        .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Ultra Size Visualizer */
        .size-visualizer {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--platinum) 0%, #ffffff 100%);
            position: relative;
        }

        .size-visualizer:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--gold), var(--pink), var(--coral), var(--deep-blue));
            animation: shimmer 3s infinite linear;
            background-size: 400% 100%;
        }

        .size-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .size-card {
            background: linear-gradient(145deg, #ffffff, #f8f9fa);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(5, 14, 143, 0.08);
            transition: all 0.4s ease;
            cursor: pointer;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .size-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(5, 14, 143, 0.15);
            border-color: var(--gold);
        }

        .size-card.selected {
            border-color: var(--pink);
            background: linear-gradient(145deg, #ffffff, #f0f2ff);
            box-shadow: 0 20px 40px rgba(220, 49, 105, 0.15);
        }

        .size-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--gold), var(--coral));
        }

        .size-visual {
            width: 100%;
            height: 160px;
            margin: 20px 0;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mattress-outline {
            width: 100%;
            height: 100%;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            transition: all 0.4s ease;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.1));
        }

        .king-outline { background-image: url('https://png.pngtree.com/png-vector/20240712/ourmid/pngtree-black-silhouette-of-a-king-bed-vector-png-image_7056335.png'); }
        .queen-outline { background-image: url('https://png.pngtree.com/png-vector/20230310/ourmid/pngtree-bed-line-icon-vector-png-image_6642805.png'); }
        .single-outline { background-image: url('https://www.shutterstock.com/image-vector/single-bed-hotel-room-silhouette-260nw-2234485111.jpg'); }
        .twin-outline { background-image: url('https://cdn.vectorstock.com/i/500p/98/05/minimalist-double-bed-with-mattress-and-pillows-vector-55529805.jpg'); }

        .size-card:hover .mattress-outline {
            transform: scale(1.08);
        }

        /* Ultra Technology */
        .ultra-tech {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--deep-blue) 0%, #040a7a 100%);
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .ultra-tech:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .ultra-tech h2 {
            color: var(--white);
            position: relative;
            z-index: 1;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            margin-top: 50px;
            position: relative;
            z-index: 1;
        }

        .tech-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .tech-card:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, 0.18);
            border-color: var(--gold);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .tech-image {
            height: 200px;
            width: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .tech-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent, rgba(5, 14, 143, 0.85));
            display: flex;
            align-items: flex-end;
            padding: 25px;
        }

        .tech-overlay h3 {
            color: var(--white);
            margin: 0;
            font-size: 1.6rem;
        }

        .tech-content {
            padding: 25px;
        }

        .tech-content p {
            color: rgba(255, 255, 255, 0.92);
            font-size: 1.05rem;
        }

        /* Ultra Features */
        .ultra-features {
            padding: 80px 0;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .feature-card {
            background: linear-gradient(145deg, #ffffff, #f8f9fa);
            border-radius: 20px;
            padding: 35px 30px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(220, 49, 105, 0.12);
            border-color: var(--gold);
        }

        .feature-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--gold), var(--coral));
        }

        .feature-icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--gold), var(--coral));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2.2rem;
            color: var(--white);
            box-shadow: 0 15px 30px rgba(254, 195, 59, 0.3);
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
        }

        /* Ultra Layer Visualization */
        .layer-visual {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--platinum) 0%, #ffffff 100%);
            position: relative;
        }

        .layer-container {
            max-width: 800px;
            margin: 50px auto;
            position: relative;
        }

        .layer-stack {
            height: 550px;
            position: relative;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            border: 4px solid var(--gold);
        }

        .layer {
            position: absolute;
            left: 0;
            right: 0;
            height: 110px;
            background-size: cover;
            background-position: center;
            transition: all 0.6s ease;
            display: flex;
            align-items: center;
            padding-left: 50px;
            color: var(--white);
            font-weight: 700;
            font-size: 1.2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            backdrop-filter: blur(3px);
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .layer:hover {
            padding-left: 70px;
            height: 130px;
            backdrop-filter: blur(0);
        }

        .layer-1 { top: 0; background-image: linear-gradient(90deg, rgba(5,14,143,0.9), rgba(5,14,143,0.75)), url('https://thesleepcompany.in/cdn/shop/files/05_a2b18c81-2b10-4552-a970-1ba61c5857d8.webp?v=1764149298&width=2048'); }
        .layer-2 { top: 110px; background-image: linear-gradient(90deg, rgba(220,49,105,0.9), rgba(220,49,105,0.75)), url('https://diamondmattress.com/cdn/shop/files/DM_Bedroom_11_Hybrid_GridGel_13_5_inch_Queen_V1_01_0002_383c62a9-5023-4e0c-88d2-476363b28aa2.jpg?v=1747436801&width=533'); }
        .layer-3 { top: 220px; background-image: linear-gradient(90deg, rgba(254,195,59,0.9), rgba(254,195,59,0.75)), url('https://www.durfi.com/cdn/shop/files/asnp7l7sop5qqn32o3nz.webp?v=1756798202&width=1445'); }
        .layer-4 { top: 330px; background-image: linear-gradient(90deg, rgba(248,111,72,0.9), rgba(248,111,72,0.75)), url('https://sealy.in/cdn/shop/files/3_c6f9fbe3-8c8a-4a2e-93dc-bb4bec669a42.jpg?v=1760060996&width=1649'); }
        .layer-5 { top: 440px; background-image: linear-gradient(90deg, rgba(5,14,143,0.9), rgba(5,14,143,0.75)), url('https://m.media-amazon.com/images/I/619yuZSDlmL._AC_UF894,1000_QL80_.jpg'); }

        /* Ultra Comparison */
        .comparison-slider {
            padding: 80px 0;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        }

        .slider-container {
            max-width: 1000px;
            margin: 50px auto;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            position: relative;
            border: 4px solid var(--gold);
        }

        .slider-container:before {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            right: -4px;
            bottom: -4px;
            background: linear-gradient(45deg, var(--gold), var(--pink), var(--coral), var(--deep-blue));
            border-radius: 29px;
            z-index: -1;
            animation: shimmer 3s infinite linear;
            background-size: 400% 400%;
        }

        .comparison-image {
            width: 100%;
            height: 550px;
            position: relative;
            overflow: hidden;
        }

        .image-before, .image-after {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }

        .image-before {
            background-image: url('images/orthobefore.png');
            width: 50%;
            z-index: 2;
        }

        .image-after {
            background-image: url('images/ortho.png');
        }

        .slider-handle {
            position: absolute;
            top: 0;
            left: 50%;
            width: 5px;
            height: 100%;
            background: var(--gold);
            z-index: 3;
            cursor: col-resize;
            transform: translateX(-50%);
            box-shadow: 0 0 20px rgba(254, 195, 59, 0.5);
        }

        .slider-handle:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 50px;
            height: 50px;
            background: var(--gold);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            animation: glow 2s infinite;
        }

        .slider-handle:before {
            content: '↔';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--deep-blue);
            font-weight: bold;
            font-size: 1.4rem;
            z-index: 4;
        }

        /* Ultra Warranty */
        .warranty-visual {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--pink) 0%, var(--coral) 100%);
            color: var(--white);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .warranty-visual:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.12) 50%, transparent 70%);
            animation: shimmer 3s infinite linear;
            background-size: 200% auto;
        }

        .warranty-badge {
            width: 220px;
            height: 220px;
            background: linear-gradient(135deg, var(--gold), #ffd700);
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto 35px;
            animation: pulse 3s infinite;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            border: 6px solid var(--white);
            position: relative;
            z-index: 1;
        }

        .warranty-years {
            font-size: 4rem;
            font-weight: 900;
            line-height: 1;
            color: var(--deep-blue);
        }

        .warranty-label {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--deep-blue);
            margin-top: 8px;
        }

        .warranty-visual h2 {
            color: var(--white);
            position: relative;
            z-index: 1;
        }

        /* Final CTA */
        .final-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--deep-blue) 0%, #040a7a 100%);
            color: var(--white);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .final-cta:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 80% 20%, rgba(254, 195, 59, 0.15) 0%, transparent 50%);
        }

        .final-cta:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.08' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .final-cta h2 {
            color: var(--white);
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 40px;
            position: relative;
            z-index: 1;
        }

        .btn-cta {
            background: linear-gradient(135deg, var(--gold), #ffd700);
            color: var(--deep-blue);
            padding: 20px 40px;
            font-size: 1.2rem;
            font-weight: 800;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            border: 2px solid transparent;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-cta:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border-color: var(--white);
            animation: glow 2s infinite;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .hero {
                text-align: center;
                padding: 80px 0 40px;
            }
            
            .hero-content {
                max-width: 100%;
                margin: 0 auto;
            }
            
            .thumbnails {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
            
            h2 {
                font-size: 1.8rem;
            }
            
            section {
                padding: 50px 0;
            }
            
            .main-image {
                height: 400px;
            }
            
            .thumbnails {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .thumb {
                height: 90px;
            }
            
            .size-cards {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .tech-grid, .features-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-cta {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            .main-image {
                height: 300px;
            }
            
            .thumbnails {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .size-cards {
                grid-template-columns: 1fr;
            }
            
            .layer-stack {
                height: 500px;
            }
            
            .layer {
                height: 100px;
                font-size: 1rem;
                padding-left: 20px;
            }
            
            .layer:hover {
                padding-left: 30px;
                height: 110px;
            }
            
            .comparison-image {
                height: 400px;
            }
            
            .warranty-badge {
                width: 180px;
                height: 180px;
            }
            
            .warranty-years {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Hero Section - Ultra Luxury Theme -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-tag">Supreme Luxury Experience</span>
                <h1>Ultra Luxury Peps Mattress</h1>
                <p style="font-size: 1.3rem; color: rgba(255,255,255,0.95); margin-bottom: 35px; max-width: 600px;">
                    The pinnacle of luxury sleep technology. Experience unprecedented comfort with our Ultra Luxury collection, crafted for those who demand nothing but the absolute best.
                </p>
                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <a href="#size-visualizer" class="btn btn-primary" style="padding: 18px 35px; font-size: 1.1rem;">
                        Explore Ultra Collection
                    </a>
                    <a href="#gallery" class="btn" style="background: transparent; border: 3px solid var(--gold); color: var(--gold); padding: 18px 35px; font-size: 1.1rem;">
                        View Ultra Gallery
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Ultra Gallery -->
    <section id="gallery" class="gallery">
        <div class="container">
            <h2 style="color: var(--deep-blue);">Ultra Luxury Collection</h2>
            <p style="text-align: center; font-size: 1.1rem; color: var(--dark-grey); margin-bottom: 40px; max-width: 800px; margin-left: auto; margin-right: auto;">
                Witness the extraordinary craftsmanship and premium materials that define our Ultra Luxury collection.
            </p>
            <div class="gallery-container">
                <div class="main-image">
                    <img id="mainImage" src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-Lifestyle.jpg" alt="Ultra Luxury Mattress">
                </div>
                <div class="thumbnails">
                    <div class="thumb active" onclick="changeImage(0)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-Lifestyle.jpg" alt="Ultra Master Suite">
                    </div>
                    <div class="thumb" onclick="changeImage(1)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-img1.jpg" alt="Premium Craftsmanship">
                    </div>
                    <div class="thumb" onclick="changeImage(2)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-img2.jpg" alt="Luxury Layers">
                    </div>
                    <div class="thumb" onclick="changeImage(3)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-img3.jpg" alt="Ultra Details">
                    </div>
                    <div class="thumb" onclick="changeImage(4)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-img4.jpg" alt="Supreme Comfort">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ultra Technology -->
    <section class="ultra-tech">
        <div class="container">
            <h2>Ultra Luxury Technology</h2>
            <div class="tech-grid">
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://bedandmattresshome.com/cdn/shop/files/61szKMof61L._SX679.jpg?v=1728493074');">
                        <div class="tech-overlay">
                            <h3>Diamond Memory Foam</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Ultra-premium diamond-grade memory foam with advanced temperature regulation, pressure relief, and adaptive comfort technology.</p>
                    </div>
                </div>
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://images.jdmagicbox.com/v2/comp/def_content/ncat_id/pocket-spring-mattress-bys9u3i-250.jpg');">
                        <div class="tech-overlay">
                            <h3>Ultra Pocket Spring System</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Individually encased ultra-premium pocket springs with titanium reinforcement for exceptional support and zero motion transfer.</p>
                    </div>
                </div>
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://mymorningowl.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnaturally-hypoallergenic-image.0532f16e.png&w=3840&q=75');">
                        <div class="tech-overlay">
                            <h3>Natural Luxury Materials</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Handcrafted with premium natural materials including cashmere-infused covers, natural latex, and silk layers for ultimate comfort.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Size Visualizer -->
    <section id="size-visualizer" class="size-visualizer">
        <div class="container">
            <h2>Select Your Ultra Size</h2>
            <div class="size-cards">
                <div class="size-card selected" onclick="selectSize('king')">
                    <h3>Ultra King Size</h3>
                    <div class="size-visual">
                        <div class="mattress-outline king-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey); font-size: 1.05rem;">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--pink); font-weight: 800; font-size: 1.1rem;">Ultimate Luxury Space</p>
                </div>
                <div class="size-card" onclick="selectSize('queen')">
                    <h3>Ultra Queen Size</h3>
                    <div class="size-visual">
                        <div class="mattress-outline queen-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey); font-size: 1.05rem;">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--deep-blue); font-weight: 800; font-size: 1.1rem;">Supreme Luxury Comfort</p>
                </div>
                <div class="size-card" onclick="selectSize('single')">
                    <h3>Ultra Single</h3>
                    <div class="size-visual">
                        <div class="mattress-outline single-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey); font-size: 1.05rem;">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--coral); font-weight: 800; font-size: 1.1rem;">Personal Luxury Suite</p>
                </div>
                <div class="size-card" onclick="selectSize('twin')">
                    <h3>Ultra Twin</h3>
                    <div class="size-visual">
                        <div class="mattress-outline twin-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey); font-size: 1.05rem;">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--gold); font-weight: 800; font-size: 1.1rem;">Compact Luxury Solution</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ultra Features -->
    <section class="ultra-features">
        <div class="container">
            <h2>Exclusive Ultra Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Diamond-Grade Materials</h3>
                    <p>Premium materials including cashmere-infused covers, natural latex, and silk layers for ultimate luxury comfort.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Spa-Grade Comfort</h3>
                    <p>Experience spa-level relaxation with advanced pressure relief and temperature regulation technology for premium sleep.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Ultimate Durability</h3>
                    <p>Built to last with premium materials and construction techniques ensuring decades of luxury comfort and support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ultra Layer Visualization -->
    <section class="layer-visual">
        <div class="container">
            <h2>Ultra Multi-Layer Luxury Construction</h2>
            <div class="layer-container">
                <div class="layer-stack">
                    <div class="layer layer-1" onclick="showLayerInfo(1)">
                        Cashmere-Infused Luxury Cover - Supreme Comfort
                    </div>
                    <div class="layer layer-2" onclick="showLayerInfo(2)">
                        Diamond Memory Foam - Advanced Temperature Control
                    </div>
                    <div class="layer layer-3" onclick="showLayerInfo(3)">
                        Premium Natural Latex - Responsive & Supportive
                    </div>
                    <div class="layer layer-4" onclick="showLayerInfo(4)">
                        Ultra Pocket Spring System - Titanium Reinforcement
                    </div>
                    <div class="layer layer-5" onclick="showLayerInfo(5)">
                        High-Density Premium Foam - Ultimate Foundation
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ultra Comparison -->
    <section class="comparison-slider">
        <div class="container">
            <h2>Experience Ultra Luxury Difference</h2>
            <div class="slider-container">
                <div class="comparison-image">
                    <div class="image-after"></div>
                    <div class="image-before" id="imageBefore"></div>
                    <div class="slider-handle" id="sliderHandle"></div>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between; margin-top: 25px;">
                <div style="text-align: center;">
                    <h3 style="color: var(--pink);">Regular Mattress</h3>
                    <p style="color: var(--dark-grey); font-size: 1.05rem;">Pressure points & misalignment</p>
                </div>
                <div style="text-align: center;">
                    <h3 style="color: var(--deep-blue);">Ultra Luxury</h3>
                    <p style="color: var(--dark-grey); font-size: 1.05rem;">Supreme luxury & ultimate comfort</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ultra Warranty -->
    <section class="warranty-visual">
        <div class="container">
            <div class="warranty-badge">
                <div class="warranty-years">15</div>
                <div class="warranty-label">YEARS</div>
            </div>
            <h2 style="color: var(--white);">15-Year Ultra Warranty</h2>
            <p style="max-width: 700px; margin: 0 auto 25px; font-size: 1.2rem; color: rgba(255,255,255,0.95);">
                Supreme quality backed by our exclusive 15-year warranty. Your investment in ultimate luxury sleep is protected with absolute confidence.
            </p>
            <p style="font-size: 0.95rem; opacity: 0.9;">*Terms and conditions apply</p>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="container">
            <h2>Ready for Ultra Luxury Sleep?</h2>
            <p style="max-width: 800px; margin: 0 auto 35px; font-size: 1.3rem; color: rgba(255,255,255,0.95);">
                Experience the absolute pinnacle of sleep luxury with Ultra Luxury Peps Mattress - where supreme craftsmanship meets ultimate comfort technology.
            </p>
            <div class="cta-buttons">
                <!-- <a href="#" class="btn-cta pulse-btn">
                    <i class="fas fa-crown"></i> Experience Ultra Luxury
                </a> -->
                <a href="https://wa.me/919945689996" class="btn-cta" style="background: var(--white); color: var(--deep-blue);">
                    <i class="fab fa-whatsapp"></i> Ultra Consultation
                </a>
                <a href="tel:919945689996" class="btn-cta" style="background: transparent; border: 2px solid var(--white); color: var(--white);">
                    <i class="fas fa-phone"></i> Call Ultra Advisor
                </a>
            </div>
        </div>
    </section>

    <script>
        // Image Gallery Functionality
        const images = [
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-Lifestyle.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-img1.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-img2.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-img3.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N13-Double-Decker-img4.jpg'
        ];

        function changeImage(index) {
            const mainImage = document.getElementById('mainImage');
            const thumbs = document.querySelectorAll('.thumb');
            
            // Update main image with fade effect
            mainImage.style.opacity = '0';
            setTimeout(() => {
                mainImage.src = images[index];
                mainImage.style.opacity = '1';
            }, 300);
            
            // Update active thumbnail
            thumbs.forEach((thumb, i) => {
                if (i === index) {
                    thumb.classList.add('active');
                } else {
                    thumb.classList.remove('active');
                }
            });
        }

        // Size Selection
        function selectSize(size) {
            const sizeCards = document.querySelectorAll('.size-card');
            sizeCards.forEach(card => {
                card.classList.remove('selected');
            });
            
            event.currentTarget.classList.add('selected');
            
            // Enhanced animation
            event.currentTarget.style.transform = 'scale(1.08)';
            setTimeout(() => {
                event.currentTarget.style.transform = 'translateY(-8px) scale(1.02)';
            }, 200);
        }

        // Layer Information Display
        function showLayerInfo(layerNum) {
            const layers = document.querySelectorAll('.layer');
            layers.forEach(layer => {
                layer.style.background = layer.style.background.replace('0.9)', '0.75)');
            });
            
            const selectedLayer = document.querySelector(`.layer-${layerNum}`);
            selectedLayer.style.background = selectedLayer.style.background.replace('0.75)', '0.95)');
            
            // Show layer info (in a real implementation, this would display detailed info)
            // const layerInfo = [
            //     "Cashmere-Infused Luxury Cover: Supreme comfort fabric with cashmere infusion for ultimate softness and breathability",
            //     "Diamond Memory Foam: Highest grade memory foam with advanced temperature regulation and pressure relief technology",
            //     "Premium Natural Latex: Responsive natural latex provides exceptional support and comfort with eco-friendly properties",
            //     "Ultra Pocket Spring System: Individually encased springs with titanium reinforcement for perfect support and zero motion transfer",
            //     "High-Density Premium Foam: Durable foundation ensuring decades of luxury support and comfort"
            // ];
            
            // Enhanced alert styling for luxury feel
            const customAlert = document.createElement('div');
            customAlert.innerHTML = `
                <div style="position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.8); display:flex; align-items:center; justify-content:center; z-index:9999; padding:20px;">
                    <div style="background:linear-gradient(135deg, #ffffff, #f8f9fa); padding:40px; border-radius:20px; max-width:500px; width:90%; border:3px solid var(--gold); box-shadow:0 20px 60px rgba(0,0,0,0.3); position:relative;">
                        <h3 style="color:var(--deep-blue); margin-bottom:20px; font-size:1.4rem;">Ultra Layer Details</h3>
                        <p style="color:var(--dark-grey); font-size:1.1rem; line-height:1.6;">${layerInfo[layerNum - 1]}</p>
                        <button onclick="this.parentElement.parentElement.remove()" style="margin-top:30px; padding:12px 30px; background:linear-gradient(135deg, var(--gold), var(--coral)); color:var(--deep-blue); border:none; border-radius:25px; font-weight:700; cursor:pointer; font-size:1rem;">Close</button>
                    </div>
                </div>
            `;
            document.body.appendChild(customAlert);
        }

        // Comparison Slider
        const sliderHandle = document.getElementById('sliderHandle');
        const imageBefore = document.getElementById('imageBefore');
        let isDragging = false;

        sliderHandle.addEventListener('mousedown', startDrag);
        document.addEventListener('mousemove', drag);
        document.addEventListener('mouseup', stopDrag);

        // Touch events for mobile
        sliderHandle.addEventListener('touchstart', (e) => {
            e.preventDefault();
            startDrag(e.touches[0]);
        });
        document.addEventListener('touchmove', (e) => {
            e.preventDefault();
            drag(e.touches[0]);
        });
        document.addEventListener('touchend', stopDrag);

        function startDrag(e) {
            isDragging = true;
            sliderHandle.style.cursor = 'col-resize';
        }

        function drag(e) {
            if (!isDragging) return;
            
            const container = document.querySelector('.comparison-image');
            const containerRect = container.getBoundingClientRect();
            const x = e.clientX - containerRect.left;
            
            // Constrain to container bounds
            const percentage = Math.max(0, Math.min(1, x / containerRect.width));
            
            // Update slider position
            sliderHandle.style.left = `${percentage * 100}%`;
            
            // Update image width
            imageBefore.style.width = `${percentage * 100}%`;
        }

        function stopDrag() {
            isDragging = false;
            sliderHandle.style.cursor = 'col-resize';
        }

        // Add click functionality to slider container
        document.querySelector('.comparison-image').addEventListener('click', (e) => {
            const container = document.querySelector('.comparison-image');
            const containerRect = container.getBoundingClientRect();
            const x = e.clientX - containerRect.left;
            const percentage = Math.max(0, Math.min(1, x / containerRect.width));
            
            sliderHandle.style.left = `${percentage * 100}%`;
            imageBefore.style.width = `${percentage * 100}%`;
        });

        // Pulse animation for CTA button
        const pulseBtn = document.querySelector('.pulse-btn');
        setInterval(() => {
            pulseBtn.style.animation = 'none';
            setTimeout(() => {
                pulseBtn.style.animation = 'pulse 2s infinite';
            }, 10);
        }, 4000);

        // Add scroll animations
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        entry.target.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            document.querySelectorAll('.size-card, .tech-card, .feature-card, .layer').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                observer.observe(el);
            });
        });

        // Enhanced hover effects
        document.querySelectorAll('.tech-card, .feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Luxury page load effect
        window.addEventListener('load', () => {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.8s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
    
    <?php include "floating-buttons.php" ?>
    <?php include 'footer.php'; ?>
</body>
</html>