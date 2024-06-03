<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" type="image/jpg" href="img/fav.png" />
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.png" />
    <meta name="description" content="<?= $desc ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600&display=swap" rel="stylesheet">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Gallery -->
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>

    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <section>
            <div class="df sb headerDetails">
                <a href="/">
                    <img class="logo" src="img/logo-ava.jpeg">
                </a>

                <div class="df sb">
                    <div class="df sb am dd">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="3.5em" height="3em">
                                <path fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" d="M24 2.5A21.5 21.5 0 1 1 2.5 24A21.51 21.51 0 0 1 24 2.5Z" />
                                <circle cx="24" cy="24" r="2.5" fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" />
                                <path fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" d="M24 21.5V11.44m2.1 13.91l12.2 7.8" />
                            </svg>
                        </div>
                        <div class="df dc ai am">
                            <span><strong>L - V:</strong> 09.00-19.00<br>
                                <strong>S - D:</strong> ÎNCHIS</span>
                        </div>
                    </div>
                    <div class="df sb am ml">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="3.5em" height="3em">
                                <path fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" d="M40.72 30.28a62 62 0 0 1-6.3-1.11a3.11 3.11 0 0 0-3 .58c-.53.54-2.06 2.05-3.65 3.61a28.69 28.69 0 0 1-13.1-13.11c1.55-1.59 3-3.11 3.59-3.64a3.11 3.11 0 0 0 .58-3a61.84 61.84 0 0 1-1.11-6.31a2 2 0 0 0-2.3-1.77H6.91A1.5 1.5 0 0 0 5.55 6.9C5 14.59 9.29 22.82 10.16 24.4h0v.06l.12.23h0a35.44 35.44 0 0 0 13 13h0l.44.25h0c2 1.06 9.95 5.06 17.38 4.51a1.5 1.5 0 0 0 1.39-1.36v-8.51a2 2 0 0 0-1.77-2.3Z" />
                            </svg>
                        </div>
                        <div class="df dc ai contactDetails dd">
                            <div>
                                <a class="mr" href="tel:+40724823366"><strong>Dorobanți: </strong> 0724 823 366</a>
                            </div>
                            <div>
                                <a class="mr" href="tel:+40732 044 261"><strong>Floreasca: </strong> 0732 044 261</a>
                            </div>
                            <div>
                                <a class="mr" href="tel:+40754 021 222"><strong>Berceni: </strong> 0754 021 222</a>
                            </div>
                        </div>
                        <div class="df dc ai contactDetails dd">
                            <div>
                                <a class="mr" href="tel:+40311 029 308"><strong>Pajura: </strong> 0311 029 308</a>
                            </div>
                            <div>
                                <a class="mr" href="tel:+40747 777 000 "> <strong> Afumați: </strong> 0747 777 000</a>
                            </div>
                            <div class="program">
                                <a class="mr" href="#"><strong> L - V: </strong> 09.00-19.00</a>
                            </div>
                        </div>

                        <div class="df dm dr mobileContactDetails">
                            <div class="df dc l">
                                <a href="tel:+40724823366"><strong>Dorobanți:</strong></a>
                                <a href="tel:+40732 044 261"><strong>Floreasca:</strong></a>
                                <a href="tel:+40754 021 222"><strong>Berceni:</strong></a>
                                <a href="tel:+40311 029 308"><strong>Pajura:</strong></a>
                                <a href="tel:+40747 777 000 "> <strong>Afumați:</strong></a>
                                <a href="#"><strong>L - V:</strong></a>
                            </div>
                            <div class="df dc l">
                                <a href="tel:+40724823366"> 0724 823 366</a>
                                <a href="tel:+40732 044 261"> 0732 044 261</a>
                                <a href="tel:+40754 021 222"> 0754 021 222</a>
                                <a href="tel:+40311 029 308"> 0311 029 308</a>
                                <a href="tel:+40747 777 000 "> 0747 777 000</a>
                                <a href="#"> 09.00 - 19.00</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <nav class="topnav">
            <section class="df sb">
                <div class="menu">
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        MENIU <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M3 15h14v-2H3v2zM3 5v2h14V5H3zm0 6h14V9H3v2z" />
                        </svg>
                    </a>
                    <a href="index.php" class="<?= ($activePage == 'index') ? 'active' : '' ?>">Acasă</a>

                    <span class="dropdown">
                        <a href="#" class="<?= ($activePage === ('ava-smile-floreasca' || 'ava-clinique-pajura' || 'ava-clinique-berceni' || 'ava-smile-dorobanti' || 'ava-smile-afumati')) ? 'active' : '' ?>">Clinicile AVA <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                <path fill="currentColor" d="M862 465.3h-81c-4.6 0-9 2-12.1 5.5L550 723.1V160c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v563.1L255.1 470.8c-3-3.5-7.4-5.5-12.1-5.5h-81c-6.8 0-10.5 8.1-6 13.2L487.9 861a31.96 31.96 0 0 0 48.3 0L868 478.5c4.5-5.2.8-13.2-6-13.2z" />
                            </svg></a>
                        <div class="dropdown-content">
                            <a href="/ava-smile-dorobanti.php">Dorobanți</a>
                            <a href="/ava-smile-floreasca.php">Floreasca</a>
                            <a href="/ava-smile-berceni.php">Berceni</a>
                            <a href="/ava-smile-pajura.php">Pajura</a>
                            <a href="/ava-smile-afumati.php">Afumați</a>
                        </div>
                    </span>
                    <a href="echipa-ava.php" class="<?= ($activePage == 'echipa-ava') ? 'active' : ''; ?>">Echipă</a>
                    <span class="dropdown">
                        <a href="#">Tarife <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                <path fill="currentColor" d="M862 465.3h-81c-4.6 0-9 2-12.1 5.5L550 723.1V160c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v563.1L255.1 470.8c-3-3.5-7.4-5.5-12.1-5.5h-81c-6.8 0-10.5 8.1-6 13.2L487.9 861a31.96 31.96 0 0 0 48.3 0L868 478.5c4.5-5.2.8-13.2-6-13.2z" />
                            </svg></a>
                        <div class="dropdown-content">
                            <a href="/tarife-ava-smile-dorobanti.php">Dorobanți</a>
                            <a href="/tarife-ava-smile-floreasca.php">Floreasca</a>
                            <a href="/tarife-ava-smile-berceni.php">Berceni</a>
                            <a href="/tarife-ava-smile-pajura.php">Pajura</a>
                            <a href="/tarife-ava-smile-afumati.php">Afumați</a>
                        </div>
                    </span>
                    <a href="contact.php" class="<?= ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a>
                </div>
                <div>
                    <form action="rezultate-cautare.php" method="get" class="df">
                        <input type="text" name="cautrare">
                        <input type="submit" value="Cauta">
                    </form>
                </div>
                <div>
                    <a target="_blank" href="https://www.facebook.com/clinicaAVASmile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                            <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V912H539.2V602.2H434.9V481.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6c44.2 0 82.1 3.3 93.2 4.8v107.9z" />
                        </svg>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/clinicaavasmile/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                            <path d="M12 2c2.717 0 3.056.01 4.122.06c1.065.05 1.79.217 2.428.465c.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.047 1.066.06 1.405.06 4.122c0 2.717-.01 3.056-.06 4.122c-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772a4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465c-1.066.047-1.405.06-4.122.06c-2.717 0-3.056-.01-4.122-.06c-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153a4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122c.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10a5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0a1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6a3 3 0 0 1 0-6z" />
                        </svg>
                    </a>
                    <a target="_blank" href="https://www.tiktok.com/@avasmileclinique">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="1.4em" height="1.4em" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: red; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path d="M 0 10.934 v 68.132 C 0 85.105 4.895 90 10.934 90 h 68.132 C 85.105 90 90 85.105 90 79.066 V 10.934 C 90 4.895 85.105 0 79.066 0 H 10.934 C 4.895 0 0 4.895 0 10.934 z M 71.039 33.277 v 6.758 c -3.187 0.001 -6.283 -0.623 -9.203 -1.855 c -1.878 -0.793 -3.627 -1.814 -5.227 -3.048 l 0.048 20.801 c -0.02 4.684 -1.873 9.085 -5.227 12.4 c -2.73 2.698 -6.188 4.414 -9.937 4.97 c -0.881 0.13 -1.777 0.197 -2.684 0.197 c -4.013 0 -7.823 -1.3 -10.939 -3.698 c -0.586 -0.452 -1.147 -0.941 -1.681 -1.468 c -3.635 -3.593 -5.509 -8.462 -5.194 -13.584 c 0.241 -3.899 1.802 -7.618 4.404 -10.532 c 3.443 -3.857 8.26 -5.998 13.41 -5.998 c 0.906 0 1.803 0.068 2.684 0.198 v 2.499 v 6.951 c -0.835 -0.275 -1.727 -0.427 -2.656 -0.427 c -4.705 0 -8.512 3.839 -8.442 8.548 c 0.045 3.013 1.69 5.646 4.118 7.098 c 1.141 0.682 2.453 1.105 3.853 1.182 c 1.097 0.06 2.151 -0.093 3.126 -0.415 c 3.362 -1.111 5.787 -4.268 5.787 -7.992 l 0.011 -13.93 V 16.5 h 9.307 c 0.009 0.922 0.103 1.822 0.276 2.694 c 0.702 3.529 2.692 6.591 5.46 8.678 c 2.414 1.821 5.42 2.9 8.678 2.9 c 0.002 0 0.029 0 0.027 -0.002 V 33.277 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #db2525; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </a>

                </div>
            </section>
        </nav>
    </header>

    <div id="owlSlider" class="owl-carousel dflex c middle">
        <div>
            <img src="/img/header/header-1.webp">
        </div>
        <div>
            <img src="/img/header/header-2.webp">
        </div>
        <div>
            <img src="/img/header/header-3.webp">
        </div>
        <div>
            <img src="/img/header/header-4.webp">
        </div>
        <div>
            <img src="/img/header/header-5.webp">
        </div>
        <div>
            <img src="/img/header/header-6.webp">
        </div>
        <div>
            <img src="/img/header/header-8.webp">
        </div>
        <div>
            <img src="/img/header/header-9.webp">
        </div>
        <div>
            <img src="/img/header/header-10.webp">
        </div>
    </div>