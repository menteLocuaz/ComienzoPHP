<?php
// contate
// Es un contenedor de informacion que no puede variar
define('nombre','Oscar');
define('Web','mi pagian');

// solo con el nombre sin signo de dolar llama la constante 
echo '<h1>'.nombre.'</h1>';
echo '<hr/>';
echo '<h2>'.Web.'</h2>';
// variable
$web = 'pagina de pruena ';
echo '----------'.$web;

// constante predefinidas
echo '<br/>';
echo PHP_OS;
echo '<br/>';
echo PHP_VERSION;
echo '<br/>';
echo PHP_EXTENSION_DIR;
echo '<br/>';
echo __FILE__;

?>