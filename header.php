
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMdV8xZ5gG6cmD+JxO6a6GJKbZ5T3gk5D0fX3c" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM88gK14c82sZB66CkE5tiT5lFhJXvIh7Dh6z1" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Add Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <title>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'about':
                    echo 'About Us - Sun Solar Industry';
                    break;
                case 'work':
                    echo 'Our Work - Sun Solar Industry';
                    break;
                case 'product':
                        echo 'Product - Sun Solar Industry';
                        break;
                case 'contact':
                    echo 'Contact Us - Sun Solar Industry';
                    break;
               
                default:
                    echo 'Home - Sun Solar Industry';
            }
        } else {
            echo 'Home - Sun Solar Industry';
        }
        ?>
    </title>

    <!-- Meta Description -->
    <meta name="description" content="Sun Solar Industry offers the best solar panels and energy solutions in Jhansi. From solar panel installation and maintenance to cost-effective renewable energy solutions, we serve residential and commercial clients in Jhansi. Discover the power of solar energy with the top solar company in Jhansi.">

    <!-- Meta Keywords -->
    <meta name="keywords" content="Sun Solar Industry, solar panel Jhansi, best solar panels in Jhansi, solar energy provider Jhansi, solar installation services Jhansi, solar maintenance Jhansi, eco-friendly energy Jhansi, residential solar Jhansi, commercial solar solutions Jhansi, renewable energy Jhansi, affordable solar panels Jhansi, premium solar Jhansi, solar systems in Jhansi, Jhansi solar products, top solar panel dealers Jhansi, solar power solutions Jhansi, Sun Solar Jhansi reviews">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="Sun Solar Industry - Best Solar Panels & Energy Solutions in Jhansi">
    <meta property="og:description" content="Discover high-quality solar panels and energy solutions in Jhansi with Sun Solar Industry. We specialize in installation, maintenance, and eco-friendly solar power for homes and businesses.">
    <meta property="og:image" content="assets/logo.jpeg">
    <meta property="og:url" content="https://sunsolarindustry.in">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sun Solar Industry - Best Solar Panels & Energy Solutions in Jhansi">
    <meta name="twitter:description" content="Sun Solar Industry in Jhansi provides top solar panel solutions for residential and commercial needs. Harness eco-friendly solar power for sustainable energy.">
    <meta name="twitter:image" content="assets/logo.jpeg">

    <!-- Schema Markup for Local Business -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Sun Solar Industry",
        "description": "Sun Solar Industry offers the best solar panels and energy solutions in Jhansi. From installation to maintenance, we provide sustainable energy options for residential and commercial clients.",
        "url": "https://sunsolarindustry.in",
        "telephone": "+91-XXXXXXXXXX",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Solar Street",
            "addressLocality": "Jhansi",
            "addressRegion": "UP",
            "postalCode": "284001",
            "addressCountry": "IN"
        },
        "image": "https://sunsolarindustry.in/assets/logo.jpeg",
        "openingHours": "Mo-Fr 09:00-18:00",
        "priceRange": "$$",
        "sameAs": [
            "https://www.facebook.com/sunsolarindustry",
            "https://www.instagram.com/sunsolarindustry"
        ]
    }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .dropdown-hidden {
            display: none;
        }

        .typewriter {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            border-right: 0.15em solid orange;
            animation: typing 4s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: orange
            }
        }
    </style>
    <style>
        /* Add custom styles for the slider */
        .slick-slide {
            transition: transform 0.5s;
        }

        .slick-slide img {
            border-radius: 0.5rem;
            /* Optional: for rounded corners */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
</head>

<body class="">

    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 w-full z-20 transition-all duration-300 ease-in-out bg-transparent">
        <div class="container mx-auto flex justify-between items-center py-4 px-4 md:px-6 lg:px-8">
            <!-- Logo -->
            <a href="/" class="text-xl font-bold text-white hover:text-orange-600">
            <img class="h-16 w-40 sm:w-60 rounded-lg" src="assets/logo.jpeg" alt="sun solar industry"/></a>
            <!-- Links for large screens -->
            <ul class="hidden md:flex space-x-8 items-center text-lg">
                <li><a href="index.php?page=home" class="text-white hover:text-orange-600">Home</a></li>
                <li><a href="index.php?page=about" class="text-white hover:text-orange-600">About Us</a></li>
                <li><a href="index.php?page=work" class="text-white hover:text-orange-600">Work</a></li>
                
                <li>
                    <a href="index.php?page=product" class="text-white hover:text-orange-600">Product</a>
                    <button class="ml-2 text-white" id="services-button">▼</button>
                    <ul id="services-dropdown" class="dropdown-hidden absolute bg-gray-200 rounded-md shadow-lg mt-2">
                        <li><a href="index.php?page=product" class="block px-4 py-2 hover:text-orange-600">Solar Power Plant</a></li>
                        <li><a href="index.php?page=product" class="block px-4 py-2 hover:text-orange-600">Solar Panel</a></li>
                        <li><a href="index.php?page=product" class="block px-4 py-2 hover:text-orange-600">Rooftop Solar System</a></li>
                        <li><a href="index.php?page=product" class="block px-4 py-2 hover:text-orange-600">Solar Inverter</a></li>
                        <li><a href="index.php?page=product" class="block px-4 py-2 hover:text-orange-600">Solar Battery</a></li>
                        <li><a href="index.php?page=product" class="block px-4 py-2 hover:text-orange-600">Solar Installation</a></li>
                  
                    </ul>
                </li>
                <li><a href="index.php?page=contact" class="text-white hover:text-orange-600">Contact Us</a></li>
                <a href="tel:" class="px-6 py-2 bg-orange-600 text-white rounded-full">Book a Call</a>
            </ul>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="block md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile menu dropdown -->
        <div id="mobile-menu" class="md:hidden bg-white px-4 pt-2 pb-4 hidden shadow-lg">
            <a href="index.php?page=index" class="block px-3 py-2 text-black hover:text-orange-600">Home</a>
            <a href="index.php?page=about" class="block px-3 py-2 text-black hover:text-orange-600">About Us</a>
            <a href="index.php?page=work" class="block px-3 py-2 text-black hover:text-orange-600">Work</a>
            <a href="index.php?page=product" class="block px-3 py-2 text-black hover:text-orange-600">Product</a>
            <a href="index.php?page=contact" class="block px-3 py-2 text-black hover:text-orange-600">contact us</a>
            <a href="tel:" class="block px-6 py-2 mt-4 bg-orange-600 text-white rounded-full text-center">Book a
                Call</a>
        </div>
    </nav>
 <!-- WhatsApp Icon - Bottom Left -->
<a href="https://wa.me/91XXXXXXXXXX" target="_blank" class="fixed left-4 bottom-4 z-50 bg-green-500 rounded-full w-12 h-12 flex items-center justify-center text-white hover:bg-green-600">
    <i class="fab fa-whatsapp text-xl"></i>
</a>

<!-- Call Icon - Bottom Right -->
<a href="tel:+91XXXXXXXXXX" class="fixed right-4 bottom-4 z-50 bg-blue-500 rounded-full w-12 h-12 flex items-center justify-center text-white hover:bg-blue-600">
    <i class="fas fa-phone-alt text-xl"></i>
</a>

