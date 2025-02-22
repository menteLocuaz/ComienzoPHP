<?php

//mostrar el valor de las cookies es una variable super global

if (isset($_COOKIE["micookie"])) {
    echo '<h1>' . $_COOKIE["micookie"] . '</h1>';
} else {
    echo 'No hay cookie';
}

if (isset($_COOKIE["unyear"])) {
    echo '<h1>' . $_COOKIE["unyear"] . '</h1>';
} else {
    echo 'No hay cookie';
}

?>

<a href="borrar_cookies.php">Borrar cookies</a>