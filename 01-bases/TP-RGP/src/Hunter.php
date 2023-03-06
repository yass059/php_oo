<?php 

class Hunter extends Character {
    
    public function rangedAttack($character) {
        if ($character instanceof Hunter) {
            $damage = $this->strength * 3;
            $character->takeDamage($damage);
        }
    }
}