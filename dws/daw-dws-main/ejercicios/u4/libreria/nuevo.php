<?php include_once('header.php') ?>

<body>
  <?php
  // Comprobamso si recibimos datos por POST
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recogemos variables
    $titulo = isset($_REQUEST['titulo']) ? $_REQUEST['titulo'] : null;
    $autor = isset($_REQUEST['autor']) ? $_REQUEST['autor'] : null;
    $disponible = isset($_REQUEST['disponible']) ? $_REQUEST['disponible'] : null;

    include_once('config.php');

    // Conecta con base de datos
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

    // Prepara INSERT
    $miInsert = $miPDO->prepare('INSERT INTO libros (titulo, autor, disponible) VALUES (:titulo, :autor, :disponible)');

    // Ejecuta INSERT con los datos
    $miInsert->execute(
      array(
        'titulo' => $titulo,
        'autor' => $autor,
        'disponible' => $disponible
      )
    );

    // Redireccionamos a Leer
    header('Location: index.php');
  }
  ?>

  <form action="" method="post">
    <p>
      <label for="titulo">Titulo</label>
      <input id="titulo" type="text" name="titulo">
    </p>
    <p>
      <label for="autor">Autor</label>
      <input id="autor" type="text" name="autor">
    </p>
    <p>
    <div>¿Disponible?</div>
    <input id="si-disponible" type="radio" name="disponible" value="1" checked> <label for="si-disponible">Si</label>
    <input id="no-disponible" type="radio" name="disponible" value="0"> <label for="no-disponible">No</label>
    </p>
    <p>
      <input type="submit" value="Guardar">
    </p>
  </form>
</body>

</html>