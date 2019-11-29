<?php

class Pikachu extends Pokemon {

    public $energyType = 'Lightning';
    public $hitpoints = 60;
    public $attack_1;
    public $attack_2;
    public $weakness;
    public $resistance;

    //public $attacks = [['Electric Ring', 50], ['Pika Punch', 20]];
    //public $weakness = ['Fire', 1.5];
    //public $resistance = ['Fighting', 20];

    //public $attacks = [new Attack('Electric Ring', 50), new Attack('Pika Punch', 20)];
    //public $weakness = new Weakness('Fire', 1.5);
    //public $resistance = new Resistance('Fighting', 20);

    /**
     * Construct a pokemon.
     *
     * @param  string  $name
     */
	public function __construct($name, $attack_1, $attack_2, $weakness, $resistance)
    {
        parent::__construct($name, $this->energyType, $this->hitpoints, $attack_1, $attack_2, $weakness, $resistance);
    }
    
}
