<?php
$title = "Servicii Profilaxie Bucuresti";
$desc = "Coloratiile dintilor si depunerile de tartru pot fi doar o amintire cu ajutorul detartrajul si periajului profesional, efectuat in cadrul clinicilor Ava Smile.";
include "inc/header.php";
?>
<section>
    <div>
        <h1>Servicii profilaxie</h1>
        <p class="j"></p>
        <p class="j">Profilaxia – totalitatea manoperelor de care puteți beneficia în cabinetele noastre, pentru a preîntâmpina aparația sau agravarea problemelor dvs. dentare.</p>
        <p class="j">Profilaxia dentară trebuie să înceapă încă de la apariția primilor dinți și trebuie continuată pe tot parcursul vieții.</p>
        <p class="j"><strong>Detartrajul</strong> este o manoperă, ce constă în îndepartarea ‘pietrei’ (tartrului), de pe suprafata dinților.</p>
        <p class="j"><strong>Periajul profesional</strong> se realizează cu ajutorul unei paste speciale.</p>
        <p class="j"><strong>Air flow</strong> cea mai nouă tehnologie destinată curățării celor mai dificil de curațat zone- interdentare și subgingivale. Se efectuează prin folosirea unui jet de apă, amestecat cu o pudră aromatizată care conține bicarbonat de sodiu.</p>
    </div>
    <?php
    echo "<h2>Dentist AVA - listă servicii</h2>";
    include "inc/lista-servicii.php";
    ?>

</section>
<?php
include "inc/footer.php";
?>