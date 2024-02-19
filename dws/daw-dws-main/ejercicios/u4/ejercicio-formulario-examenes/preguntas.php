<?php session_start() ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Ejercicio Examen | Preguntas</title>
  <link rel="shortcut icon" href="https://raw.githubusercontent.com/hustcc/placeholder.js/master/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="style.css" />

  <script defer src="script.js"></script>
</head>

<body>
  <main>
    <?php
    $nombreCompleto = sprintf("%s %s", trim($_REQUEST['nombre']), trim($_REQUEST['apellidos']));
    $curso = intval($_REQUEST['curso']);
    $cantidadPreguntas = $_REQUEST['cantidadPreguntas'];

    include_once('db-config.php');

    $preguntas = $pdo->prepare(sprintf('select id, pregunta from pregunta where curso = %d order by rand() limit %d;', $curso, $cantidadPreguntas));
    $preguntas->execute();

    $_SESSION['nombreCompleto'] = $nombreCompleto;
    $_SESSION['curso'] = $curso;
    $_SESSION['cantidadPreguntas'] = $cantidadPreguntas;
    ?>

    <h1>Examen <?php echo $curso ?>º Curso</h1>
    <form action="resultado.php" method="post">
      <fieldset>
        <legend>Preguntas para el alumno: <?php echo $nombreCompleto ?></legend>

        <?php
        $indicesPreguntas = [];
        $numPregunta = 1;
        foreach ($preguntas as $pregunta) {
          $indicesPreguntas[] = $pregunta['id'];
        ?>
          <div>
            <label for="pregunta<?php echo $numPregunta ?>"><?php echo sprintf("%s. %s", $numPregunta, $pregunta['pregunta']) ?></label>
            <input type="text" name="<?php echo $numPregunta ?>" id="pregunta<?php echo $numPregunta ?>" minlength="1" required />
          </div>
        <?php
          $numPregunta++;
        }
        $_SESSION['indicesPreguntas'] = $indicesPreguntas;
        ?>
        <div>
          <button type="submit">Responder</button>
          <button type="button" id="borrar">Borrar</button>
        </div>
      </fieldset>
    </form>
  </main>

  <footer>Augusto de la Cámara</footer>
</body>

</html>