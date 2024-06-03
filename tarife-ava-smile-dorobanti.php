<?php
$title = "Clinica Ava Smile Dorobanti - tarife";
$desc = "Clinica Ava Smile Dorobanti: specialistii nostri te vor ajuta cu planul de tratament personalizat si cele mai bune variante de pret";
include "inc/header.php";
include "inc/preturi.php";
?>
<section class="profile">
    <div>
        <h1>Tarife <span class="redColor">Ava Smile</span> Dorobanți</h1>
    </div>

    <div class="df sb g team">

        <div class="w33">




            <h2>Prețuri adulți</h2>
            <div class="priceSection">
                <button class="accordion df">LASER DENTAR</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DOROBANTI_LASER_DENTAR as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>

            <div class="priceSection">
                <button class="accordion df">GENERAL</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_ADULTI as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>



            <div class="priceSection">
                <button class="accordion df">ODONTOTERAPIE</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_ODONTOTERAPIE as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>

            <div class="priceSection">
                <button class="accordion df">PROFILAXIE</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_PROFILAXIE as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>

            <div class="priceSection">
                <button class="accordion df">ENDODONȚIE MICROSCOP</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($FL_DB_ENDODONTIE_MICROSCOP as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>

        </div>

        <div class="w33">
            <h2>Alte servicii</h2>
            <div class="priceSection">
                <button class="accordion df">PROTETICĂ</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_PROTETICA as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">ESTETICĂ FACIALĂ</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_ESTETICA_FACIALA as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">CHIRURGIE</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_CHIRURGIE as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="w33">
            <h2>Prețuri copii</h2>
            <div class="priceSection">
                <button class="accordion df">ORTODONȚIE COPII</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_ORTODONTIE_COPII as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">STOMATOLOGIE GENERALĂ</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_KIDS as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">Profilaxie</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_PROFILAXIE_DENTARA as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">Tratamentul cariei dentare dinți temporari</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_TRATAMENTUL_CARIEI_DENTARE_DINTI_TEMPORARI as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">Dinți permanenți</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_DINTI_PERMANENTI as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>

            <div class="priceSection">
                <button class="accordion df">ENDODONTIE</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_ENDODONTIE as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">CHIRURGIE</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($DB_CHIRURGIE2 as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>


</section>
<?php
include "inc/footer.php";
?>