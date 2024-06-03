<?php
$title = "Clinica Ava Smile Afumati - tarife";
$desc = "Clinica Ava Smile Afumati: cabinet stomatologic profesional care colaboreaza cu CNAS si ofera consultatii gratuite, in limita plafonului lunar.";
include "inc/header.php";
include "inc/preturi.php";

?>
<section class="profile">
    <div>
        <h1>Tarife <span class="redColor">Ava Smile</span> Afumați</h1>
    </div>

    <div class="df sb g team">

        <div class="w50">
            <h2>Prețuri adulți</h2>
            <div class="priceSection">
                <button class="accordion df">STOMATOLOGIE GENERALĂ</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($AFUMATI_ADULTI as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>


            <div class="priceSection">
                <button class="accordion df">PROTETICĂ</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($AFUMATI_PROTETICA as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>



            <div class="priceSection">
                <button class="accordion df">CHIRURGIE DENTO-ALVEOLARĂ</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($AFUMATI_CHIRURGIE_DENTO_ALVEOLARA as $service => $price) {
                            echo "<tr><td style='line-height: 40px; style='padding: 10px'>$service</td><td style='padding: 10px'>$price</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>



        <div class="w50">
            <h2>Prețuri copii</h2>
            <div class="priceSection">
                <button class="accordion df">STOMATOLOGIE GENERALĂ</button>
                <div class="panel">
                    <table>
                        <?php
                        foreach ($AFUMATI_COPII as $service => $price) {
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