<?php

// un array de 8 elementos
$mumbre = [11, 2, 41, 6, 13, 17, 7, 28];
// vamos a recorre el array
foreach ($mumbre as $numero) {
    echo '<br/>' . $numero;
}
echo '<hr/>';

// vamos a order el array
// con la funcion sort me ordena de mayor a menor
sort($mumbre);
foreach ($mumbre as $numero) {
    echo '<br/>' . $numero;
}
// mostraremos su longitud 
// con la funcion var_dump la cumplismos
echo '<br/>';
var_dump($mumbre);
// con count me muestra solo el numero y no muestra mas valores como hace var_dump
echo '<br/>';
echo count($mumbre);
// Buscar un elemento en el array 
// donde empy es vacio y toca decir si no es vacio 
$valor =11;
$busqueda = array_search($valor, $mumbre);
//
if (!empty($busqueda)) {
    echo '<h4>El numero existe en el array : ' . $busqueda . '</h4>';
} else {
    echo '<h4>El numero NO existe en el array :' . $busqueda . '</h4>';
}
