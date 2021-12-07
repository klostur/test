<?php
$servername = "localhost";
$username = "user";
$password = "P@ssW0rd";


try {
    $conn = new PDO("mysql:host=$servername;dbname=ijdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";

    $sql = 'SELECT * FROM joke';
    $res = $conn->query($sql);

    while($row = $res->fetch()) {
        $jokes[] = $row;
    }

    //   var_dump($res);
    $conn = null;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}