<?php
include_once 'comprobarsesion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (empty($_REQUEST['nombre']) || !isset($_REQUEST['posicion']) || empty($_FILES['foto']['name']) || !isset($_REQUEST['equipo'])) {
    $_SESSION['error'] = 'Mal .- Introduce todos los campos';
    header('Location: jugadores.php');
  } else {
    $directorio = './imagenes/';
    $archivo = $_FILES['foto'];

    $imageFileType = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));

    $esImagen = getimagesize($archivo['tmp_name']);
    if (!$esImagen) {
      $_SESSION['error'] = 'El archivo no es una imagen';
      header('Location: jugadores.php');
    } else if (!in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
      $_SESSION['error'] = 'El archivo tiene que ser de tipo JPG, JPEG o PNG';
      header('Location: jugadores.php');
    } else if ($archivo['size'] > 5000000) {
      // >5MB
      $_SESSION['error'] = 'El archivo no puede ser mayor de 5MB';
      header('Location: jugadores.php');
    } else {
      $nombreArchivo = str_replace(' ', '_', $archivo['name']);

      include_once 'conexion.php';

      $insert = $pdo->prepare(
        'INSERT INTO jugador (nombre_jugador, posicion, foto, cod_equipo)
          VALUES (:nombre, :posicion, :foto, :cod_equipo);'
      );
      $insert->execute([
        'nombre' => $_REQUEST['nombre'],
        'posicion' => $_REQUEST['posicion'],
        'foto' => $nombreArchivo,
        'cod_equipo' => $_REQUEST['equipo']
      ]);

      $rutaArchivo = $directorio . $nombreArchivo;
      move_uploaded_file($archivo['tmp_name'], $rutaArchivo);

      header('Location: jugadores.php');
    }
  }
} else {
  header('Location: jugadores.php');
}
