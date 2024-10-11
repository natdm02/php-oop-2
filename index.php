<?php

require_once __DIR__ . '/SRC/DATABASE/db.php'





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
    <link rel="stylesheet" href="./ASSETS/CSS/style.css">

</head>

<body>

    <div class="container my-5 text-center">

        <h1><strong>PET SHOP</strong></h1>

    </div>

    <!-- sezione food -->

    <div class="container my-5">

        <h2>FOOD</h2>


        <div class="container my-4">

            <div class="row row-cols-3">

                <?php foreach ($db['foods'] as $food) { ?>

                <div class="col mb-4">

                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $food->getImage(); ?>" class="card-img-top" alt="<?php echo $food->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $food->getName(); ?></h5>
                            <p class="card-text">Prezzo: <?php echo $food->getPrice(); ?>€</p>
                            <p class="card-text">Tipo: <?php echo $food->getTaste(); ?></p>
                            <p class="card-text">Peso: <?php echo $food->getWeight(); ?></p>
                        </div>

                    </div>

                </div>

                <?php } ?>

            </div>

        </div>

    </div>

    <!-- sezione giochi -->

    <div class="container my-5">

        <h2>TOY</h2>

        <div class="container my-4">

            <div class="row row-cols-3">

                <?php foreach ($db['toys'] as $toy) { ?>

                <div class="col mb-4">

                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $toy->getImage(); ?>" class="card-img-top" alt="<?php echo $toy->getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $toy->getName(); ?></h5>
                            <p class="card-text">Prezzo: <?php echo $toy->getPrice(); ?>€</p>
                            <p class="card-text">Tipo: <?php echo $toy->getMaterial(); ?></p>
                            <p class="card-text">Dimensione: <?php echo $toy->getSize(); ?></p>
                        </div>
                    </div>

                </div>

                <?php } ?>

            </div>

        </div>

    </div>

    <!-- Sezione Pagamento -->
    <div class="container my-5 text-center">
        <h2>Effettua il Pagamento</h2>

        
    </div>


</body>
</html>