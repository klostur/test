<?php
echo '<h1 class="text-6xl text-center mt-12">COZDRAVV</h1>';
include_once 'Dog.php';

$kuca = new Dog('Zuja', 10, 'Red');
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
<body class="text-gray-600 m-12">

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
                </div>

              
            </nav>
        </div>
        <main class="px-16 py-6">
            <div class="inline-block bg-gray-200 rounded-lg p-20">
                <h3><?php echo $kuca->getName(); ?> </h3>
            </div>
            <div>
                <form action="process.php" method="get" name="forma">
                    <label class="block" for="imja">Write something here:</label>
                    <input class="shadow border rounded" type="text" name="ime" id="imja" onkeyup="changeh1">
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