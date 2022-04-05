<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero) {
    $soma = 0;
    for($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(150) . '<br>';

function somaRecurvivaUmAte($numero) {
    // Condição de Parada!!!!
    if($numero === 1) return 1;
    return $numero + somaRecurvivaUmAte($numero - 1);
}

echo somaRecurvivaUmAte(150) . '<br>';

function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : 
    $numero + somaResomaRecursivaEconomica($numero - 1);
}

echo somaRecurvivaUmAte(150) . '<br>';