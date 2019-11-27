<?php

class Charmeleon extends Pokemon {

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
        $this->energyType = 'Fire';
        $this->health = 60;
        $this->attacks = [['Head Butt', 10], ['Flare', 30]];
        $this->weakness = ['Water', 2];
        $this->resistance = ['Lightning', 10];
    }

}