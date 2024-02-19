<?php include_once('header.php') ?>

<body>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $dir = $_REQUEST['dir'];
    $cp = $_REQUEST['cp'];
    $tel = $_REQUEST['tel'];
    $tipo = $_REQUEST['tipo'];

    $tipoArchivo = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
    $nombreArchivo = $tel . '.' . $tipoArchivo;
    $destino = 'src/fotos/' . $nombreArchivo;

    move_uploaded_file($_FILES['foto']['tmp_name'], $destino);

    include_once('db-config.php');

    $insert = $pdo->prepare(
      'insert into contacto (nombre, apellidos, dir, cp, tel, tipo, foto)
        values (:nombre, :apellidos, :dir, :cp, :tel, :tipo, :foto)'
    );

    $insert->execute(
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
  }
  ?>

  <main>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="campo">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" minlength="1" required>
      </div>

      <div class="campo">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" minlength="1" required>
      </div>

      <div class="campo">
        <label for="dir">Dirección:</label>
        <input type="text" name="dir" id="dir" minlength="1" required>
      </div>

      <div class="campo">
        <label for="cp">Código postal:</label>
        <input type="number" name="cp" id="cp" minlength="1" required>
      </div>

      <div class="campo">
        <label for="tel">Teléfono:</label>
        <input type="tel" name="tel" id="tel" required>
      </div>

      <div class="campo">
        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo" required>
          <option value="amigo">Amigo</option>
          <option value="trabajo">Trabajo</option>
          <option value="familia">Familia</option>
          <option value="otro">Otro</option>
        </select>
      </div>

      <div class="campo">
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" accept="image/*" required>
      </div>

      <button type="submit">Agregar</button>
    </form>
  </main>
</body>

</html>