<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>

    <!--* Style sheet -->
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header <?php echo isset( $main )? 'main' : '' ?>">
        <div class="contenedor content-header">
            <div class="bar">
                <a href="/">
                    <img src="build/img/logo.svg" alt="Real estate logo">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="mobile mobile">
                </div>

                <div class="right">
                    <nav class="navigation">
                        <a href="about-us.php">About Us</a>
                        <a href="listings.php">Listings</a>
                        <a href="blog.php">Blog</a>
                        <a href="contact.php">Contact</a>
                    </nav>
                    <img class="dark-mode-btn" src="build/img/dark-mode.svg" alt="Dark Mode">
                </div>
            </div> <!--! Closing of bar -->

            <?php echo isset( $main )? '<h1>Exclusive luxury homes and apartments for sale</h1>' : '' ?>
        </div> <!--! Closing of content-header -->
    </header>