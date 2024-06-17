<?php 

$dbconfig = parse_ini_file("..\dbconfig.env");

$host = $dbconfig["DB_HOST"];
$dbname = $dbconfig["DB_NAME"];
$dbuser = $dbconfig["DB_USERNAME"];
$password = $dbconfig["DB_PASSWORD"];

try {

    $dpdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $password);
    echo "Connected";
    // $dpdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXEPTION);

} catch(PDOException $e) {
    // Change error code ---
    echo "Connection failed";
    echo $e->getMessage();
    exit;
}
















