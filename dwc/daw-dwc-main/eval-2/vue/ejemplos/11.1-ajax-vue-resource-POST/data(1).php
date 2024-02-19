<?php
/* Inicializamos la sesión y le añadimos 'data' en caso que no lo tenga ya */
$contacto = new stdClass();

$contacto->nombre=$_POST['nombre'];
$contacto->telefono=$_POST['telefono'];
  
/* Si de los parámetros enviados encontramos 'nombre' añadimos el registro a la sesión */

/* Devolvemos el listado de datos de la sesión. */
echo json_encode($contacto);
?>