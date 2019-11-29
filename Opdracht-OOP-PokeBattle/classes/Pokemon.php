<?php

class Pokemon {

	public $name = '';
	public $energyType = '';
	public $hitpoints = 0;
	public $attack_1;          // {'name', damage}
    public $attack_2;          // {'name', damage}
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
	public function __construct($name, $energyType, $hitpoints, $attack_1, $attack_2, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attack_1 = $attack_1;
        $this->attack_2 = $attack_2;
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

        $enemy->health -= $damage;
        print('<pre> ' . $this->name . ' dealt ' . $damage . ' damage to ' . $enemy->name . '</pre>');
    }

    /**
     * Print health.
     *
     * @param  string  $enemy
     * @param  int  $attack
     */
    public function printHealth()
    {
        print('<pre> ' . $this->name . ' HP: ' . $this->health . '</pre>');
    }

}
