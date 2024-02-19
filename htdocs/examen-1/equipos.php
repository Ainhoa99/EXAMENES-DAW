<?php
session_start();
include_once 'head.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include_once 'conexion.php';
  $select = $pdo->prepare(
    'SELECT cod_equipo AS cod, nombre_equipo AS nombre, localidad, entrenador, estadio
      FROM equipos
      WHERE cod_equipo = :cod'
  );
  $select->execute(['cod' => $_REQUEST['equipo']]);
  $equipo = $select->fetch();

  $select = $pdo->prepare(
    'SELECT cod_jugador AS cod, nombre_jugador AS nombre, posicion, foto, cod_equipo
      FROM jugador
      WHERE cod_equipo = :cod'
  );
  $select->execute(['cod' => $_REQUEST['equipo']]);
  $jugadores = $select->fetchAll();
}
?>

<body>
  <?php include_once 'header.php' ?>

  <main>
    <?php if (isset($equipo)) { ?>
      <h1>Jugadores del equipo <?php echo $equipo['nombre'] ?></h1>
      <p>Entrenador: <?php echo $equipo['entrenador'] ?></p>

      <table>
        <thead>
          <tr>
            <th>Nombre jugador</th>
            <th>Foto</th>
            <th>Posición</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($jugadores as $jugador) {
          ?>
            <tr>
              <td><?php echo $jugador['nombre'] ?></td>
              <td><img src="imagenes/<?php echo $jugador['foto'] ?>" alt="foto <?php echo $jugador['nombre'] ?>"></td>
              <td><?php echo $jugador['posicion'] ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    <?php
    } else {
    ?>
      <h1>Mostrar jugadores del equipo</h1>

      <form method="POST" action="">
        <fieldset>
          <legend>Equipo</legend>

          <div class="campo">
            <label for="usr">Seleccione equipo para ver jugadores:</label>
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
        </fieldset>
      </form>
    <?php
    }
    ?>
  </main>

  <?php include_once 'footer.php' ?>
</body>

</html>