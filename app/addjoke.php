<?php
$pdo = require_once 'Connection.php';

if (isset($_POST['joke'])) {
        $joke = htmlspecialchars($_POST['joke']);
        $stmt = $pdo->prepare("INSERT INTO joke SET joketext = :joke, jokedate = CURDATE()");

        $stmt->bindValue(':joke', $joke);
        $stmt->execute();
}


header("Location: ../public/index.php");