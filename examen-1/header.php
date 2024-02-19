<header>
  <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="equipos.php">Equipos</a></li>
      <?php if (isset($_SESSION['usr'])) { ?>
        <li><a href="jugadores.php">Nuevos jugadores</a></li>
        <li><a href="cerrarsesion.php">Cerrar sesión</a></li>
      <?php
      } else {
      ?>
        <li><a href="iniciarsesion.php">Iniciar sesión</a></li>
      <?php
      }
      ?>
    </ul>
  </nav>
</header>