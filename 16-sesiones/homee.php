<?php

// es la persitencia de datos en tracurso de tiempo 
// almacena y presite los datos del usuario en el sitio web hasta que cierre 

// iniciamos la sesion 

$variable_normal = 'soy una cadena de texto';

// varalble de session
$_SESSION['variable_persitente'] = 'Estoy una sesion activa';

echo '<h1>' . $variable_normal . '</h1>';
echo '<h1>' . $_SESSION['variable_persitente'] . '</h1>';
