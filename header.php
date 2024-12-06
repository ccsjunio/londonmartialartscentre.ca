<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'London Martial Arts Centre'; ?></title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<header>
    <div class="container">
        <h1>
            <a href="index.php">
                <img src="images/Logo_2024_02.png" alt="London Martial Arts Centre Logo" class="logo">
                London Martial Arts Centre
            </a>
        </h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About Us</a></li>
                <li><a href="index.php#classes">Classes</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">More Info</a>
                    <div class="dropdown-content">
                        <a href="genealogy.php">Genealogy</a>
                        <a href="instructors.php">Instructors</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>