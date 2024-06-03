<?php
$title = "Chirurgie dentara Bucuresti";
$desc = "La Ava Smile ai toate serviciile de chirurgie dentara efectuate de specialisti in chirurgie orala cu specializari atat in tara cat si in strainatate";
include "inc/header.php";
?>
<section>
    <div>
        <h1>Chirurgie dentară</h1>
        <p class="j">La Ava Smile ai toate serviciile de chirurgie în același cabinet: extracții chirugicale, extracții molari de minte incluși sau semiincluși ,rezecție apicală, sinus lift, chirugia parodontală (chiuretaj în câmp deschis, chiuretaj în câmp închis), remodelara gingivală, implanturi dentare imediate(postextracționale) sau cu încărcare imediată. Succesul este asigurat prin folosirea celor mai noi tehnologii: plasmă îmbogățită cu factori de creștere, obținută din sângele pacientului, sticky bone, adiții de os autolog, blocuri osoase, piezosurgery, toate acestea creând un confort suplimentar pacientului în timpul intervenției.</p>
    </div>
    <?php
    echo "<h2>Dentist AVA - listă servicii</h2>";
    include "inc/lista-servicii.php";
    ?>

</section>
<?php
include "inc/footer.php";
?>