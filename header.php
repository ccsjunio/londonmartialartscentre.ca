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
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About Us</a></li>
                <li><a href="index.php#classes">Classes</a></li>
                <li class="dropdown">
                    <a href="#services" class="dropbtn">Our Services</a>
                    <div class="dropdown-content">
                        <a href="kung-fu-tai-chi-group-classes.php">Kung Fu and Tai Chi Group Classes</a>
                        <a href="private-classes.php">Private Classes</a>
                        <a href="online-private-classes.php">Online Private Classes</a>
                        <a href="birthday-parties.php">Birthday Parties</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="index.php#contact" class="dropbtn">Contact</a>
                    <div class="dropdown-content">
                        <a href="index.php#contact">Contact Us</a>
                        <a href="book-a-call.php">Book a Call</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">More Info</a>
                    <div class="dropdown-content">
                        <a href="genealogy.php">Genealogy</a>
                        <a href="instructors.php">Instructors</a>
                    </div>
                </li>
                <li><a href="https://londonmartialartscentre.gymdesk.com/login">Members Area</a></li>
            </ul>
        </nav>
    </div>
</header>