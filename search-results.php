<?php
$searchQuery = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - <?php echo $searchQuery; ?> | Homestyle Interiors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --blue: #0d4f9e;
            --violet: #8b2fa3;
            --pink: #cf3fa6;
            --white: #ffffff;
            --dark: #111;
            --light-gray: #f8f9fa;
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-gray);
            color: var(--dark);
            padding-top: 80px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
        }

        .search-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .search-header h1 {
            font-size: 36px;
            color: var(--blue);
            margin-bottom: 10px;
        }

        .search-query {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }

        .suggestions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .suggestion-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: var(--transition);
            text-align: center;
        }

        .suggestion-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(13, 79, 158, 0.15);
        }

        .suggestion-card i {
            font-size: 48px;
            color: var(--blue);
            margin-bottom: 20px;
        }

        .suggestion-card h3 {
            font-size: 24px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .suggestion-card p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .suggestion-card a {
            background: linear-gradient(90deg, var(--blue), var(--violet));
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .suggestion-card a:hover {
            background: linear-gradient(90deg, var(--violet), var(--pink));
            transform: translateY(-2px);
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--blue);
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 30px;
            transition: var(--transition);
        }

        .back-link:hover {
            color: var(--violet);
        }

        @media (max-width: 768px) {
            .search-header h1 {
                font-size: 28px;
            }
            
            .suggestions-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <a href="javascript:history.back()" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to Previous Page
        </a>

        <div class="search-header">
            <h1>Search Results</h1>
            <?php if ($searchQuery): ?>
                <p class="search-query">No exact matches found for "<strong><?php echo $searchQuery; ?></strong>"</p>
                <p>Here are some suggestions that might interest you:</p>
            <?php else: ?>
                <p class="search-query">Please enter a search term to find products.</p>
            <?php endif; ?>
        </div>

        <div class="suggestions-grid">
            <div class="suggestion-card">
                <i class="fas fa-bed"></i>
                <h3>Premium Mattresses</h3>
                <p>Discover our complete range of PEPS mattresses including orthopedic, memory foam, and luxury collections.</p>
                <a href="affordable.php">View Mattresses</a>
            </div>

            <div class="suggestion-card">
                <i class="fas fa-utensils"></i>
                <h3>Kitchen Appliances</h3>
                <p>Explore modern kitchen solutions including chimneys, hobs, sinks, and faucets from premium brands.</p>
                <a href="chimneys.php">View Kitchen</a>
            </div>

            <div class="suggestion-card">
                <i class="fas fa-home"></i>
                <h3>Home Furnishing</h3>
                <p>Transform your living spaces with our designer curtains, blinds, and custom furniture solutions.</p>
                <a href="curtains.php">View Furnishing</a>
            </div>

            <div class="suggestion-card">
                <i class="fas fa-couch"></i>
                <h3>Custom Sofas</h3>
                <p>Create the perfect seating solution with our customizable sofa designs and premium upholstery options.</p>
                <a href="sofa.php">View Sofas</a>
            </div>

            <div class="suggestion-card">
                <i class="fas fa-images"></i>
                <h3>Product Gallery</h3>
                <p>Browse our complete product showcase featuring all categories and latest additions to our collection.</p>
                <a href="gallery.php">View Gallery</a>
            </div>

            <div class="suggestion-card">
                <i class="fas fa-phone"></i>
                <h3>Get Help</h3>
                <p>Can't find what you're looking for? Contact our experts for personalized recommendations and assistance.</p>
                <a href="contact-us.php">Contact Us</a>
            </div>
        </div>
    </div>
    <?php include "floating-buttons.php" ?>
    <?php include 'footer.php'; ?>
</body>
</html>