<?php
// Só cria a função se nenhuma outra com o mesmo nome existir na memória
if (!function_exists('limparTela')) {
    function limparTela() {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            popen('cls', 'w');
        } else {
            popen('clear', 'w');
        }
    }
}
?>