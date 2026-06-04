<?php
require_once __DIR__ . '/../../public/assets/show/berserkerShow.php';
require_once __DIR__ . '/../../public/assets/show/wizardShow.php';
require_once __DIR__ . '/../../public/assets/show/arrowShow.php';
require_once __DIR__ . '/../../public/assets/show/mainShow.php';
require_once __DIR__ . '/cleaner.php';
require_once __DIR__ . '/player.php';

function declarePlayer()
{
  clearScreen();
  echo "=== CADASTRO DOS JOGADORES ===\n\n";

  echo "Digite o nome do Player 1 (ou aperte ENTER para 'Player 1'): ";
  $name1 = trim(fgets(STDIN));
  if ($name1 === '') $name1 = "Player 1";

  echo "Digite o nome do Player 2 (ou aperte ENTER para 'Player 2'): ";
  $name2 = trim(fgets(STDIN));
  if ($name2 === '') $name2 = "Player 2";
  return [$name1, $name2];
}

function menuCharacter()
{
  list($name1, $name2) = declarePlayer();
  $classPlayer1 = loopSelection($name1);
  $classPlayer2 = loopSelection($name2);

  $player1 = new Player($name1, $classPlayer1);
  $player2 = new Player($name2, $classPlayer2);
  return [$player1, $player2];
}

function loopSelection($playerNameCurrent)
{
  $characterSelected = 1;
  while (true) {
    clearScreen();
    menuShow();

    echo "Vez de $playerNameCurrent escolher seu personagem!\n";
    if ($characterSelected == 1) {
      berserkerShow();
    } elseif ($characterSelected == 2) {
      wizardShow();
    } elseif ($characterSelected == 3) {
      arrowShow();
    }

    menuController();
    $comand = strtolower(trim(fgets(STDIN)));

    if ($comand === 'd') {
      $characterSelected = ($characterSelected == 3) ? 1 : $characterSelected + 1;
    } elseif ($comand === 'a') {
      $characterSelected = ($characterSelected == 1) ? 3 : $characterSelected - 1;
    } elseif ($comand === '') {
      return $characterSelected;
    }
  }
}
