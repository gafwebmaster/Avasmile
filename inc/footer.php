<section>
    <hr>
</section>

<section class="df sb">

    <?php

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if ($ip == "188.26.145.39") {
        include "form.php";
    }

    ?>
</section>
<footer>
    <section class="df sb">

        <p class="mt"> © <?php echo date("Y"); ?> Copyright. Toate drepturile rezervate | <a href="blog.php"><u>Blog</u></a></p>
        <p><a target="_blank" href="https://www.webtop.ro/">Website realizat de către webtop.ro</a></p>
    </section>
</footer>

<a href="#" class="to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 10l10-8l10 8M16 2v28" />
    </svg>
</a>

<div class="cookie-container">
    <p>Folosim cookies. Mai multe detalii: <a target="_blank" href="termeni-si-conditii.php">Termeni și condiții</a> și <a target="_blank" href="gdpr.php">GDPR</a>.</p>
    <button class="cookies btn mb">De acord</button>
</div>
<?php
include "inc/media.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/script.js"></script>

<!-- Gallery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>