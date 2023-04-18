<?php
require_once __DIR__ . ('/Models/Product.php');
require_once __DIR__ . ('/Models/Acessorie.php');
require_once __DIR__ . ('/Models/Toy.php');
require_once __DIR__ . ('/Models/Food.php');
require_once __DIR__ . ('/Models/Animal.php');


$category_dog = new Animal('Dog', '<i class="fa-solid fa-dog"></i>');
$category_cat = new Animal('Cat', '<i class="fa-solid fa-cat"></i>');
$category_fish = new Animal('Fish', '<i class="fa-solid fa-fish"></i>');
$category_bird = new Animal('Bird', '<i class="fa-solid fa-dove"></i>');

$royal = new Food('Royal Canin', 43.99, $category_dog, '#', 545, 'prociutto, riso');
$almo = new Food('Almo Nature Holistic', 44.99, $category_dog, '#', 600, 'manzo, cereali');
$almocat = new Food('Almo Nature Cat', 34.99, $category_cat, '#', 400, 'tonno, pollo, prociutto');
$giuppy = new Food('Mangime per Pesci Giuppy', 2.94, $category_fish, '#', 30, 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');
$voliera = new Acessorie('Voliera Wilma in Legno', 184.89, $category_bird, '#', 'Legno', 'L 83 x P 67 x H 153 cm');
$cartucce = new Acessorie('Cartucce Filtranti', 2.29, $category_fish, '#', 'Materiale espanso');
$kong = new Toy('Kong Classic', 184.89, $category_dog, '#', 'Galleggia e rimbalza', '8,5 cm x 10 cm');
$mouse = new Toy('Topini di peluche Trixie', 184.89, $category_cat, '#', 'Morbido con cordino di corda', '8,5 cm x 10 cm');

var_dump($royal);

$products = [
    $royal,
    $almo,
    $almocat,
    $giuppy,
    $voliera,
    $cartucce,
    $kong,
    $mouse
]

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
        <?php foreach($products as $product) :?>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->get_name()?></h5>
                        <p class="card-text"></p>
                        <p class="card-text">Prezzo: <?php echo $product->get_price()?>€</p>
                        <p class="card-text"><?php echo $product->get_animal()->get_category()?></p>

                        <?php if (method_exists($product, 'get_weigth')) :?>
                        <p class="card-text">Peso netto: <?php echo $product->get_weigth();?>g</p>
                        <?php endif ?>
                        <?php if (method_exists($product, 'get_ingridient')) :?>
                        <p class="card-text">Ingredienti: <?php echo $product->get_ingridient();?></p>
                        <?php endif ?>
                        <?php if (method_exists($product, 'get_material')) :?>
                        <p class="card-text">Materiale: <?php echo $product->get_material();?></p>
                        <?php endif ?>
                        <?php if (method_exists($product, 'get_detail')) :?>
                        <p class="card-text">Caratteristiche: <?php echo $product->get_detail();?></p>
                        <?php endif ?>
                        <?php if (method_exists($product, 'get_dimension')) :?>
                        <p class="card-text">Dimensioni: <?php echo $product->get_dimension();?></p>
                        <?php endif ?>
                        
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        </div>
    </div>
</body>

</html>