<?php 
require_once __DIR__.('/Models/Product.php');
require_once __DIR__.('/Models/Acessorie.php');
require_once __DIR__.('/Models/Toy.php');
require_once __DIR__.('/Models/Food.php');

$royal = new Food('Royal Canin', 43.99, 'dog', 'url', 545, 'prociutto, riso');
$almo = new Food('Almo Nature Holistic', 44.99, 'dog', 'url', 600, 'manzo, cereali');
$almocat = new Food('Almo Nature Cat', 34.99, 'cat', 'url', 400, 'tonno, pollo, prociutto');
$giuppy = new Food('Mangime per Pesci Giuppy', 2.94, 'fish', 'url', 30, 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');
$voliera = new Acessorie('Voliera Wilma in Legno', 184.89, 'bird', 'url', 'Legno', 'L 83 x P 67 x H 153 cm');
$cartucce = new Acessorie('Cartucce Filtranti', 2.29, 'fish', 'url', 'Materiale espanso');
$voliera = new Acessorie('Voliera Wilma in Legno', 184.89, 'bird', 'url', 'Legno', 'L 83 x P 67 x H 153 cm');
$voliera = new Acessorie('Voliera Wilma in Legno', 184.89, 'bird', 'url', 'Legno', 'L 83 x P 67 x H 153 cm');

var_dump($royal);
var_dump($almo);
var_dump($almocat);
var_dump($giuppy);
var_dump($voliera);
var_dump($cartucce);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Shop</title>
</head>
<body>
    
</body>
</html>