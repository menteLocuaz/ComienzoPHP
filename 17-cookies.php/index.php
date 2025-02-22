<?php

// sirve para almacernar informacion del usuario 
// para poder recordar datos y rastrear el comportamiento 

// crear cookie
// setcookie('nombre','valor solo en texto',caducudad ,ruta,dominio);

setcookie("micookie", "valor de mi galleta");
// cookie con expiracion
// con la funcion time establecemos la durac"ion de un year
setcookie("unyear", "establecemos el timepo", time() + (60 * 60 * 24 * 356));

?>

<a href="vegalletas.php">Ver mis galletas</a>