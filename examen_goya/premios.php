<?php
session_start();
include_once 'head.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include_once 'conexion.php';
  $select = $pdo->prepare(
    'SELECT cod_cate AS cod, nom_cate AS categoria
      FROM categorias
      WHERE cod_cate = :cod'
  );
  $select->execute(['cod' => $_REQUEST['categoria']]);
  $categoria = $select->fetch();

  $select = $pdo->prepare(
    'SELECT n.cod_nomi AS nominacion, n.nom_nomi AS director, n.ganador AS ganador, p.nom_peli AS pelicula, p.cartel AS cartel
      FROM nominaciones n
      JOIN peliculas p ON n.pelicula = p.cod_peli
      WHERE categoria = :cod'
  );
  $select->execute(['cod' => $_REQUEST['categoria']]);
  $nominaciones = $select->fetchAll();
}
?>

<body>
  <?php include_once 'header.php' ?>

  <main>
    <h1>RESULTADOS DE LOS HOYA 2023</h1>

    <?php if (isset($categoria)) { ?>
      <?php
          foreach ($nominaciones as $nominacion) {
          ?>
            <div>
              <?php if ($nominacion['ganador']==1) {?>
                <p><img src="img/carteles/<?php echo $nominacion['cartel'] ?>"></p>
                <p><?php echo $nominacion['pelicula'] ?></p>
                <p><b><?php echo $nominacion['director'] ?></b></p>
              <?php
                } else {
              ?>
                <p><img style="filter: grayscale(100%);" src="img/carteles/<?php echo $nominacion['cartel'] ?>"></p>
                <p><?php echo $nominacion['pelicula'] ?></p>

                <p><?php echo $nominacion['director'] ?></p>
              <?php
                }
              ?>
            </div>
          <?php
          }
          ?>
      
    <?php
    } else{
    ?>
    <form method="POST" action="">
      <div class="campo">
        <select name="categoria" id="categoria">
          <?php
          include_once 'conexion.php';
          $select = $pdo->prepare('SELECT cod_cate AS cod, nom_cate AS categoria FROM categorias;');
          $select->execute([]);
          $categorias = $select->fetchAll();

          foreach ($categorias as $categoria) {
          ?>
            <option value="<?php echo $categoria['cod'] ?>"><?php echo $categoria['categoria'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>

      <button type="submit">Enviar</button>
    </form>    
    <?php
    }
    ?>
  </main>

  <?php include_once 'footer.php' ?>
</body>

</html>