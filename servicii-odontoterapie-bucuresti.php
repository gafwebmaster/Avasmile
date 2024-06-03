<?php
$title = "Servicii odontoterapie Bucuresti";
$desc = "Plombe dentare (obturatiile  foto) realizate cu materiale calitative iti vor restaura atat sanatatea cat si aspectul dintelui.";
include "inc/header.php";
?>
<section>
    <div>
        <h1>Estetică odontoterapie</h1>
        <p class="j">Odontoterapia se ocupă cu depistarea și tratarea cariilor dentare. Caria dentară netratată poate provoca dureri, infecții și chiar pierderea dinților afectați.</p>
        <p class="j">Pentru realizarea plombelor dentare folosim materiale compozite, de ultima generație, la culoarea dintelui.</p>
    </div>
    <?php
    echo "<h2>Dentist AVA - listă servicii</h2>";
    include "inc/lista-servicii.php";
    ?>

</section>
<?php
include "inc/footer.php";
?>