<?php


require_once __DIR__ . '/../MODEL/Food.php';
require_once __DIR__ . '/../MODEL/Toy.php';
require_once __DIR__ . '/../MODEL/Products.php';


$db = [

    'foods' => [
        new Food('Scatoletta di Tonno', 6.00, 'Cibo', 'immagini/scatoletta-tonno.jpg', 'Tonno', '100g'),
        new Food('Scatoletta di Pollo', 6.00, 'Cibo', 'immagini/scatoletta-pollo.jpg', 'Pollo', '120g'),
        new Food('Crocchette per Cani', 19.99, 'Cibo', 'immagini/crocchette-cani.jpg', 'Manzo', '2kg'),
        new Food('Crocchette per Gatti', 18.50, 'Cibo', 'immagini/crocchette-gatti.jpg', 'Pollo', '1.5kg'),
        new Food('Snack per Cani', 5.50, 'Cibo', 'immagini/snack-cani.jpg', 'Filetto', '500g'),
        new Food('Latte per Gatti', 3.00, 'Cibo', 'immagini/latte-gatti.jpg', 'Gusto Misto', '250ml'),
        new Food('Biscotti per Cani', 4.00, 'Cibo', 'immagini/biscotti-cani.jpg', 'Pollo e Riso', '300g'),
        new Food('Cibo Umido per Gatti', 7.00, 'Cibo', 'immagini/cibo-umido-gatti.jpg', 'Tonno', '400g'),
    ],

    'toys' => [
        new Toy('Pallina di Gomma', 5.00, 'Gioco', 'immagini/pallina-gomma.jpg', 'Gomma', 'Medium'),
        new Toy('Corda di Cotone', 4.00, 'Gioco', 'immagini/corda-cotone.jpg', 'Cotone', 'Small'),
        new Toy('Topolino di Giocattolo', 3.50, 'Gioco', 'immagini/topolino-giocattolo.jpg', 'Pelliccia', 'Small'),
        new Toy('Palla per Gatti', 6.00, 'Gioco', 'immagini/palla-gatti.jpg', 'Plastica', 'Medium'),
        new Toy('Gioco Interattivo per Cani', 15.00, 'Gioco', 'immagini/gioco-interattivo-cani.jpg', 'Plastica', 'Large'),
        new Toy('Frisbee per Cani', 8.00, 'Gioco', 'immagini/frisbee-cani.jpg', 'Gomma', 'Large'),
        new Toy('Bastone da Masticare', 7.50, 'Gioco', 'immagini/bastone-masticare.jpg', 'Legno', 'Medium'),
    ]
];

