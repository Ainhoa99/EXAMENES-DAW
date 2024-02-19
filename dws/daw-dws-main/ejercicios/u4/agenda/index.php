<?php include_once('header.php') ?>

<body>
  <main>
    <?php
    include_once('db-config.php');
    $contactos = $pdo->prepare('SELECT * FROM contacto order by nombre;');
    $contactos->execute();
    ?>
    <p><a class="button" href="nuevo.php">Crear</a></p>
    <table>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Código postal</th>
        <th>Teléfono</th>
        <th>Tipo</th>
        <th>Foto</th>
      </tr>
      <?php
      foreach ($contactos as $contacto) {
      ?>
        <tr>
          <td><?php echo $contacto['nombre'] ?></td>
          <td><?php echo $contacto['apellidos'] ?></td>
          <td><?php echo $contacto['dir'] ?></td>
          <td><?php echo $contacto['cp'] ?></td>
          <td><?php echo $contacto['tel'] ?></td>
          <td><?php echo $contacto['tipo'] ?></td>
          <td><img src="src/fotos/<?php echo $contacto['foto'] ?>" alt="foto <?php echo $contacto['nombre'] ?>"></td>
          <td><a class="button" href="modificar.php?tel=<?= $contacto['tel'] ?>">Modificar</a></td>
          <td><a class="button" href="borrar.php?tel=<?= $contacto['tel'] ?>">Borrar</a></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </main>
</body>

</html>