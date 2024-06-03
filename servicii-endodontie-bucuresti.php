<?php
$title = "Servicii endodontie Bucuresti";
$desc = "La Ava Smile, cu ajutorul microscopului dentar efectuam cele mai precise tratamente endodontice";
include "inc/header.php";
?>
<section>
    <div>
        <h1>Servicii endodonție</h1>
        <p class="j">Endodonția se ocupă cu tratamentul infecțiilor pulpei dentare. Tratamentul enodontic mai este cunoscut și ca ‘scoaterea nervului’, ‘tratament de canal’. Utilizarea microsopului în tratamentele endodontice asigură o rată de success de peste 90%.</p>
    </div>
    <?php
    echo "<h2>Dentist AVA - listă servicii</h2>";
    include "inc/lista-servicii.php";
    ?>

</section>
<?php
include "inc/footer.php";
?>