<?php
require_once __DIR__ . ('/Models/Product.php');
require_once __DIR__ . ('/Models/Acessorie.php');
require_once __DIR__ . ('/Models/Toy.php');
require_once __DIR__ . ('/Models/Food.php');
require_once __DIR__ . ('/Models/Animal.php');


$category_dog = new Animal('Dog', '<i class="fa-solid fa-dog"></i>');
$category_cat = new Animal('Dog', '<i class="fa-solid fa-cat"></i>');
$category_fish = new Animal('Dog', '<i class="fa-solid fa-dove"></i>');
$category_bird = new Animal('Dog', '<i class="fa-solid fa-fish"></i>');

$royal = new Food('Royal Canin', 43.99, $category_dog, 'url', 545, 'prociutto, riso');
$almo = new Food('Almo Nature Holistic', 44.99, $category_dog, 'url', 600, 'manzo, cereali');
$almocat = new Food('Almo Nature Cat', 34.99, $category_cat, 'url', 400, 'tonno, pollo, prociutto');
$giuppy = new Food('Mangime per Pesci Giuppy', 2.94, $category_fish, 'url', 30, 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');
$voliera = new Acessorie('Voliera Wilma in Legno', 184.89, $category_bird, 'url', 'Legno', 'L 83 x P 67 x H 153 cm');
$cartucce = new Acessorie('Cartucce Filtranti', 2.29, $category_fish, 'url', 'Materiale espanso');
$voliera = new Acessorie('Voliera Wilma in Legno', 184.89, $category_bird, 'url', 'Legno', 'L 83 x P 67 x H 153 cm');
$voliera = new Acessorie('Voliera Wilma in Legno', 184.89, $category_bird, 'url', 'Legno', 'L 83 x P 67 x H 153 cm');

var_dump($royal, $almo, $almocat);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1>Pets Shop</h1>
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">1</p>
                        <p class="card-text">1</p>
                        <p class="card-text">1</p>
                        <p class="card-text">1</p>
                        <p class="card-text">1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>