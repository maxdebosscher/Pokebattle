<?php

class Charmeleon extends Pokemon {

    public $energyType = 'Fire';
    public $hitpoints = 60;
    public $attack_1;
    public $attack_2;
    public $weakness;
    public $resistance;

    //public $attack = [['Head Butt', 10], ['Flare', 30]];
    //public $weakness = ['Water', 2];
    //public $resistance = ['Lightning', 10];
    
    //public $attacks = [new Attack('Head Butt', 10), new Attack('Flare', 30)];
    //public $weakness = new Weakness('Water', 2);
    //public $resistance = new Resistance('Lightning', 10);

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
