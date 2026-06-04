<?php
include_once __DIR__ . '/../src/function/selectCharacter.php';
include_once __DIR__ . '/../src/function/battle.php';

menuCharacter();
// Inicia a seleção e já recebe os dois jogadores configurados
list($player1, $player2) = menuCharacter();

fight();