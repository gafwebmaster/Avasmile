<?php
$title = "Servicii pedodontie Bucuresti";
$desc = "Controlul periodic este foarte important pentru sanatatea orala a celor mici. Specialistii nostri au grija ca fiecare sedinta de profilaxie sa fie distractiva";
include "inc/header.php";
?>
<section>
    <div>
        <h1>Servicii pedodonție</h1>
        <p class="j">Prioritatea noastră, a medicilor de la Ava Smile este să creăm o atmoferă plăcută, unde cei mici să beneficieze de cele mai bune servicii de sigilare dentară, fluorizare, igienizare, profilaxia anomaliilor dento-maxilare, într-un mediu prietenos, fără durere, unde cei mai mici pacienți ai noștri să revină de fiecare dată curajoși, pentru indicații de prevenție.</p>
    </div>
    <?php
    echo "<h2>Dentist AVA - listă servicii</h2>";
    include "inc/lista-servicii.php";
    ?>

</section>
<?php
include "inc/footer.php";
?>