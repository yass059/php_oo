<?php 

require __DIR__.'/Cat.php';

$bianca = new Cat('Bianca');

$bianca->setFur('blanc');
// $bianca->fur = 'blanc';

$mina = new Cat('Mina', 'Siamois');

$mina->setFur('noir')->chipWithDoctor();


var_dump($bianca);
var_dump($mina);


?>

<h1>Mon premier chat s'appelle <?= $bianca->name; ?></h1>
<p>Il peut faire <?= $bianca->cry();?></p>
<p>L'autre chat <?= $mina->name?> peut aussi faire <?= $mina->cry();?></p>

<p>Etat de Mina: <?= $mina->chippedInformation(); ?></p>
<p>Couleur de Mina est <?= $mina->getFur(); ?></p>
<p><?= $bianca->playWith($mina); ?></p>
<p><?= $mina->playWith($bianca); ?></p>


<?php 
    require __DIR__.'/Car.php'; 
    $car1 = new Car('BMW');
    $car1->setColor('Black');

    $car2 = new Car ('LAND-ROVER', 'HSE');
    $car2->setColor('Blue')->withColor();

    var_dump($car1);
    var_dump($car2);
?>

<h1>Ma première voiture est de marque : <?= $car1->mark; ?></h1>
<p>Elle peut faire <?= $car1->klaxon();?></p>

<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>
<h2>La jauge d'essence est maintenant à <?= $car1->rouler(); ?> litres.</h2>




