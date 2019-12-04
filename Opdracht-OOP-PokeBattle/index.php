<?php

require_once 'init.php';

// Construct pokemon
$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

// Perform actions
print('<h1>OOP PokeBattle</h1>');

$charmeleon->printHealth();
$damage = $pikachu->attack($charmeleon, $pikachu->attacks[0]);
$charmeleon->takeDamage($damage);
$charmeleon->printHealth();

print('<br>');

$pikachu->printHealth();
$damage = $charmeleon->attack($pikachu, $charmeleon->attacks[1]);
$pikachu->takeDamage($damage);
$pikachu->printHealth();
