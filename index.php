<?php

require_once __DIR__ . '/ASSETS/DATA/db.php';
require_once __DIR__ . '/ASSETS/MODEL/Food.php';
require_once __DIR__ . '/ASSETS/MODEL/Toy.php';
require_once __DIR__ . '/ASSETS/MODEL/Products.php';


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

        <h1><strong>PET SHOP</strong></h1>

    </div>

    <div class="container my-5">

        <h2>FOOD</h2>

        <div class="container my-4">
            <div class="row row-cols-3">

                
                <div class="col mb-4">

                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $db['foods'][0]->getImage(); ?>" class="card-img-top" alt="<?php echo $db['foods'][0]->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $db['foods'][0]->getName(); ?></h5>
                            <p class="card-text">Prezzo: <?php echo $db['foods'][0]->getPrice(); ?>€</p>
                            <p class="card-text">Tipo: <?php echo $db['foods'][0]->getTaste(); ?></p>
                            <p class="card-text">Peso: <?php echo $db['foods'][0]->getWeight(); ?></p>
                        </div>
                    </div>

                </div>

                <div class="col mb-4">

                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $db['foods'][1]->getImage(); ?>" class="card-img-top" alt="<?php echo $db['foods'][1]->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $db['foods'][1]->getName(); ?></h5>
                            <p class="card-text">Prezzo: <?php echo $db['foods'][1]->getPrice(); ?>€</p>
                            <p class="card-text">Tipo: <?php echo $db['foods'][1]->getTaste(); ?></p>
                            <p class="card-text">Peso: <?php echo $db['foods'][1]->getWeight(); ?></p>
                        </div>
                    </div>

                </div>

                

            </div>

        </div>

    </div>

    <div class="container my-5">

        <h2>TOY</h2>

        <div class="container my-4">
            <div class="row row-cols-3">

                
                <div class="col mb-4">

                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $db['toys'][0]->getImage(); ?>" class="card-img-top" alt="<?php echo $db['toys'][0]->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $db['toys'][0]->getName(); ?></h5>
                            <p class="card-text">Prezzo: <?php echo $db['toys'][0]->getPrice(); ?>€</p>
                            <p class="card-text">Tipo: <?php echo $db['toys'][0]->getMaterial(); ?></p>
                            <p class="card-text">Peso: <?php echo $db['toys'][0]->getSize(); ?></p>
                        </div>
                    </div>

                </div>

                <div class="col mb-4">

                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $db['toys'][1]->getImage(); ?>" class="card-img-top" alt="<?php echo $db['toys'][1]->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $db['toys'][1]->getName(); ?></h5>
                            <p class="card-text">Prezzo: <?php echo $db['toys'][1]->getPrice(); ?>€</p>
                            <p class="card-text">Tipo: <?php echo $db['toys'][1]->getMaterial(); ?></p>
                            <p class="card-text">Peso: <?php echo $db['toys'][1]->getSize(); ?></p>
                        </div>
                    </div>

                </div>

                

            </div>

        </div>

    </div>

</body>
</html>