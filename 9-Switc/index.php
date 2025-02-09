<?php
$dia = 3;

switch ($dia) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    default:
        echo 'Fin de semana';
        break;
}

// GOTO , se salta la ejecucion
goto marca;
echo 'Fin de semana';
echo 'Fin de semana';
echo 'Fin de semana';
echo 'Fin de semana';
marca:
// hasta aqui para por la marca que ponemos
echo '<br/>';
echo 'He saltado instruciones';


?>