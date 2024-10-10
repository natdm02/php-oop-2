<?php

require_once __DIR__ . '/ASSETS/DATA/db.php';
require_once __DIR__ . '/ASSETS/MODEL/Food.php';
require_once __DIR__ . '/ASSETS/MODEL/Toy.php';
require_once __DIR__ . '/ASSETS/MODEL/Products.php';

// $food = new Food("crocchette per cani", 19.99, "cibo", "immagini/crocchette-cani.jpg", "manzo", 2.5);


// $product = new Products("prodotto generico", 15.00, "generico", "immagini/prodotto-generico.jpg");



// var_dump($food);


// var_dump($product);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>php-oop-2</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--css-->
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <div class="container my-5 text-center">

        <h1><strong>pet shop</strong></h1>

    </div>

    <div class="container my-5">

        <h2> gatti </h2>

        <div class="container my-4">

            <div class="row row-cols-3">

                <div class="col">

                    <div class="card" style="width: 18rem;">

                        <img src="..." class="card-img-top" alt="...">

                        <div class="card-body">

                            <p class="card-text"></p>
                            <p class="card-text"></p>
                            <p class="card-text"></p>
                            <p class="card-text"></p>
                            <p class="card-text"></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="container my-5">

        <h2> cani </h2>

        <div class="container my-4">

            <div class="row row-cols-3">

                <div class="col">

                    <div class="card" style="width: 18rem;">

                        <img src="..." class="card-img-top" alt="...">

                        <div class="card-body">

                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium cum sit dicta amet eius minima quisquam, repellat veniam enim molestiae blanditiis, tempora assumenda odit recusandae? Nisi ex iure corporis laboriosam.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>