<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles.css">
    <title>Document</title>
</head>
<body class="text-gray-600">
    <div>
        <div>
            <nav>
                <div>
                    <h1 class="font-bold uppercase p-4 border-b border-gray-100">
                        <a href="/">Food Ninja</a>
                    </h1>
                </div>
                <ul>
                    <li class="text-gray-900">
                        <a href="#">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>About <?php echo 2+2; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="font-serif">Contact</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <main class="px-16 py-6">
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