<?php
$title = "";
$desc = "";

$cuvant = $_GET['cautrare'];

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
// Create connection concat('%',andreea,'%')
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT word, link FROM `redirects` WHERE `word` LIKE '%$cuvant%'";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    header("Location: {$row['link']}");
} else {
    echo "Cautati denumire de servicii sau numele persoanelor din echipa";
}
$conn->close();

include "inc/header.php";
include "inc/preturi.php";
?>
<section>
    <div class="home">
        <h1>Rezultate cautare</h1>
    </div>
</section>
<?php
include "inc/footer.php";
?>