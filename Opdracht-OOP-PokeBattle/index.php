<?php

// Dependencies
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

// Construct pokemon
$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

// Perform actions
print('<h1>OOP PokeBattle</h1>');

$charmeleon->printHealth();
$pikachu->attack($charmeleon, 0);
$charmeleon->printHealth();

print('<br>');

$pikachu->printHealth();
$charmeleon->attack($pikachu, 1);
$pikachu->printHealth();
