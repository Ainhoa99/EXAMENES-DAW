<?php include_once('header.php') ?>

<body>
  <?php
  include_once('config.php');

  // Conecta con base de datos
  $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
  $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

  // Prepara SELECT
  $miConsulta = $miPDO->prepare('SELECT * FROM libros;');

  // Ejecuta consulta
  $miConsulta->execute();

  ?>
  <p><a class="button" href="nuevo.php">Crear</a></p>
  <table>
    <tr>
      <th>Código</th>
      <th>Título</th>
      <th>Autor</th>
      <th>¿Disponible?</th>
    </tr>
    <?php
    foreach ($miConsulta as $key => $val) {
    ?>
      <tr>
        <td><?= $val['codigo']; ?></td>
        <td><?= $val['titulo']; ?></td>
        <td><?= $val['autor']; ?></td>
        <td><?= $val['disponible'] ? 'Sí' : 'No'; ?></td>
        <td><a class="button" href="modificar.php?codigo=<?= $val['codigo'] ?>">Modificar</a></td>
        <td><a class="button" href="borrar.php?codigo=<?= $val['codigo'] ?>">Borrar</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>