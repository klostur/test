<?php

use PHPMailer\PHPMailer\PHPMailer;
use SebastianBergmann\Timer\Timer;

require __DIR__ . '/vendor/autoload.php';


// create demo data
$variable = array(1, 17, "hello", null, array(1, 2, 3));

// use KINT directly (which has been loaded automatically via Composer)
d($variable);

$timer = new Timer;

$timer->start();

sleep(3);

$duration = $timer->stop();

var_dump($duration);

