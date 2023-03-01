<?php 

require __DIR__.'/Cat.php';

$bianca = new Cat('Bianca');
$bianca->fur = 'blanc';

$mina = new Cat('Mina', 'Siamois');
$mina->fur = 'noir';

var_dump($bianca);
var_dump($mina);


?>

<h1>Mon premier chat s'appelle <?= $bianca->name; ?></h1>