<?php
$title = "Clinica Ava Smile Berceni - tarife";
$desc = "Clinica Ava Smile Berceni: specialistii nostri te vor ajuta cu planul de tratament personalizat si cele mai bune variante de pret";
include "inc/header.php";
include "inc/preturi.php";
?>
<section class="profile">
    <div>
        <h1>Tarife <span class="redColor">Ava Smile</span> Berceni</h1>
    </div>

    <div class="df sb g team">

        <div class="w33">
            <h2>Prețuri adulți</h2>
            <div class="priceSection">
                <button class="accordion df">STOMATOLOGIE GENERALĂ</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($BERCENI_STOMATOLOGIE_GENERALA as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">ORTODONȚIE</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($BERCENI_ORTODONTIE as $service => $price) {
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
                        foreach ($BERCENI_PROTETICA as $service => $price) {
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
                        foreach ($BERCENI_CHIRURGIE as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">MICROSCOP</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($BERCENI_MICROSCOP as $service => $price) {
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
                <button class="accordion df">STOMATOLOGIE GENERALĂ</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($BERCENI_KIDS as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">DINȚI TEMPORARI</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($BERCENI_DINTI_TEMPORARI as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">DINȚI PERMANENȚI</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($BERCENI_DINTI_PERMANENTI as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">ENDODONȚIE</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($BERCENI_KIDS_ENDODONTIE as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="priceSection">
                <button class="accordion df">CHIRURGHIE</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($BERCENI_KIDS_CHIRURGHIE as $service => $price) {
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