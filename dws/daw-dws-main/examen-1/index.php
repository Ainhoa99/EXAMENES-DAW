<?php
session_start();
include_once 'head.php';
?>

<body>
  <?php include_once 'header.php'; ?>

  <main id="inicio">
    <h1>Torneo baloncesto Txurdinaga</h1>

    <p>
      Esta es la página web para informar sobre el torneo que se celebrará en el instituto Txurdinaga
      y en el que participarán varios equipos de los que podréis ver información sobre ellos...
    </p>

    <ul>
      <li><img src="imagenes/equipos.png">Equipos</li>
      <li><img src="imagenes/entrenadores.png">Entrenadores</li>
      <li><img src="imagenes/jugadores.png">Jugadores</li>
    </ul>
  </main>

  <?php include_once 'footer.php'; ?>
</body>

</html>