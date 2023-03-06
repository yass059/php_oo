<?php 
require __DIR__.'/src/Character.php';
require __DIR__.'/src/Warrior.php';
require __DIR__.'/src/Hunter.php';
require __DIR__.'/src/Magus.php';

$aragorn = new Warrior('Aragorn');
$legolas = new Hunter('Legolas');
$gandalf = new Magus('Gandalf');

$aragorn->attack($legolas);
echo $legolas->getName() . " has " . $legolas->getHealth() . " health remaining." . PHP_EOL;

$legolas->rangedAttack($gandalf);
echo $gandalf->getName() . " has " . $gandalf->getHealth() . " health remaining." . PHP_EOL;

$gandalf->castSpell($aragorn);
echo $aragorn->getName() . " has " . $aragorn->getHealth() . " health remaining." . PHP_EOL;