<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[SERVER NAME]</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <div class="navbar">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li class="center-text">
                    <span>[SERVER NAME]</span>
                </li>
                <li><a href="apply.php">APPLY</a></li>
                <li><a href="Your Discord Link">DISCORD</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="hero">
            <img src="img/Logo.png" alt="Your Logo" class="hero-logo">
        </div>
        <div class="content gallery">
            <h2>Gallery (TEMP IMAGES)</h2>
            <div class="gallery-grid">
            <?php
                $directory = 'img/gallery/';
                $images = glob($directory . "*.{jpg,png,gif}", GLOB_BRACE);

                foreach($images as $image) {
                    echo '<div class="gallery-item">';
                    echo '<img src="' . $image . '" alt="Gallery Image">';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> [SERVER NAME]. All rights reserved. | Built by DevDyls</p>
    </footer>
</body>
</html>
