<?php
session_start();
if (!empty($_SESSION['usr'])) header('Location: index.php');

include_once 'head.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (empty($_REQUEST['usr']) || empty($_REQUEST['pass'])) {
?>
    <p>Todos los campos son requeridos</p>
    <?php
  } else {
    include_once 'conexion.php';
    $select = $pdo->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
    $select->execute(['usuario' => $_REQUEST['usr']]);
    $usrCorrecto = $select->fetch();

    if (!empty($usrCorrecto) && $_REQUEST['pass'] === $usrCorrecto['password']) {
      $_SESSION['usr'] = $usrCorrecto;
      header('Location: index.php');
    } else {
    ?>
      <p>Datos incorrectos. Usted no tiene permisos</p>
<?php
    }
  }
}
?>

<body>
  <main>
    <h1>Iniciar sesión</h1>

    <form method="POST" action="">
      <fieldset>
        <legend>Datos usuario</legend>

        <div class="campo">
          <label for="usr">Usuario:</label>
          <input type="text" placeholder="Ingrese usuario" name="usr" id="usr" value="<?php if (isset($_REQUEST['usr'])) echo $_REQUEST['usr'] ?>">
        </div>

        <div class="campo">
          <label for="pass">Contraseña:</label>
          <input type="password" placeholder="Ingrese contraseña" name="pass" id="pass" value="<?php if (isset($_REQUEST['pass'])) echo $_REQUEST['pass'] ?>">
        </div>

        <button type="submit">Iniciar sesión</button>
        <a href="index.php">Volver a inicio</a>
      </fieldset>
    </form>
  </main>
</body>

</html>