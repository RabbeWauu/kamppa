<?php
function connect() {
    $servername = "kuuras22.treok.io";
    $username = "kuuras22_admin";
    $password = "Rabbekuur100";
    //$port = 3306;
    $dbname = "kuuras22_kamppa";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
}

function getAllApartments() {
    $pdo = connect();
    $sql = "SELECT * FROM apartments";
    $stm = $pdo->query($sql);
    $apartments = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $apartments;
}
?>