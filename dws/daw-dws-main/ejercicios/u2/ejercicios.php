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
      echo "<h1>doc-1</h1>";

      $num = 2;
      $max = 10;

      echo '<table>';
      for ($i = 0; $i <= $max; $i++) {
        echo '<tr><td>';
        echo "$num x $i = ";
        echo $i * $num;
        echo '</td></tr>';
      }
      echo '</table>';
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-2</h1>";

      $total = 0;
      for ($i = 1; $i <= 1000; $i += 3) {
        $total += $i;
      }
      echo "<p>total: $total</p>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-3</h1>";

      $mediaEsperada = 6;

      $size = 5;
      $array = [];
      for ($n = 0; $n < $size; $n++) $array[] = rand(1, 10);

      $total = 0;
      foreach ($array as $num) {
        $total += $num;
      }

      $media = $total / $size;
      echo "<p>";
      if ($media > $mediaEsperada) {
        echo "la media ($media) es mayor que $mediaEsperada";
      } else if ($media === $mediaEsperada) {
        echo "la media ($media) es igual que $mediaEsperada";
      } else {
        echo "la media ($media) es menor que $mediaEsperada";
      }
      echo "</p>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-4</h1>";

      $a = rand(1, 10);
      $b = rand(1, 10);
      $c = rand(1, 10);

      echo "a: $a, b: $b, c: $c";

      $max = $a;
      if ($b > $max) $max = $b;
      if ($c > $max) $max = $c;

      $min = $a;
      if ($b < $min) $min = $b;
      if ($c < $min) $min = $c;

      echo "<p>mayor: $max</p>";
      echo "<p>menor: $min</p>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-6</h1>";

      $numDia = rand(1, 7);
      echo "<p>numDia: $numDia</p>";
      echo '<p>';
      switch ($numDia) {
        case 1:
          echo 'lunes';
          break;
          case 2:
          echo 'martes';
          break;
        case 3:
          echo 'miércoles';
          break;
        case 4:
          echo 'jueves';
          break;
        case 5:
          echo 'viernes';
          break;
        case 6:
          echo 'sábado';
          break;
        case 7:
          echo 'domingo';
          break;
        }
      echo '</p>';
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-7</h1>";

      $ciudades = [
        'Madrid',
        'Barcelona',
        'Londres',
        'Nueva York',
        'Los Ángeles',
        'Chicago',
      ];

      foreach ($ciudades as $index => $ciudad ) {
        echo "<p>La ciudad con el índice $index tiene el nombre de $ciudad.</p>";
      }
      echo "<p>Final de la ejecución.</p>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-9</h1>";

      $ciudades = [
        'MD' => 'Madrid',
        'BA' => 'Barcelona',
        'LO' => 'Londres',
        'NY' => 'Nueva York',
        'LA' => 'Los Ángeles',
        'CH' => 'Chicago',
      ];

      foreach ($ciudades as $index => $ciudad ) {
        echo "<p>La ciudad con el índice $index tiene el nombre de $ciudad.</p>";
      }
      echo "<p>Final de la ejecución.</p>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-11</h1>";

      echo "<table>";
      for ($i = 0; $i < 20; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++) {
          echo "<td>O</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
      ?>
  </main>
</body>
</html>