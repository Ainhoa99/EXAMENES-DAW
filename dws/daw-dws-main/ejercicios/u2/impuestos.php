<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>php</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <?php
      $precio = 100;
      echo "<p>precio (sin iva): <span class='num'>$precio</span>€</p>";
      define('IVA', 1.21);
      $precioFinal = 100 * IVA;
      echo "<p>precio (con iva): <span class='num'>$precioFinal</span>€</p>";
    ?>
  </main>
</body>
</html>