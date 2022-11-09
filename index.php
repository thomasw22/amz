<?php

?>

<!DOCTYPE html>
<html lang="nl-NL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Thomas Westerdijk">
    <meta name="description" content="Website van Automakelaar-Zeeland" />
    <meta name="robots" content="index, follow">
    <meta name="copyright" content="Thomas Westerdijk">
    <meta name="keywords"
        content="Auto, makelaar, automakelaar zeeland, zeeland, automakelaar-zeeland, Storm, Nieuwland, Storm Nieuwland, Thomas Westerdijk, Thomas, Westerdijk, Storm auto">
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
    <div class="main1">
        <div class="main1-img"></div>
        <div class="main1-content">
            <div class="main1-content-center">
                <h1>Welkom bij Automakelaar Zeeland!</h1>
                <h2>Dit is ons motto!</h2>
                <div class="main1-buttons">
                    <a href="verkoop.php">Auto verkopen</a>
                    <a href="aankoop.php">Auto kopen</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main1-mob">
        <h1>Welkom bij Automakelaar Zeeland!</h1>
        <h2>Dit is ons motto!</h2>
    </div>
    <div class="main2">
        <div class="main2-content">
            <div class="main2block" data-aos="fade-up">
                <a href="verkoop.php">
                    <img src="images/default.jpg">
                    <h2>auto verkoop</h2>
                </a>
            </div>
            <div class="main2block" data-aos="fade-up">
                <a href="aankoop.php">
                    <img src="images/default.jpg">
                    <h2>auto aankoop</h2>
                </a>
            </div>
            <div class="main2block" data-aos="fade-up">
                <a href="tarieven.php">
                    <img src="images/default.jpg">
                    <h2>tarieven</h2>
                </a>
            </div>
            <div class="main2block" data-aos="fade-up">
                <a href="verkocht.php">
                    <img src="images/default.jpg">
                    <h2>verkocht</h2>
                </a>
            </div>
        </div>
    </div>
    <div class="main3">
        <div class="main3-bigimg" data-aos="fade-up" data-aos-duration="1000"></div>
        <div class="main3-info" data-aos="">
            <h2>Al onze klanten zijn erg tevreden!</h2>
        </div>
        <div class="main3-img1">
            <img src="images/auto.jpg" data-aos="fade-left">
        </div>
        <div class="main3-content" data-aos="fade-right">
            <h1>Een inspirerende quote</h1>
            <h2>Wij helpen u graag met dingen</h2>
            <p>Wij zullen niet stoppen totdat we een passende oplossing
                voor u hebben gevonden en u helemaal tevreden bent.
            </p>
            <a href="over-ons.php">Over ons</a>
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