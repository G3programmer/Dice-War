<?php
abstract class character
{
    //Atributos listados aqui:
    public string $class;
    public string $description;
    public string $skill;
    public int $hp;
    public int $hpMax;
    public int $attack;
    public int $defense;
    public int $mana;
    public int $manaMax;
    public int $buffer;
    public int $nerf;

    public function __construct(
        string $class,
        string $description,
        string $skill,
        int $hp,
        int $attack,
        int $defense,
        int $mana
    ) {
        $this->class = $class;
        $this->description = $description;
        $this->skill = $skill;
        $this->hp = $hp;
        $this->hpMax = $hp; // A hp máxima nasce igual à hp inicial
        $this->attack = $attack;
        $this->defense = $defense;
        $this->mana = $mana;
        $this->manaMax = $mana; // A mana máxima nasce igual à mana inicial
        $this->buffer = 0; // Inicializa o buffer como 0
        $this->nerf = 0; // Inicializa o nerf como 0
    }
    abstract public function specialSkill(character $opponent);
}
