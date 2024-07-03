<?php
require_once __DIR__ . '/classes/categorie.php';
require_once __DIR__ . '/classes/prodotti.php';
require_once __DIR__ . '/classes/cibo.php';
require_once __DIR__ . '/classes/giochi.php';
require_once __DIR__ . '/classes/accessori.php';

$cane = new Categorie('cane');
$gatto = new Categorie('gatto');
$uccello = new Categorie('uccello');
$pesci = new Categorie('pesci');
$prodotti = [
    new Cibo('Royal Canin Mini Adult', 15.99, $cane, 'RCMA01'),
    new Cibo('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 24.99, $cane, 'ANHM02'),
    new Cibo('Almo Nature Cat Daily Lattina', 2.99, $gatto, 'ANCD03'),
    new Cibo('Mangime per Pesci Guppy in Fiocchi', 3.49, $pesci, 'GFF04'),
    new Accessori('Voliera Wilma in Legno', 120.00, $uccelli, 'VWL05'),
    new Accessori('Cartucce Filtranti per Filtro EasyCrystal', 4.99, $pesci, 'ECF06'),
    new Giochi('Kong Classic', 9.99, $cane, 'KC07'),
    new Giochi('Topini di peluche Trixie', 4.99, $gatto, 'TMT08')
];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-oop-2</title>
</head>
<body>
    
</body>
</html>