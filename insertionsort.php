<?php
// Problema de Ordenar Lista con Insertion Sort:
// Crea un script que ordene una lista de nombres en orden alfabético utilizando el algoritmo Insertion Sort. 
// Muestra la lista antes y después de aplicar el algoritmo.

// Lista de nombres
$nombres = ["Carlos", "Ana", "Pedro", "Lucía", "Javier"];

echo "Lista original: ";
print_r($nombres);

// Función Insertion Sort
function insertionSort(&$array) {
    $n = count($array);

    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i]; // Elemento que vamos a insertar en la parte ordenada
        $j = $i - 1;

        // Mover elementos mayores a la derecha
        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j--;
        }

        // Insertar el elemento en su posición correcta
        $array[$j + 1] = $key;
    }
}

insertionSort($nombres);

echo "Lista ordenada (alfabéticamente): ";
print_r($nombres);
?>
