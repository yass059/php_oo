<?php 


class Character {
    protected $name;
    protected $health = 100;
    protected $strength = 10;
    protected $mana = 10;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getStrength() {
        return $this->strength;
    }

    public function getMana() {
        return $this->mana;
    }

    public function setHealth($health) {
        $this->health = $health;
    }

    public function setMana($mana) {
        $this->mana = $mana;
    }

    public function attack($character) {
        $damage = $this->strength * 2;
        $character->takeDamage($damage);
    }

    public function takeDamage($damage) {
        $this->health -= $damage;
    }
}