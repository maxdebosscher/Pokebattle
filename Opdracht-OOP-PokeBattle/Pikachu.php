<?php

class Pikachu extends Pokemon {

/**
     * Construct a pokemon.
     *
     * @param  string  $name
     * @param  string  $energyType
     * @param  int  $hitpoints
     * @param  array  $attacks
     * @param  array  $weakness
     * @param  array  $resistance
     */
	public function __construct($name)
    {
        $this->name = $name;
        $this->energyType = 'Lightning';
        $this->health = 60;
        $this->attacks = [['Electric Ring', 50], ['Pika Punch', 20]];
        $this->weakness = ['Fire', 1.5];
        $this->resistance = ['Fighting', 20];
    }

}