<?php
echo '<h1 class="text-6xl text-center mt-12 font-bold">Stereo </h1>';
include_once 'Dog.php';
include_once 'process.php';
// include_once __DIR__ . '/../app/jokes.php';
$pdo = require '../app/Connection.php';

$sql = 'SELECT * FROM joke';
    $res = $pdo->query($sql);

    while($row = $res->fetch()) {
        $jokes[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="ajax.js"></script>
    <title><?php echo $_SERVER['SERVER_SOFTWARE']; ?></title>
</head>

<body class="text-gray-600 m-12 content-center">

    <div>
        <div>
            <nav>
                <div>
                    <h1 class="font-bold uppercase p-4 border-b border-gray-100">
                        <a href="/"><?php echo $kuca->getName(); ?></a>
                    </h1>
                </div>
                <div>
                    <h2 class="font-bold uppercase p-4 border-b border-gray-100">
                        <a href="/"><?php echo Dog::getNumbOfDogs(); ?></a>
                    </h2>
                    <h3><?php echo __DIR__; ?></h3>
                </div>
                <div class="container flex-row  gap-20 flex ">
                    <?php foreach($jokes as $joke) : ?>
                        <div class="flex flex-col justify-center content-center bg-gray-200 rounded-lg p-4 w-1/2 mb-6">
                            <h3 class=""><?php echo $joke['joketext'] ?></h3>
                            <h6><?php echo $joke['jokedate']; ?></h6>
                        </div>
                    <?php endforeach; ?>
                </div>

            </nav>
        </div>
        <main class="px-16 py-6 w-1/3 ">
            
            <div class="container flex py-4 ">
                <form action="../app/addjoke.php" method="post" name="forma">
                    <label class="block" for="joke">Write something here: <?php echo rand(1, 10); ?></label>
                    <input class="shadow border rounded mb-4" type="text" name="joke" id="imja" onkeyup="">
                    
                    <button type="submit" class="block mt-4 bg-indigo-200 hover:bg-indigo-300 p-2 text-white rounded">Submit your data</button>
                </form>
            </div>
            <div>
                <a href="#">Log In</a>
                <a href="#">Sign Up</a>
            </div>
            <header>
                <h2 class="text-gray-700 text-6xl font-semibold">Recipies</h2>
                <h3 class="text-2xl">For Ninjas</h3>
            </header>

            <div>
                <h4 class="font-bold mt-12 pb-2 border-b border-gray-200 ">Latest Recipies</h4>
                <div class="mt-8">
                    <!-- cards go here -->
                    <div>
                        <img src="public/img/stew.jpg" alt="">
                        <div>
                            <span>5 bean Chilly Stew</span>
                            <span>Recipe by mario</span>
                        </div>
                    </div>
                </div>
                <h4 class="font-bold  mt-12 pb-2 border-b border-gray-200 ">Most Popular Recipies</h4>
                <div class="mt-8">
                    <!-- cards ho here-->
                    <div>
                        <div>
                            Load More
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>