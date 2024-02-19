<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Sesiones | Confirmar</title>
  <link rel="shortcut icon" href="https://raw.githubusercontent.com/hustcc/placeholder.js/master/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <h1>Confirmar</h1>

    <?php
    $datos = $_REQUEST;
    $intereses = array_pop($datos);
    ?>

    <table>
      <tr>
        <th>Nombre completo</th>
        <td>
          <?php
          echo $datos['nombre'];
          $_SESSION['nombre'] = $datos['nombre'];
          ?>
        </td>
      </tr>

      <tr>
        <th>Dirección</th>
        <td>
          <?php
          echo $datos['dir'];
          $_SESSION['dir'] = $datos['dir'];
          ?>
        </td>
      </tr>
      <tr>
        <th>Contraseña</th>
        <td>
          <?php
          echo $datos['password'];
          $_SESSION['password'] = $datos['password'];
          ?>
        </td>
      </tr>
      <tr>
        <th>Fecha de nacimiento</th>
        <td>
          <?php
          echo $datos['fecha'];
          $_SESSION['fecha'] = $datos['fecha'];
          ?>
        </td>
      </tr>
      <tr>
        <th>Sexo</th>
        <td>
          <?php
          echo $datos['sexo'];
          $_SESSION['sexo'] = $datos['sexo'];
          ?>
        </td>
      </tr>

      <tr>
        <th>Intereses</th>
        <td>
          <?php foreach ($intereses as $interes) {
            echo "$interes<br>";
          } ?>
        </td>
      </tr>
    </table>

    <button type="submit">Confirmar</button>
  </main>
</body>

</html>