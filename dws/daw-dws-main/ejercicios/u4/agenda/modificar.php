<?php include_once('header.php') ?>

<body>
  <?php
  $tel = $_REQUEST['tel'];

  include_once('db-config.php');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $dir = $_REQUEST['dir'];
    $cp = $_REQUEST['cp'];
    $tipo = $_REQUEST['tipo'];

    $tipoArchivo = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
    $nombreArchivo = $tel . '.' . $tipoArchivo;
    $destino = 'src/fotos/' . $nombreArchivo;

    move_uploaded_file($_FILES['foto']['tmp_name'], $destino);

    $update = $pdo->prepare(
      'update contacto
      set tel = :tel, nombre = :nombre, apellidos = :apellidos, dir = :dir, cp = :cp, tipo = :tipo, foto = :foto
      where tel = :tel'
    );

    $update->execute(
      array(
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'dir' => $dir,
        'cp' => $cp,
        'tel' => $tel,
        'tipo' => $tipo,
        'foto' => $nombreArchivo
      )
    );

    header('Location: index.php');
  } else {
    $contacto = $pdo->prepare('SELECT * FROM contacto where tel = :tel;');
    $contacto->execute(['tel' => $tel]);
    $contacto = $contacto->fetch();
  }
  ?>

  <main>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="campo">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" minlength="1" required value="<?php echo $contacto['nombre'] ?>">
      </div>

      <div class="campo">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" minlength="1" required value="<?php echo $contacto['apellidos'] ?>">
      </div>

      <div class="campo">
        <label for="dir">Dirección:</label>
        <input type="text" name="dir" id="dir" minlength="1" required value="<?php echo $contacto['dir'] ?>">
      </div>

      <div class="campo">
        <label for="cp">Código postal:</label>
        <input type="number" name="cp" id="cp" minlength="1" required value="<?php echo $contacto['cp'] ?>">
      </div>

      <div class="campo">
        <label for="tel">Teléfono:</label>
        <input type="tel" name="tel" id="tel" required value="<?php echo $contacto['tel'] ?>">
      </div>

      <div class="campo">
        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo" required>
          <option value="amigo" <?php echo $contacto['tipo'] === 'Amigo' ? 'selected' : '' ?>>Amigo</option>
          <option value="trabajo" <?php echo $contacto['tipo'] === 'Trabajo' ? 'selected' : '' ?>>Trabajo</option>
          <option value="familia" <?php echo $contacto['tipo'] === 'Familia' ? 'selected' : '' ?>>Familia</option>
          <option value="otro" <?php echo $contacto['tipo'] === 'Otro' ? 'selected' : '' ?>>Otro</option>
        </select>
      </div>

      <div class="campo">
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" accept="image/*" required>
      </div>

      <button type="submit">Modificar</button>
    </form>
  </main>
</body>

</html>