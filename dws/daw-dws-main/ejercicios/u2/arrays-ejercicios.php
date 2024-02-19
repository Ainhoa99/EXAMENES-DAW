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
      echo "<h1>2-1 viaje</h1>";

      $amigos = ['Iker', 'Luka', 'Unai'];
      $ciudades = ['Barcelona', 'Bilbao', 'Madrid'];

      echo "<p>$amigos[0] se va de viaje</p>";
      echo "<p>$amigos[1] se va de viaje a $ciudades[0]</p>";

      shuffle($amigos);
      shuffle($ciudades);

      echo "<p>$amigos[0] se va de viaje a $ciudades[0]</p>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>2-2 agenda</h1>";

      $agenda = [
        '12h: dentist',
        '14h: doctor'
      ];
      echo '<p>' , var_dump($agenda) , '</p>';

      $agenda[0] = '16h: dentist';
      echo '<p>' , var_dump($agenda) , '</p>';

      unset($agenda[0]);
      echo '<p>' , var_dump($agenda) , '</p>';

    ?>

    <?php
      echo "<br>";
      echo "<h1>2-4 censo</h1>";

      $censo = [
        'España' => 100,
        'Francia' => 150,
        'Portugal' => 50,
      ];

      echo '<p>' , var_dump($censo) , '</p>';
      arsort($censo);
      echo '<p>' , var_dump($censo) , '</p>';

      echo "<br>";
      echo "<h1>doc-1</h1>";

      $nums = [ 2, 8, 12, 5, 27];
      $total = 0;
      foreach ($nums as $num) {
        $total = $total + $num;
      }
      echo "<p>total = <span class='num'>$total</span></p>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-2</h1>";

      $nombres = [
        'a' => 'augusto',
        'b' => 'belcebú',
        'c' => 'casimiro',
        'd' => 'deodato',
        'e' => 'eulogio',
        'f' => 'filomeno',
      ];

      echo "<ul>";
      foreach ($nombres as $nombre) {
        echo "<li>$nombre</li>";
      }
      echo "</ul>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-3</h1>";

      $pelis = [
        'The Motion Picture',
        'Wrath of Khan',
        'Search for Spock',
        'Voyage Home',
        'Final Frontier',
        'Undiscovered Country',
        'Generations',
        'First Contact',
        'Insurrection',
        'Nemesis',
      ];

      sort($pelis);
      echo "<ol>";
      foreach ($pelis as $peli) {
        echo "<li>$peli</li>";
      }
      echo "</ol>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-4</h1>";

      $enumerativa = [1, 2, 3, 4, 5];
      $asociativa = [
        'uno' => 1,
        'dos' => 2,
        'tres' => 3,
        'cuatro' => 4,
        'cinco' => 5
      ];
      $mixta = [
        1,
        2,
        3,
        'cuatro' => 4,
        'cinco' => 5
      ];

      $total = 0;

      foreach ($enumerativa as $num) {
        $total += $num;
      }

      foreach ($asociativa as $nom => $num) {
        $total += $num;
      }

      foreach ($mixta as $nom => $num) {
        $total += $num;
      }

      echo '<p>';
      echo $total;
      echo '</p>';
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-5</h1>";

      $paises = ['alemania', 'brasil', 'italia', 'chile', 'uruguay', 'australia'];;

      unset($paises[array_search('alemania', $paises)]);
      unset($paises[array_search('italia', $paises)]);
      unset($paises[array_search('australia', $paises)]);

      $paises[] = 'argentina';
      $paises[] = 'bolivia';
      sort($paises);

      echo "<p>";
      print_r($paises);
      echo "</p>";
    ?>

    <?php
      echo "<br>";
      echo "<h1>doc-6</h1>";


    ?>
  </main>
</body>
</html>