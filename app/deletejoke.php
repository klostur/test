<?php

$pdo = require_once 'Connection.php';

var_dump($_POST);

if(isset($_POST['id'])) {
    $id = htmlspecialchars($_POST['id']);

    $query = $pdo->prepare('DELETE FROM joke WHERE ID = :id');

    $query->bindValue(':id', $id);
    $query->execute();

    
}

header("Location: ../public/index.php");