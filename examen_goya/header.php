<header>
  <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="premios.php">Nominaciones</a></li>
      <?php if (isset($_SESSION['usr'])) { ?>
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