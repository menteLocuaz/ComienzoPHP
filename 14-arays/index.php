<?php

// es uina caja que puede almacenar mucah variables y se puede acceder 
// es una colecion o cujunto de datos
// para hacer podemos usar un indice

$peliculas = array('batman', 'spderman', 'Dead pool', 'superman');
// Esta es otra forma de definir un array 
$cantantes = ['Aretha Franklin', 'Whitney Houston', 'Sam Cooke', 'Billie Holiday', 'Mariah Carey'];

// como hacedo a estos datos para que me muestr su dato
var_dump($peliculas);
echo '<br/>';
// con la funcion var_dump podemon ver lo que lleva dentro y su lontitud y indice
// donde el indice es la posicion de la variable
// donde var_dump me muestra la longitud del datos del indice mostrado
var_dump($peliculas[0]);
echo '<br/>';
// vamos imprimir un cantaten y mostra en la pantalla
echo $cantantes[2];
echo '<br/>';

// como mostrar un listado dev un array 
// una forma es con el bucle for
// la funcion count ,sirve para contar la longitud del array
for ($i = 0; $i < count($peliculas); $i++) {
    echo '<h2>' . $peliculas[$i] . '</h2><br/>';
}
// otro bucle para recorre el arreglo es foreach
echo '<ul>';
foreach ($cantantes as $person) {
    echo '<li>' . $person . '</li>';
}
echo '</ul>';
