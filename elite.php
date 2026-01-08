<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Luxury | Premium Peps Mattress</title>
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
            background-color: var(--white);
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

        .btn-secondary {
            background: transparent;
            border: 2px solid var(--gold);
            color: var(--gold);
            box-shadow: 0 8px 20px rgba(254, 195, 59, 0.2);
        }

        .btn-secondary:hover {
            background: var(--gold);
            color: var(--deep-blue);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(254, 195, 59, 0.4);
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
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
                box-shadow: 0 0 0 10px rgba(254, 195, 59, 0);
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

        /* Hero Section - Elite Luxury Theme */
        .hero {
            background: linear-gradient(rgba(5, 14, 143, 0.9), rgba(5, 14, 143, 0.85)), 
                        url('https://pepsindia.b-cdn.net/wp-content/uploads/2025/06/N10-GrandPalais-Crystal-beige-Lifestyle-1536x1536.jpg') center/cover no-repeat;
            color: var(--white);
            padding: 100px 0 60px;
            min-height: 90vh;
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
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.05) 50%, transparent 70%);
            animation: shimmer 3s infinite linear;
            background-size: 200% auto;
        }

.hero-content {
    max-width: 600px;
    margin: 0 auto;        /* centers horizontally */
    z-index: 2;
    position: relative;
    animation: fadeIn 1s ease-out;
    text-align: center;   /* optional, centers text */
}

        .hero-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .hero-buttons .btn {
            min-width: 200px;
        }

        .hero-buttons .btn:hover {
            transform: translateY(-2px);
        }


        .hero-tag {
            display: inline-block;
            background: linear-gradient(135deg, var(--gold), var(--coral));
            color: var(--deep-blue);
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 0.9rem;
            border: 2px solid rgba(255,255,255,0.3);
        }

        /* Product Gallery */
        .gallery {
            padding: 60px 0;
            background: var(--light-grey);
        }

        .gallery-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .main-image {
            width: 100%;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            background: var(--white);
            border: 3px solid var(--gold);
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .thumbnails {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
        }

        .thumb {
            height: 100px;
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 3px solid transparent;
            position: relative;
        }

        .thumb:hover {
            transform: scale(1.05);
            border-color: var(--gold);
        }

        .thumb.active {
            border-color: var(--pink);
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(220, 49, 105, 0.2);
        }

        .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Size Visualizer */
        .size-visualizer {
            padding: 60px 0;
            background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
        }

        .size-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .size-card {
            background: linear-gradient(145deg, var(--white), #f0f2ff);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(5, 14, 143, 0.08);
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .size-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(5, 14, 143, 0.15);
            border-color: var(--gold);
        }

        .size-card.selected {
            border-color: var(--pink);
            background: linear-gradient(145deg, var(--white), #e8ebff);
            box-shadow: 0 15px 35px rgba(220, 49, 105, 0.1);
        }

        .size-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--pink), var(--coral));
        }

        .size-visual {
            width: 100%;
            height: 150px;
            margin: 15px 0;
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
            transition: all 0.3s ease;
            filter: drop-shadow(0 5px 10px rgba(0,0,0,0.1));
        }

        .king-outline { background-image: url('https://png.pngtree.com/png-vector/20240712/ourmid/pngtree-black-silhouette-of-a-king-bed-vector-png-image_7056335.png'); }
        .queen-outline { background-image: url('https://png.pngtree.com/png-vector/20230310/ourmid/pngtree-bed-line-icon-vector-png-image_6642805.png'); }
        .single-outline { background-image: url('https://www.shutterstock.com/image-vector/single-bed-hotel-room-silhouette-260nw-2234485111.jpg'); }
        .twin-outline { background-image: url('https://cdn.vectorstock.com/i/500p/98/05/minimalist-double-bed-with-mattress-and-pillows-vector-55529805.jpg'); }

        .size-card:hover .mattress-outline {
            transform: scale(1.05);
        }

        /* Elite Technology */
        .elite-tech {
            padding: 60px 0;
            background: linear-gradient(135deg, var(--deep-blue) 0%, #040a7a 100%);
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .elite-tech:before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            opacity: 0.3;
        }

        .elite-tech h2 {
            color: var(--white);
            position: relative;
            z-index: 1;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
            position: relative;
            z-index: 1;
        }

        .tech-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .tech-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--gold);
        }

        .tech-image {
            height: 180px;
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
            background: linear-gradient(to bottom, transparent, rgba(5, 14, 143, 0.8));
            display: flex;
            align-items: flex-end;
            padding: 20px;
        }

        .tech-overlay h3 {
            color: var(--white);
            margin: 0;
        }

        .tech-content {
            padding: 20px;
        }

        .tech-content p {
            color: rgba(255, 255, 255, 0.9);
        }

        /* Elite Features */
        .elite-features {
            padding: 60px 0;
            background: var(--white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-card {
            background: var(--white);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(220, 49, 105, 0.1);
            border-color: var(--gold);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--gold), var(--coral));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: var(--white);
            box-shadow: 0 10px 20px rgba(254, 195, 59, 0.3);
        }

        /* Elite Layer Visualization */
        .layer-visual {
            padding: 60px 0;
            background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
        }

        .layer-container {
            max-width: 800px;
            margin: 40px auto;
            position: relative;
        }

        .layer-stack {
            height: 500px;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 3px solid var(--gold);
        }

        .layer {
            position: absolute;
            left: 0;
            right: 0;
            height: 100px;
            background-size: cover;
            background-position: center;
            transition: all 0.5s ease;
            display: flex;
            align-items: center;
            padding-left: 40px;
            color: var(--white);
            font-weight: 600;
            font-size: 1.1rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            backdrop-filter: blur(2px);
        }

        .layer:hover {
            padding-left: 60px;
            height: 120px;
            backdrop-filter: blur(0);
        }

        .layer-1 { top: 0; background-image: linear-gradient(90deg, rgba(5,14,143,0.85), rgba(5,14,143,0.7)), url('https://www.silkandsnow.com/wp-content/themes/silkandsnow/img/mattress_protector_2_20250808.jpg'); }
        .layer-2 { top: 100px; background-image: linear-gradient(90deg, rgba(220,49,105,0.85), rgba(220,49,105,0.7)), url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlulojnFVGcFT3lwVHshMGW5dheb5LbcN88g&s'); }
        .layer-3 { top: 200px; background-image: linear-gradient(90deg, rgba(254,195,59,0.85), rgba(254,195,59,0.7)), url('https://www.durfi.com/cdn/shop/files/asnp7l7sop5qqn32o3nz.webp?v=1756798202&width=1445'); }
        .layer-4 { top: 300px; background-image: linear-gradient(90deg, rgba(248,111,72,0.85), rgba(248,111,72,0.7)), url('https://mishumattress.com/media/images/products/Elite_4.jpg'); }
        .layer-5 { top: 400px; background-image: linear-gradient(90deg, rgba(5,14,143,0.85), rgba(5,14,143,0.7)), url('https://relaxwell.in/cdn/shop/files/AristoPT-01.jpg?v=1712211311&width=4167'); }

        /* Elite Comparison */
        .comparison-slider {
            padding: 60px 0;
            background: var(--light-grey);
        }

        .slider-container {
            max-width: 1000px;
            margin: 40px auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            position: relative;
            border: 3px solid var(--gold);
        }

        .comparison-image {
            width: 100%;
            height: 500px;
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
            background-image: url('images/orthoafter.png');
        }

        .slider-handle {
            position: absolute;
            top: 0;
            left: 50%;
            width: 4px;
            height: 100%;
            background: var(--gold);
            z-index: 3;
            cursor: col-resize;
            transform: translateX(-50%);
        }

        .slider-handle:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 40px;
            height: 40px;
            background: var(--gold);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slider-handle:before {
            content: '↔';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--deep-blue);
            font-weight: bold;
            font-size: 1.2rem;
            z-index: 4;
        }

        /* Warranty Visual */
        .warranty-visual {
            padding: 60px 0;
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
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
            animation: shimmer 3s infinite linear;
            background-size: 200% auto;
        }

        .warranty-badge {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, var(--gold), #ffd700);
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: pulse 2s infinite;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border: 5px solid var(--white);
            position: relative;
            z-index: 1;
        }

        .warranty-years {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1;
            color: var(--deep-blue);
        }

        .warranty-label {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--deep-blue);
            margin-top: 5px;
        }

        .warranty-visual h2 {
            color: var(--white);
            position: relative;
            z-index: 1;
        }

        /* Final CTA */
        .final-cta {
            padding: 80px 0;
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
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .final-cta h2 {
            color: var(--white);
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 30px;
            position: relative;
            z-index: 1;
        }

        .btn-cta {
            background: var(--gold);
            color: white;
            padding: 18px 36px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border: 2px solid transparent;
        }

        .btn-cta:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            border-color: var(--white);
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
                padding: 40px 0;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .hero-buttons .btn {
                width: 100%;
                max-width: 280px;
            }
            
            .main-image {
                height: 400px;
            }
            
            .thumbnails {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .thumb {
                height: 80px;
            }
            
            .size-cards {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .tech-grid, .features-grid {
                grid-template-columns: 1fr;
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
                height: 80px;
                font-size: 1rem;
                padding-left: 20px;
            }
            
            .layer:hover {
                padding-left: 30px;
                height: 90px;
            }
            
            .comparison-image {
                height: 350px;
            }
            
            .warranty-badge {
                width: 150px;
                height: 150px;
            }
            
            .warranty-years {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Hero Section - Elite Luxury Theme -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-tag">Ultimate Luxury Experience</span>
                <h1>Elite Luxury Peps Mattress</h1>
                <p style="font-size: 1.2rem; color: rgba(255,255,255,0.9); margin-bottom: 30px;">
                    Experience unparalleled luxury and supreme comfort with our Elite collection. Crafted for those who demand the finest in sleep technology and premium materials.
                </p>
                <div class="hero-buttons">
                    <a href="#size-visualizer" class="btn btn-primary">Explore Elite Collection</a>
                    <a href="#gallery" class="btn btn-secondary">
                        View Luxury Gallery
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Gallery -->
    <section id="gallery" class="gallery">
        <div class="container">
            <h2>Elite Luxury Collection</h2>
            <div class="gallery-container">
                <div class="main-image">
                    <img id="mainImage" src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/06/N10-GrandPalais-Crystal-beige-Lifestyle-1536x1536.jpg" alt="Elite Luxury Mattress">
                </div>
                <div class="thumbnails">
                    <div class="thumb active" onclick="changeImage(0)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/06/N10-GrandPalais-Crystal-beige-Lifestyle-1536x1536.jpg" alt="Elite Master Suite">
                    </div>
                    <div class="thumb" onclick="changeImage(1)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N10-Beige-Zenimo-Online-19.png.jpg" alt="Premium Details">
                    </div>
                    <div class="thumb" onclick="changeImage(2)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N10-Beige-Zenimo-Online-21.jpg" alt="Luxury Layers">
                    </div>
                    <div class="thumb" onclick="changeImage(3)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N10-Beige-Zenimo-Online-20.jpg" alt="Craftsmanship">
                    </div>
                    <div class="thumb" onclick="changeImage(4)">
                        <img src="https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N10-Beige-Zenimo-Online-18.jpg" alt="Elite Comfort">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Elite Technology -->
    <section class="elite-tech">
        <div class="container">
            <h2>Elite Luxury Technology</h2>
            <div class="tech-grid">
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://bedandmattresshome.com/cdn/shop/files/61szKMof61L._SX679.jpg?v=1728493074');">
                        <div class="tech-overlay">
                            <h3>Platinum Memory Foam</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Premium platinum-grade memory foam with advanced temperature regulation and pressure relief technology for ultimate comfort.</p>
                    </div>
                </div>
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://images.jdmagicbox.com/v2/comp/def_content/ncat_id/pocket-spring-mattress-bys9u3i-250.jpg');">
                        <div class="tech-overlay">
                            <h3>Elite Pocket Spring System</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Individually encased pocket springs provide exceptional support and complete motion isolation for undisturbed luxury sleep.</p>
                    </div>
                </div>
                <div class="tech-card">
                    <div class="tech-image" style="background-image: url('https://mymorningowl.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnaturally-hypoallergenic-image.0532f16e.png&w=3840&q=75');">
                        <div class="tech-overlay">
                            <h3>Premium Natural Materials</h3>
                        </div>
                    </div>
                    <div class="tech-content">
                        <p>Handcrafted with premium natural materials including organic cotton, natural latex, and silk-infused fabrics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Size Visualizer -->
    <section id="size-visualizer" class="size-visualizer">
        <div class="container">
            <h2>Select Your Elite Size</h2>
            <div class="size-cards">
                <div class="size-card selected" onclick="selectSize('king')">
                    <h3>Elite King Size</h3>
                    <div class="size-visual">
                        <div class="mattress-outline king-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--pink); font-weight: 700;">Ultimate Luxury Space</p>
                </div>
                <div class="size-card" onclick="selectSize('queen')">
                    <h3>Elite Queen Size</h3>
                    <div class="size-visual">
                        <div class="mattress-outline queen-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--deep-blue); font-weight: 700;">Premium Luxury Comfort</p>
                </div>
                <div class="size-card" onclick="selectSize('single')">
                    <h3>Elite Single</h3>
                    <div class="size-visual">
                        <div class="mattress-outline single-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--coral); font-weight: 700;">Personal Luxury Suite</p>
                </div>
                <div class="size-card" onclick="selectSize('twin')">
                    <h3>Elite Twin</h3>
                    <div class="size-visual">
                        <div class="mattress-outline twin-outline"></div>
                    </div>
                    <p style="color: var(--dark-grey);">182.9L × 76.2W × 15.2Th cm</p>
                    <p style="color: var(--gold); font-weight: 700;">Compact Luxury Solution</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Elite Features -->
    <section class="elite-features">
        <div class="container">
            <h2>Exclusive Elite Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Premium Craftsmanship</h3>
                    <p>Handcrafted with attention to detail using the finest materials and luxury finishing touches.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Spa-like Comfort</h3>
                    <p>Experience spa-level relaxation with advanced pressure relief and temperature regulation technology.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Elite Durability</h3>
                    <p>Built to last with premium materials and construction techniques ensuring years of luxury comfort.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Elite Layer Visualization -->
    <section class="layer-visual">
        <div class="container">
            <h2>Elite Multi-Layer Luxury Construction</h2>
            <div class="layer-container">
                <div class="layer-stack">
                    <div class="layer layer-1" onclick="showLayerInfo(1)">
                        Premium Silk-Infused Cover - Luxurious & Breathable
                    </div>
                    <div class="layer layer-2" onclick="showLayerInfo(2)">
                        Platinum Memory Foam - Advanced Comfort Technology
                    </div>
                    <div class="layer layer-3" onclick="showLayerInfo(3)">
                        Natural Latex Layer - Responsive & Supportive
                    </div>
                    <div class="layer layer-4" onclick="showLayerInfo(4)">
                        Elite Pocket Spring System - Individual Support
                    </div>
                    <div class="layer layer-5" onclick="showLayerInfo(5)">
                        High-Density Premium Foam - Luxury Foundation
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Elite Comparison -->
    <section class="comparison-slider">
        <div class="container">
            <h2>Experience Elite Luxury Difference</h2>
            <div class="slider-container">
                <div class="comparison-image">
                    <div class="image-after"></div>
                    <div class="image-before" id="imageBefore"></div>
                    <div class="slider-handle" id="sliderHandle"></div>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                <div style="text-align: center;">
                    <h3 style="color: var(--pink);">Regular Mattress</h3>
                    <p style="color: var(--dark-grey);">Pressure points & misalignment</p>
                </div>
                <div style="text-align: center;">
                    <h3 style="color: var(--deep-blue);">Elite Luxury</h3>
                    <p style="color: var(--dark-grey);">Ultimate luxury & supreme comfort</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Warranty Visual -->
    <section class="warranty-visual">
        <div class="container">
            <div class="warranty-badge">
                <div class="warranty-years">12</div>
                <div class="warranty-label">YEARS</div>
            </div>
            <h2 style="color: var(--white);">12-Year Elite Warranty</h2>
            <p style="max-width: 600px; margin: 0 auto 20px; font-size: 1.1rem; color: rgba(255,255,255,0.9);">
                Elite quality backed by our comprehensive 12-year warranty. Your investment in ultimate luxury is protected with confidence.
            </p>
            <p style="font-size: 0.9rem; opacity: 0.8;">*Terms and conditions apply</p>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="container">
            <h2>Ready for Elite Luxury Sleep?</h2>
            <p style="max-width: 700px; margin: 0 auto 30px; font-size: 1.2rem; color: rgba(255,255,255,0.9);">
                Experience the pinnacle of sleep luxury with Elite Luxury Peps Mattress - where premium craftsmanship meets ultimate comfort.
            </p>
            <div class="cta-buttons">
                <a href="#" class="btn-cta" style="background: var(--white); color: var(--pink);">
                    <i class="fab fa-whatsapp"></i> Chat with Expert
                </a>
                <a href="#" class="btn-cta" style="background: transparent; border: 2px solid var(--white);">
                    <i class="fas fa-phone"></i> Call Now
                </a>
            </div>
        </div>
    </section>

    <script>
        // Image Gallery Functionality
        const images = [
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/06/N10-GrandPalais-Crystal-beige-Lifestyle-1536x1536.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N10-Beige-Zenimo-Online-19.png.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N10-Beige-Zenimo-Online-21.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N10-Beige-Zenimo-Online-20.jpg',
            'https://pepsindia.b-cdn.net/wp-content/uploads/2025/02/N10-Beige-Zenimo-Online-18.jpg'
        ];

        function changeImage(index) {
            const mainImage = document.getElementById('mainImage');
            const thumbs = document.querySelectorAll('.thumb');
            
            // Update main image with fade effect
            mainImage.style.opacity = '0';
            setTimeout(() => {
                mainImage.src = images[index];
                mainImage.style.opacity = '1';
            }, 200);
            
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
            
            // Animate selection
            event.currentTarget.style.transform = 'scale(1.05)';
            setTimeout(() => {
                event.currentTarget.style.transform = 'translateY(-5px)';
            }, 150);
        }

        // Layer Information Display
        function showLayerInfo(layerNum) {
            const layers = document.querySelectorAll('.layer');
            layers.forEach(layer => {
                layer.style.background = layer.style.background.replace('0.85)', '0.7)');
            });
            
            const selectedLayer = document.querySelector(`.layer-${layerNum}`);
            selectedLayer.style.background = selectedLayer.style.background.replace('0.7)', '0.9)');
            
            // Show layer info (in a real implementation, this would display detailed info)
            // const layerInfo = [
            //     "Premium Silk-Infused Cover: Luxurious, breathable fabric with natural silk infusion for ultimate comfort",
            //     "Platinum Memory Foam: Highest grade memory foam with advanced temperature regulation and pressure relief",
            //     "Natural Latex Layer: Responsive natural latex provides exceptional support and comfort",
            //     "Elite Pocket Spring System: Individually encased springs for perfect support and motion isolation",
            //     "High-Density Premium Foam: Durable foundation ensuring long-lasting luxury and support"
            // ];
            
            // alert(layerInfo[layerNum - 1]);
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
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            document.querySelectorAll('.size-card, .tech-card, .feature-card, .layer').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(el);
            });
        });

        // Add luxury shimmer effect
        document.addEventListener('scroll', () => {
            const hero = document.querySelector('.hero');
            const scrollY = window.scrollY;
            const opacity = Math.max(0.7, 0.9 - (scrollY / 1000));
            hero.style.background = `linear-gradient(rgba(5, 14, 143, ${opacity}), rgba(5, 14, 143, ${opacity - 0.05})), url('https://images.unsplash.com/photo-1616627982118-20c37b5c853e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat`;
        });
    </script>
    
    <?php include "floating-buttons.php" ?>
    <?php include 'footer.php'; ?>
</body>
</html>