<?php
//mijn database gegevens//
$db_hostname = 'localhost';
$db_username = 'markvs02';
$db_wachtwoord = '02Pokemon';
$db_database = 'DB_82732';

//maak conectie//
$mysqli = mysqli_connect($db_hostname, $db_username, $db_wachtwoord, $db_database);

//geef een melding als verbinding niet werkt//
if (!$mysqli)
{
    echo 'errrrrorrrrrrrrrrrr geen verbinding met database <br>';
    echo 'Foutnummer is:'.mysqli_connect_errno().'<br>';
    echo 'foutnummer is:'.mysqli_connect_error().'<br>';
    exit();
}

?>

