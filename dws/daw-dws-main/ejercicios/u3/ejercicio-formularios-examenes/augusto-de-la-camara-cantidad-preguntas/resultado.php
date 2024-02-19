<?php session_start() ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Ejercicio Examen | Resultado</title>
  <link rel="shortcut icon" href="https://raw.githubusercontent.com/hustcc/placeholder.js/master/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <?php
    $nombreCompleto = $_SESSION['nombreCompleto'];
    $curso = $_SESSION['curso'];
    $indicesRespuestas = $_SESSION['indicesRespuestas'];
    $cantidadPreguntas = $_SESSION['cantidadPreguntas'];

    $respuestasEnviadas = array_values($_REQUEST);

    $respuestas = [
      'Jirafa',
      '4',
      '7',
      '100',
      'Sauron',
      'Roma',
      'Munch',
      '1989',
      'K',
      'España',
    ];
    ?>

    <h1>Examen <?php echo $curso ?>º Curso</h1>
    <form action="resultado.php" method="post">
      <fieldset>
        <legend>Respuestas examen: <?php echo $nombreCompleto ?></legend>

        <?php
        $aciertos = 0;
        foreach ($indicesRespuestas as $key => $val) if (strtolower(trim($respuestasEnviadas[$key])) === strtolower(trim($respuestas[$val]))) $aciertos++;
        ?>
        <p>Has acertado <?php echo $aciertos ?> pregunta<?php if ($aciertos !== 1)  echo 's' ?> de <?php echo $cantidadPreguntas ?>.</p>
      </fieldset>
    </form>
    <a href="index.html">Volver al examen.</a>
  </main>

  <footer>Augusto de la Cámara</footer>
</body>

</html>