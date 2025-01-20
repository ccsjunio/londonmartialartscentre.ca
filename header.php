<?php
// Get the protocol (http or https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";

// Get the host (domain name)
$domain = $_SERVER['HTTP_HOST'];

// Combine to get the full domain URL
$currentDomain = $protocol . "://" . $domain;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'London Martial Arts Centre'; ?></title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" href="images/Logo_2024_02_ico.ico" type="image/x-icon">
    <script src="scripts/main.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://gymdesk.com/js/widgets.js"></script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N3L3TNZR');</script>
    <!-- End Google Tag Manager -->
    
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3L3TNZR"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<header>
    <div class="container">
        <h1>
            <a href="index.php">
                <img src="images/Logo_2024_02.png" alt="London Martial Arts Centre Logo" class="logo">
                London Martial Arts Centre
            </a>
        </h1>
        <nav>
            <!-- Hamburger Icon -->
            <button class="hamburger" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Navigation Menu -->
            <ul class="menu">
                <li><a href="index.php" id="menu-item-home">Home</a></li>
                <li><a href="index.php#about" id="menu-item-about-us">About Us</a></li>
                <li><a href="index.php#classes" id="menu-item-classes">Classes</a></li>
                <li class="dropdown">
                    <a href="#services" class="dropbtn" id="menu-item-our-services">Our Services</a>
                    <div class="dropdown-content">
                        <a href="kung-fu-tai-chi-group-classes.php" id="menu-item-kung-fu-taichi-group-classes">Kung Fu and Tai Chi Group Classes</a>
                        <a href="private-classes.php" id="menu-item-private-classes">Private Classes</a>
                        <a href="online-private-classes.php" id="menu-item-online-private-classes">Online Private Classes</a>
                        <a href="birthday-parties.php" id="menu-item-birthday-parties">Birthday Parties</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="index.php#contact" class="dropbtn">Contact</a>
                    <div class="dropdown-content">
                        <a href="index.php#contact" id="menu-item-contact-us">Contact Us</a>
                        <a href="book-a-call.php" id="menu-item-book-call">Book a Call</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">More Info</a>
                    <div class="dropdown-content">
                        <a href="genealogy.php" id="menu-item-genealogy">Genealogy</a>
                        <a href="instructors.php" id="menu-item-instructors">Instructors</a>
                    </div>
                </li>
                <li><a href="https://londonmartialartscentre.gymdesk.com/login" id="menu-item-member-area">Members Area</a></li>
            </ul>
        </nav>
    </div>
</header>