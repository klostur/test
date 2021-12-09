<?php

// $pdo = include_once '../app/Connection.php';

function totalJokes($pdo) {
    try {
        //code...
        $query = $pdo->prepare('SELECT COUNT(*) FROM joke');
    $query->execute();

    $row = $query->fetch();
    return $row[0];
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
