<?php

?>

<!DOCTYPE html>
<html lang="nl-NL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Thomas Westerdijk">
    <meta name="description" content="Automakelaar-Zeeland -- Over ons" />
    <meta name="robots" content="index, follow">
    <meta name="copyright" content="Thomas Westerdijk">
    <meta name="language" content="NL">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <link href="styles/keyframes.css" rel="stylesheet">
    <link href="styles/breakpoints.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Automakelaar Zeeland</title>
</head>

<body>
    <div class="top" id="top">
        <div class="logo" id="logo">
            <img src="images/full.png">
        </div>
        <div class="mob-nav" onclick="mobnavo();">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="nav">
        <ul class="nav-ul">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="index.php">Inkoop</a>
            </li>
            <li>
                <a href="index.php">Verkoop</a>
            </li>
            <li>
                <a href="index.php">Over ons</a>
            </li>
            <li>
                <a href="index.php">Tarieven</a>
            </li>
            <li>
                <a href="index.php">Verkocht</a>
            </li>
            <li>
                <a href="index.php">Contact</a>
            </li>
        </ul>
    </div>
    <div class="main-about">
        <h1>Over ons</h1>
        <p>
            Wij van automakelaar zeeland helpen u graag op weg met het kopen
            van een auto, of het verkopen van uw auto. Wij doen dit al 98
            jaar, met nog steeds evenveel plezier.
        </p>
    </div>
    <div class="main-about-team">
        <h1>Ons team</h1>
        <div class="about-person">
            <img src="images/small.png" alt="Storm Nieuwland">
            <h2>Storm Nieuwland</h2>
            <h3>CEO</h3>
            <h3>Contactgegevens:</h3>
            <a href="">stormnieuwland@automakelaar-zeeland.nl</a>
        </div>
        <div class="about-person">
            <h2>Luuk Kempe</h2>
            <h3>(Web)designer</h3>
            <h3>Contactgegevens:</h3>
            <a href="">aaa</a>
        </div>
        <div class="about-person">
            <h2>Thomas Westerdijk</h2>
            <h3>(Web)developer / Programmeur</h3>
            <h3>Contactgegevens:</h3>
            <a href="">thomas@westerdijk.eu</a>
        </div>
    </div>
    <div class="contact">
        <a href="tel:+31651672798">
            <i class="fas fa-phone"></i>
            <p>+31 6 51 672 798</p>
        </a>
        <a href="mailto:info@automakelaar-zeeland.nl">
            <i class="fas fa-envelope"></i>
            <p>info@automakelaar-zeeland.nl</p>
        </a>
    </div>
    <div class="footer">
        <img src="images/full.png" alt="logo">
        <ul class="footer-nav">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="verkoop.php">Showroom</a>
            </li>
            <li>
                <a href="over-ons.php">Over ons</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <li>
                <a href="">Development</a>
            </li>
        </ul>
    </div>
    <a href="https://westerdijk.eu" class="credit-a" target="_blank">
        <div class="credits">
            <h1><span>&copy;</span>Thomas Westerdijk</h1>
        </div>
    </a>
    <div class="mob-nav-wrapper" id="mob-nav-wrapper">
        <div class="mob-nav-top">
            <div class="mob-nav-logo">
                <img src="images/full.png" alt="Logo">
            </div>
            <div class="mob-nav-close" onclick="mobnavc();">
                <span>X</span>
            </div>
        </div>
        <div class="mob-nav-content">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="index.php">Inkoop</a>
                </li>
                <li>
                    <a href="index.php">Verkoop</a>
                </li>
                <li>
                    <a href="index.php">Over ons</a>
                </li>
                <li>
                    <a href="index.php">Tarieven</a>
                </li>
                <li>
                    <a href="index.php">Verkocht</a>
                </li>
                <li>
                    <a href="index.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/7ad0e49df2.js" crossorigin="anonymous"></script>
    <script src="script/main.js"></script>
    <!-- <a href="panel/index.php">CONTROL PANEL FOR DA DING</a> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        disable: 'mobile'
    });
    </script>
</body>

</html>