<?php

/**
 * 1) Crie um array
 */
$array = [];

/**
 * 2) Popule este array com 7 números
 */
$array = [1,2,3,4,5,6,7];

/**
 * 3) Imprima o número da posição 3 do array
 */
echo "Terceira posição: $array[2]";
echo "</br>-------</br>";

/**
 * 4) Crie uma variável com todas as posições do array no 
 * formato de string separado por vírgula
 */
$arrayToString = implode(",", $array);

/**
 * 5) Crie um novo array a partir da variável no formato de
 *  string que foi criada e destrua o array anterior
 */
$stringToArray = explode(",", $arrayToString);
unset($arrayToString);

/**
 * 6) Crie uma condição para verificar se existe o valor 14 no array
 */
$hasFourteen = false;
if (in_array(14, $stringToArray)) {
    $hasFourteen = true;
}

/**
 * 7) Faça uma busca em cada posição. Se o número da posição atual for
 * menor que o da posição anterior (valor anterior que não foi excluído do array ainda),
 * exclua esta posição
 */
foreach ($stringToArray as $key => $value) {
    if (isset($stringToArray[$key-1]) && $value < $stringToArray[$key-1]) {
        unset($stringToArray[$key]);
    }
    $stringToArray = array_values($stringToArray);
}

/**
 * 8) Remova a última posição deste array
 */
unset($stringToArray[array_key_last($stringToArray)]);

/**
 * 9) Conte quantos elementos tem neste array
 */
count($stringToArray);

/**
 * 10) Inverta as posições deste array
 */
$inverseArray = array_reverse($stringToArray);

?>