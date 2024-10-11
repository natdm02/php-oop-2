<?php


require_once __DIR__ . '/../MODELS/Food.php';
require_once __DIR__ . '/../MODELS/Toy.php';
require_once __DIR__ . '/../MODELS/Products.php';


$db = [

    'foods' => [
        new Food('Scatoletta di Tonno', 6.00, 'Cibo', 'ASSETS/IMG/scatoletta-tonno.jpg', 'Tonno', '100g', 'Gatti'), 
        new Food('Scatoletta di Pollo', 6.00, 'Cibo', 'ASSETS/IMG/scatoletta-pollo.jpg', 'Pollo', '120g', 'Cani'),  
        new Food('Crocchette per Cani', 19.99, 'Cibo', 'ASSETS/IMG/crocchette-cani.jpg', 'Manzo', '2kg', 'Cani'),
        new Food('Crocchette per Gatti', 18.50, 'Cibo', 'ASSETS/IMG/crocchette-gatti.webp', 'Pollo', '1.5kg', 'Gatti'),
        new Food('Snack per Cani', 5.50, 'Cibo', 'ASSETS/IMG/snack-cani.jpg', 'Filetto', '500g', 'Cani'),
        new Food('Latte per Gatti', 3.00, 'Cibo', 'ASSETS/IMG/latte-gatti.jpg', 'Gusto Misto', '250ml', 'Gatti'),
        new Food('Biscotti per Cani', 4.00, 'Cibo', 'ASSETS/IMG/biscotti-cani.jpg', 'Pollo e Riso', '300g', 'Cani'),
        new Food('Cibo Umido per Gatti', 7.00, 'Cibo', 'ASSETS/IMG/cibo-umido-gatti.webp', 'Tonno', '400g', 'Gatti'),
    ],

    'toys' => [
        new Toy('Pallina di Gomma', 5.00, 'Gioco', 'ASSETS/IMG/pallina-gomma.jpg', 'Gomma', 'Medium', 'Cani'),  
        new Toy('Corda di Cotone', 4.00, 'Gioco', 'ASSETS/IMG/corda-cotone.jpg', 'Cotone', 'Small', 'Cani'),
        new Toy('Topolino di Giocattolo', 3.50, 'Gioco', 'ASSETS/IMG/topolino-giocattolo.jpg', 'Pelliccia', 'Small', 'Gatti'), 
        new Toy('Palla per Gatti', 6.00, 'Gioco', 'ASSETS/IMG/palla-gatti.jpg', 'Plastica', 'Medium', 'Gatti'),
        new Toy('Gioco Interattivo per Cani', 15.00, 'Gioco', 'ASSETS/IMG/gioco-interattivo-cani.jpg', 'Plastica', 'Large', 'Cani'),
        new Toy('Frisbee per Cani', 8.00, 'Gioco', 'ASSETS/IMG/frisbee-cani.jpg', 'Gomma', 'Large', 'Cani'),
        new Toy('Bastone da Masticare', 7.50, 'Gioco', 'ASSETS/IMG/bastone-masticare.jpg', 'Legno', 'Medium', 'Cani'),
    ]
];

