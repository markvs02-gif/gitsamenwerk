<?php
require 'config.php';

$Email = $_POST['email'];
$Name = $_POST['name'];
$Bericht = $_POST['str'];

$verwerkquery = "INSERT INTO PortfolioReactie VALUES (NULL, '$Email', '$Name', '$Bericht')";

if (mysqli_query($mysqli, $verwerkquery)) {
    header("location:index.php#page4");
} else {
    echo "ja das kut het werkt niet<br>
        foutmetlding: " . mysqli_error($mysqli) . "";
}
