<?php
$pdo = require_once 'Connection.php';
var_dump($_POST);
if (isset($_POST['joke'])) {
        $joke = htmlspecialchars($_POST['joke']);
        $stmt = $pdo->prepare("INSERT INTO joke SET joketext = :joke, jokedate = CURDATE(), authorid = 1");

        $stmt->bindValue(':joke', $joke);
        $stmt->execute();
}


header("Location: ../public/index.php");