<?php
include_once 'comprobarsesion.php';
include_once 'head.php';
?>

<body>
  <?php include_once 'header.php' ?>

  <main>
    <?php if (isset($_SESSION['error'])) { ?>
      <p><?php echo $_SESSION['error'] ?></p>
    <?php
      unset($_SESSION['error']);
    }
    ?>

    <h1>Nuevos jugadores</h1>

    <form method="POST" action="guardarjugador.php" enctype="multipart/form-data">
      <fieldset>
        <legend>Datos jugador</legend>

        <div class="campo">
          <label for="nombre">Nombre jugador:</label>
          <input type="text" placeholder="Ingrese nombre" name="nombre" id="nombre">
        </div>

        <div class="campo">
          <label for="">Posición:</label>

          <input type="radio" name="posicion" value="ala" checked id="ala"><label for="ala">Ala</label>
          <input type="radio" name="posicion" value="base" id="base"><label for="base">Base</label>
          <input type="radio" name="posicion" value="pivot" id="pivot"><label for="pivot">Pivot</label>
          <input type="radio" name="posicion" value="escolta" id="escolta"><label for="escolta">Escolta</label>
        </div>

        <div class="campo">
          <label for="foto">Foto jugador:</label>
          <input type="file" accept=".jpg,.jpeg,.png" name="foto" id="foto">
        </div>

        <div class="campo">
          <label for="usr">Equipo:</label>
          <select name="equipo" id="equipo">
            <?php
            include_once 'conexion.php';
            $select = $pdo->prepare('SELECT cod_equipo AS cod, nombre_equipo AS nombre FROM equipos;');
            $select->execute([]);
            $equipos = $select->fetchAll();

            foreach ($equipos as $equipo) {
            ?>
              <option value="<?php echo $equipo['cod'] ?>"><?php echo $equipo['nombre'] ?></option>
            <?php
            }
            ?>
          </select>
        </div>

        <button type="submit">Enviar</button>
        <a href="jugadores.php">Borrar formulario</a>
      </fieldset>
    </form>
  </main>

  <?php include_once 'footer.php' ?>
</body>

</html>