<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit'];
$melder = $_POST['melder'];

echo $attractie . " / " . $capaciteit . " / " . $melder;

//1. Verbinding
require_once '../../../config/conn.php';

$query = "INSERT INTO meldingen (attractie, capaciteit, melder)
VALUES (:attractie, :capaciteit, :melder)";

$statement = $conn->prepare($query);

$statement->execute([
    ":attractie"=>$attractie,
    ":capaciteit"=>$capaciteit,
    ":melder"=>$melder,
]);

$items = $statement->fetchAll(PDO::FETCH_ASSOC);
//2. Query

//3. Prepare

//4. Execute
