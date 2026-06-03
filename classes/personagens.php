<?php
class Personagens
{
    //Atributos listados aqui:
    public string $classe;
    public string $descricao;
    public string $habilidade_especial;
    public int $vida;
    public int $vidaMax;
    public int $ataque;
    public int $defesa;
    public int $mana;
    public int $manaMax;
    public int $buffer;
    public int $nerf;
 
    public function __construct(
        string $classe, 
        string $descricao, 
        string $habilidade_especial, 
        int $vida, 
        int $defesa, 
        int $mana
    ) {
        $this->classe = $classe;
        $this->descricao = $descricao;
        $this->habilidade_especial = $habilidade_especial;
        $this->vida = $vida;
        $this->vida_maxima = $vida; // A vida máxima nasce igual à vida inicial
        $this->defesa = $defesa;
        $this->mana = $mana;
    }
}

?>