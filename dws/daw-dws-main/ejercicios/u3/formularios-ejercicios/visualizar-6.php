<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />

  <title>6</title>
  <link rel="shortcut icon" href="https://raw.githubusercontent.com/hustcc/placeholder.js/master/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <?php
    $datos = $_REQUEST;
    $aficiones = array_pop($datos);
    ?>
    <p>Su nombre es <span class="bold"><?php echo $datos['nombre'] ?></span></p>
    <p>Su apellido es <span class="bold"><?php echo $datos['apellidos'] ?></span></p>

    <p>Su edad es <span class="bold"><?php echo $datos['edad'] ?></span></p>

    <p>Su peso es <span class="bold"><?php echo $datos['peso'] ?></span>kg</p>
    <p>Es <span class="bold"><?php echo $datos['sexo'] ?></span></p>
    <p>Su estado civil es <span class="bold"><?php echo $datos['estado'] ?></span></p>

    <p>Le gusta:</p>
    <ul>
      <?php foreach ($aficiones as $aficion) { ?>
        <li class="bold"><?php echo $aficion ?></li>
      <?php } ?>
    </ul>

    <br>
    <a href="6.html">Volver al formulario</a>
  </main>
</body>

</html>