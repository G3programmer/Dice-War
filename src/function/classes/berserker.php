<?php
class Berserker extends character
{
    public function __construct()
    {
        parent::__construct(
            "Berserker", //classe
            "Um guerreiro selvagem criado nas terras gelidas da Noruega, 
            vítima de um ataque bárbaro de outra tribo. Ele busca vingança e dete-lo pode-lhe custar a vida", //descrição
            "Fúria Berserker: Aumenta o ataque em 50%, mas reduz a defesa em 25% durante 3 turnos.", //habilidade
            270, //vida
            75, //ataque
            25, //defesa
            40  //mana
        );
    }

   public function specialSkill(character $opponent) {
        // Regra do PDF: Se não tiver mana suficiente, o sistema deve impedir
        if ($this->mana < 20) {
            throw new Exception("Mana insuficiente para usar Fúria Incontrolável!");
        }
        
        echo "{$this->class} ativou {$this->skill}!\n";
        // Lógica da habilidade: Dá muito dano mas consome mana
        $dano = $this->attack * 1.5;
        $opponent->hp -= $dano;
        $this->mana -= 20;
    }
}