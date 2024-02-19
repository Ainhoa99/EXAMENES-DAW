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
      echo "<h1>pdf-p18</h1>";

      $nums = [
        'uno',
        'dos',
        'tres',
        'cuatro',
        'cinco',
        'seis',
        'siete',
        'ocho',
        'nueve',
        'diez',
      ];
      $num = rand(-3, 13);
      if ($num >= 1 && $num <= 10) {
        echo "<p>el número es ", $nums[$num - 1], " ($num)</p>";
      } else {
        echo "<p>el número ($num) no está entre 1 y 10</p>";
      }
    ?>

    <?php
      echo "<br>";
      echo "<h1>pdf-p32</h1>";

      $nombre = 'antonio';
      $apellido1 = 'ruiz';
      $apellido2 = 'santos';

      echo "<p>";
      if ($nombre === 'antonio' || ($apellido1 === 'ruiz' && $apellido2 === 'santos')) {
        echo "bienvenido $nombre $apellido1 $apellido2";
      } else {
        echo "no tiene acceso";
      }
      echo "</p>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>pdf-p60</h1>";

      echo "<p>";
      $min = 5;
      $max = 50;

      if ($max % 2 !== 0) $max--;
      for ($n = $min; $n <= $max; $n++) {
        if ($n % 2 === 0) {
          echo ($n === $max) ? "$n" : "$n, ";
        }
      }
      echo "</p>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>pdf-p90</h1>";

      $size = rand(1, 10);
      $matriz = [];
      for ($n = 0; $n < $size; $n++) {
        $matriz[] = rand(1, 10);
      }

      $total = 0;
      // print_r($matriz);

      for ($n = $size - 1; $n >= $size - 3; $n--) {
        if ($n < 0) break;
        $total += $matriz[$n];
      }

      echo "<p>";
      if ($total <= 10) {
        echo "la suma de los últimos tres números ($total) está entre 1 y 10";
      } else if ($total <= 20) {
        echo "la suma de los últimos tres números ($total) está entre 10 y 20";
      } else {
        echo "la suma de los últimos tres números ($total) es mayor de 20";
      }
      echo "</p>";
    ?>
  </main>
</body>
</html>