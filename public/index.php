<?php
echo '<h1 class="text-6xl text-center mt-12 font-bold">Stereo Banana</h1>';
include_once 'Dog.php';
include_once 'process.php';



?>

<?php
$servername = "localhost";
$username = "user";
$password = "P@ssW0rd";

try {
  $conn = new PDO("mysql:host=$servername;dbname=ijdb", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
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

              
            </nav>
        </div>
        <main class="px-16 py-6 w-1/3 ">
            <div class="inline-block bg-gray-200 rounded-lg p-20">
                <?php echo $kuca->setName('test'); ?>
                <h3><?php echo $kuca->getName(); ?> </h3>
            </div>
            <div class="container flex py-4 ">
                <form action="" method="post" name="forma">
                    <label class="block" for="imja">Write something here: <?php echo rand(1,10); ?></label>
                    <input class="shadow border rounded mb-4" type="text" name="name" id="imja" onkeyup="changeh1">
                    <label for="age" class="block font-bold text-red-200">Please enter Dog's age</label>
                    <input type="number" class="shadow border rounded mb-4" name="age" id="age">
                    <label for="color" class="block font-bold text-red-200">Please enter your dog's color</label>
                    <select class="shadow border rounded mb-4 w-full py-2" name="color" id="color">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="white">White</option>
                    </select>
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