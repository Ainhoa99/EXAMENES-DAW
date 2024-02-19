<?php include_once('header.php') ?>

<?php
include_once('config.php');

$codigo = isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : null;
$titulo = isset($_REQUEST['titulo']) ? $_REQUEST['titulo'] : null;
$autor = isset($_REQUEST['autor']) ? $_REQUEST['autor'] : null;
$disponible = isset($_REQUEST['disponible']) ? $_REQUEST['disponible'] : null;

// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

// Comprobamso si recibimos datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Prepara UPDATE
  $miUpdate = $miPDO->prepare('UPDATE libros SET titulo = :titulo, autor = :autor, disponible = :disponible WHERE codigo = :codigo');

  // Ejecuta UPDATE con los datos
  $miUpdate->execute(
    [
      'codigo' => $codigo,
      'titulo' => $titulo,
      'autor' => $autor,
      'disponible' => $disponible
    ]
  );

  // Redireccionamos a Leer
  header('Location: index.php');
} else {
  // Prepara SELECT
  $miConsulta = $miPDO->prepare('SELECT * FROM libros WHERE codigo = :codigo;');

  // Ejecuta consulta
  $miConsulta->execute(['codigo' => $codigo]);
}

// Obtiene un resultado
$libro = $miConsulta->fetch();

?>

<body>
  <form method="post">
    <p>
      <label for="titulo">Titulo</label>
      <input id="titulo" type="text" name="titulo" value="<?= $libro['titulo'] ?>">
    </p>
    <p>
      <label for="autor">Autor</label>
      <input id="autor" type="text" name="autor" value="<?= $libro['autor'] ?>">
    </p>
    <p>
    <div>¿Disponible?</div>
    <input id="si-disponible" type="radio" name="disponible" value="1" <?= $libro['disponible'] ? ' checked' : '' ?>> <label for="si-disponible">Si</label>
    <input id="no-disponible" type="radio" name="disponible" value="0" <?= !$libro['disponible'] ? ' checked' : '' ?>> <label for="no-disponible">No</label>
    </p>
    <p>
      <input type="hidden" name="codigo" value="<?= $codigo ?>">
      <input type="submit" value="Modificar">
    </p>
  </form>
</body>

</html>