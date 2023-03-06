<?php 

class Magus extends Character {
    protected $mana = 20;

    public function castSpell($character) {
        if ($this->mana >= 3) {
            $damage = $this->mana * 3;
            $character->takeDamage($damage);
            $this->mana -= 3;
        }
    }
}