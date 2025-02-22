<?php

// borra cookie
if ($_COOKIE["micookie"]) {
    unset($_COOKIE["micookie"]);
    // caducar la cookies
    setcookie("micookie", "", time() - 100);
}

// vamos a redirigir al borrar la cookies
header('location:vegalletas.php');