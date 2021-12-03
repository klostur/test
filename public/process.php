<?php 
require_once 'Dog.php';
if(isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
}

$age = htmlspecialchars($_POST['age']);
$color = htmlspecialchars($_POST['color']);


// var_dump($_REQUEST);

// header('Location: index.php');