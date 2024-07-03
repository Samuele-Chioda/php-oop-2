<?php
require_once __DIR__ . '/classes/categorie.php';
require_once __DIR__ . '/classes/prodotti.php';
require_once __DIR__ . '/classes/cibo.php';
require_once __DIR__ . '/classes/giochi.php';
require_once __DIR__ . '/classes/accessori.php';

$cane = new Categorie('cane');
$gatto = new Categorie('gatto');
$uccelli = new Categorie('uccelli'); 
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
    <title>php-oop-2</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="product-cards">
        <?php foreach ($prodotti as $prodotto) : ?>
            <div class="product-card">
                <img src="img/ <?php echo $prodotto->titolo; ?>.jpg" alt="<?php echo $prodotto->titolo; ?>">
                <h2>
                    <?php echo $prodotto->titolo; ?>
                </h2>
                <p>
                    Prezzo: €<?php echo number_format($prodotto->prezzo); ?>
                </p>
                <p>
                    Categoria: <?php echo $prodotto->categoria->nome; ?>
                </p>
                <p>
                    Tipo: <?php echo $prodotto->tipo; ?>
                </p>
                <p>
                    Codice Prodotto: <?php echo $prodotto->getDettagli()['codice']; ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>