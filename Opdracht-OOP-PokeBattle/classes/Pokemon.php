<?php

class Pokemon {

	public $name = '';
	public $energyType = '';
	public $hitpoints = 0;
    public $attacks;           // [{'name', damage}]
	public $weakness;          // {'energyType', multiplier}
	public $resistance;        // {'energyType', value}
	
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
	public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    /**
     * Perform an attack.
     *
     * @param  string  $enemy
     * @param  int  $attack
     */
    public function attack($enemy, $attack)
    {
        $damage = $attack->damage;

        if($this->energyType == $enemy->weakness->energyType) {
            $damage = $damage * $enemy->weakness->multiplier;
        }

        if($this->energyType == $enemy->resistance->energyType) {
            $damage -= $enemy->resistance->value;
        }

        print('<pre>' . $this->name . ' dealt ' . $damage . ' damage to ' . $enemy->name . '.</pre>');

        return $damage;
    }

    /**
     * Print health.
     *
     */
    public function takeDamage($damage)
    {
        $this->health -= $damage;
    }

    /**
     * Print health.
     *
     */
    public function printHealth()
    {
        print('<pre>' . $this->name . ' HP: ' . $this->health . '.</pre>');
    }

}
