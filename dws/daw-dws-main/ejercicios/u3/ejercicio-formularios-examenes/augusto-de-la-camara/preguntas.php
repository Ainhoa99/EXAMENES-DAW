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

    $preguntas = [
      '¿Qué animal tiene el cuello muy largo?',
      '¿Raíz cuadrada de 16?',
      '¿Cuántos colores tiene el arcoíris?',
      '¿Cuántos centímetros contiene un metro?',
      '¿Cómo se llama el villano de El Señor de los Anillos?',
      '¿Cuál es la capital de Italia?',
      '¿Cuál es el apellido del pintor de El Grito?',
      '¿En qué año cayó el muro de Berlín?',
      '¿Cuál es el símbolo químico del potasio?',
      '¿Qué país ganó el mundial de fútbol de 2010?',
    ];

    $inicio = 5 * ($curso - 1);
    // $curso = 1 -> $inicio = 0; $curso = 2 -> $inicio = 5; $curso = 3 -> $inicio = 10;
    $rangoPreguntas = range($inicio, $inicio + 4);
    shuffle($rangoPreguntas);
    $indicesPreguntas = array_slice($rangoPreguntas, 0, 3);
    ?>

    <h1>Examen <?php echo $curso ?>º Curso</h1>
    <form action="resultado.php" method="post">
      <fieldset>
        <legend>Preguntas para el alumno: <?php echo $nombreCompleto ?></legend>

        <?php
        $numPregunta = 1;
        foreach ($indicesPreguntas as $i) {
        ?>
          <div>
            <label for="pregunta<?php echo $numPregunta ?>"><?php echo sprintf("%s. %s", $numPregunta, $preguntas[$i]) ?></label>
            <input type="text" name="pregunta<?php echo $numPregunta ?>" id="pregunta<?php echo $numPregunta ?>" minlength="1" required />
          </div>
        <?php
          $numPregunta++;
        }

        $_SESSION['nombreCompleto'] = $nombreCompleto;
        $_SESSION['indicesRespuestas'] = $indicesPreguntas;
        $_SESSION['curso'] = $curso;
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