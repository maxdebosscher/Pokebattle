<?php

require_once 'init.php';

// Construct pokemon
$pikachu = new Pikachu(
	'Pikachu',
	new Attack('Electric Ring', 50),
	new Attack('Pika Punch', 20),
	new Weakness('Fire', 1.5),
	new Resistance('Fighting', 20)
);

$charmeleon = new Charmeleon(
	'Charmeleon',
	new Attack('Head Butt', 10),
	new Attack('Flare', 30),
	new Weakness('Water', 2),
	new Resistance('Lightning', 10)
);

// Perform actions
print('<h1>OOP PokeBattle</h1>');

$charmeleon->printHealth();
$pikachu->attack($charmeleon, $pikachu->attack_1);
$charmeleon->printHealth();

print('<br>');

$pikachu->printHealth();
$charmeleon->attack($pikachu, $charmeleon->attack_2);
$pikachu->printHealth();
