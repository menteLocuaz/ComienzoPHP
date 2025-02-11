<?php
// imprime de 1 al 100
// muestra los numero pares

for ($numero=1; $numero <= 100; $numero++) {
    if ($numero % 2 == 0 ) {
        echo '<p> numero par es : ' . $numero . '</p>';
    }
}
