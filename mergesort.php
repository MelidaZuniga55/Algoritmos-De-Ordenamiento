<?php
// 2. Problema de Ordenar Lista con Merge Sort:
//Implementa una función que ordene una lista de palabras alfabéticamente utilizando el algoritmo Merge Sort. 
//Muestra la lista antes y después de aplicar el algoritmo.

// Lista inicial de palabras
$palabras = ["piña", "mango", "uva", "fresa", "naranja", "kiwi", "arandanos"];

echo "Lista original: ";
print_r($palabras);

// Función Merge Sort
function mergeSort($array) {
    if (count($array) <= 1) {
        return $array; 
    }

    $medio = intdiv(count($array), 2);
    $izquierda = array_slice($array, 0, $medio);
    $derecha = array_slice($array, $medio);

    // Ordenar recursivamente cada mitad
    $izquierda = mergeSort($izquierda);
    $derecha = mergeSort($derecha);

    // Combinar ambas mitades ordenadas
    return merge($izquierda, $derecha);
}

// Función para mezclar dos listas ordenadas
function merge($izquierda, $derecha) {
    $resultado = [];

    while (count($izquierda) > 0 && count($derecha) > 0) {
        if ($izquierda[0] <= $derecha[0]) {
            $resultado[] = array_shift($izquierda); // Quitamos el primer elemento de izquierda
        } else {
            $resultado[] = array_shift($derecha); // Quitamos el primer elemento de derecha
        }
    }

    // Agregar lo que quede de una de las listas
    return array_merge($resultado, $izquierda, $derecha);
}

$palabras = mergeSort($palabras);

echo "Lista ordenada (alfabéticamente): ";
print_r($palabras);
?>
