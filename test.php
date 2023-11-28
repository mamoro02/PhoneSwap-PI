<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
$config = json_decode(file_get_contents(__DIR__ . "/config/dba.json"), true);

$conn = new PDO(
    "mysql:host=" . $config["host"] . ";dbname=" . $config["dbname"] . ";port=" . $config["port"],
    $config["user"],
    $config["password"]
);

$cesta = [3, 5, 20, 3];
$sql = "SELECT t.*, count(idModelo) as quantity FROM (";
$sql .= str_repeat("SELECT * FROM `modelo` WHERE `idModelo` = ? UNION ALL ", count($cesta));
$sql = substr($sql,0,-11);
$sql .= ") t GROUP BY t.idModelo;";
$stmt = $conn->prepare($sql);

for ($i = 1; $i <= count($cesta); $i++) {
    $stmt->bindParam($i, $cesta[$i - 1], PDO::PARAM_INT);
}
//$stmt->debugDumpParams();
$stmt->execute();

var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
