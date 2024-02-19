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
    $indicesRespuestas = $_SESSION['indicesPreguntas'];
    $cantidadPreguntas = $_SESSION['cantidadPreguntas'];

    $strRespuestasEnviadas = array_values($_REQUEST);
    $respuestasEnviadas = [];
    foreach ($indicesRespuestas as $key => $i) {
      $respuestasEnviadas[] = [
        'id' => $i,
        'respuesta' => $strRespuestasEnviadas[$key]
      ];
    }

    include_once('db-config.php');

    $condicion = '';
    foreach ($indicesRespuestas as $key => $i) {
      $condicion .= sprintf('id = %d', $i);
      if ($key !== count($indicesRespuestas) - 1) $condicion .= ' or ';
    }

    $respuestasCorrectas = $pdo->prepare(sprintf('select id, respuesta from pregunta where %s;', $condicion));
    $respuestasCorrectas->execute();
    $respuestasCorrectas = $respuestasCorrectas->fetchAll(\PDO::FETCH_ASSOC);
    ?>

    <h1>Examen <?php echo $curso ?>º Curso</h1>
    <form action="" method="">
      <fieldset>
        <legend>Respuestas examen: <?php echo $nombreCompleto ?></legend>

        <?php
        $aciertos = 0;
        foreach ($respuestasEnviadas as $res) {
          $pos = array_search($res['id'], array_column($respuestasCorrectas, 'id'));
          if (strtolower(trim($res['respuesta'])) === strtolower(trim($respuestasCorrectas[$pos]['respuesta']))) $aciertos++;
        }
        ?>

        <p>Has acertado <?php echo $aciertos ?> pregunta<?php if ($aciertos !== 1)  echo 's' ?> de <?php echo $cantidadPreguntas ?>.</p>
      </fieldset>
    </form>
    <a href="index.html">Volver al examen.</a>
  </main>
  <?php
  $insert = $pdo->prepare('insert into resultado (nombre_completo, preguntas_correctas, total_preguntas, curso) values (:nombre_completo, :preguntas_correctas, :total_preguntas, :curso)');
  $insert->execute(
    array(
      'nombre_completo' => $nombreCompleto,
      'preguntas_correctas' => $aciertos,
      'total_preguntas' => $cantidadPreguntas,
      'curso' => $curso
    )
  );
  ?>
  <footer>Augusto de la Cámara</footer>
</body>

</html>