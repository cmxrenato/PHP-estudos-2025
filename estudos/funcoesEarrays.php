<?php
function somaNumeros($numeros) {
    $soma = 0;
    foreach ($numeros as $numero) {
        $soma += $numero;
    }
    return $soma;
}
function imprimirArray($array) {
    echo "\nArray: ";
    foreach ($array as $item) {
        echo $item . " ";
    }
}


$numeros = [1, 2, 3, 4, 5];
$resultado = somaNumeros($numeros);
echo "A soma dos números é: " . $resultado;
if(is_array($numeros)) {
    echo "\nA lista de números é válida.";
} 
echo "\n";
imprimirArray($numeros);
array_push($numeros, 6);
imprimirArray($numeros);
array_pop($numeros);
imprimirArray($numeros);
array_shift($numeros);
imprimirArray($numeros);
array_unshift($numeros, 1);
imprimirArray($numeros);


if (in_array(3, $numeros)) {
    echo "\nO número 3 está presente no array.";
} else {
    echo "\nO número 3 não está presente no array.";
}

$soma = array_reduce($numeros, fn($carry, $item) => $carry + $item, 0);
// Resultado: 6
echo "\nA soma dos números restantes é: " . $soma;

$soma2 = array_sum($numeros);
echo "\nA soma dos números restantes usando array_sum é: " . $soma2;
$produto = array_product($numeros);
echo "\nO produto dos números restantes é: " . $produto;
?>