<?php
$title = "Servicii parodontologie Bucuresti";
$desc = "Laserul dentar este aliatul nostru in tratamentele parodontale, cu ajutorul lui oferim tratamente sigure si precise";
include "inc/header.php";
?>
<section>
    <div>
        <h1>Servicii parodontologie</h1>
        <p class="j">Parodontoza sau parodontopatia este o inflamație cel mai frecvent de origine bacteriană, care afectează țesutul responsabil de menținerea și susținerea dinților în osul maxilar.</p>
        <p class="j">Tratamente personalizate: profilaxia afecțiunilor gingivale, tratament chirurgical(chiuretaj subgingival), imobilizarea dinților cu compozit, tratament parodontoză pentru toate stadiile bolii.</p>
    </div>
    <?php
    echo "<h2>Dentist AVA - listă servicii</h2>";
    include "inc/lista-servicii.php";
    ?>

</section>
<?php
include "inc/footer.php";
?>