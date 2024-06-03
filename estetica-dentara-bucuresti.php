<?php
$title = "Estetica dentara Bucuresti";
$desc = "Alaturi de noi poti sa iti indeplinesti visul de a avea un zambet fabulos. Albirea, fatetele dentare, sunt proceduri care te ajuta sa ajungi la zambetul visat";
include "inc/header.php";
?>
<section>
    <div>
        <h1>Estetică dentară</h1>
        <p class="j"><strong>Albirea dentară cu lampa zoom</strong> este cea mai cunoscută și accesată procedură de estetică dentară.</p>
        <p class="j"><strong>Albirea dentară în gutiere</strong> se realizează la domiciliu prin poziționarea pe suprafața dinților a unor gutiere cu gel.</p>
        <p class="j"><strong>Fațetele dentare</strong> se aplică pe suprafața exterioară a dinților, cu ajutorul acestora obtinându-se celebrul Holliwood Smile.</p>
        <p class="j"><strong>Coroane integral ceramice</strong> iau forma și structura funcțională a unui dinte natural.</p>
        <p class="j"><strong>Bijuteriile dentare</strong> se aplică pe dinte fără a-i afecta în vreun fel structura.</p>
    </div>

    <?php
    echo "<h2>Dentist AVA - listă servicii</h2>";
    include "inc/lista-servicii.php";
    ?>

</section>
<?php
include "inc/footer.php";
?>