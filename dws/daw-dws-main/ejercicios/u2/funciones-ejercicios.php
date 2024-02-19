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
      echo "<h1>pdf-p72</h1>";

      $num = rand(0, 5);
      switch ($num) {
        case 0:
          noAcceso();
          break;
        case 1:
          bienvenido();
          break;
        case 2:
          decimalABinario();
          break;
        case 3:
          tablaMult();
          break;
        case 4:
          cuatroImg();
          break;
        case 5:
          mostrarArray();
          break;
        }

        function noAcceso() {
          echo "<p>no tiene acceso</p>";
          $num = rand(0, 5);
          echo "<p>nuevo número: <span class='num'>$num</span></p>";
        }

        function bienvenido() {
          echo "<p>bienvenido, que pases un buen día</p>";
        }

        function decimalABinario() {
          $dec = rand(0, 5);
          $bin = decbin($dec);
          echo "<p><span class='num'>$dec</span> en binario es <span class='num'>$bin</span></p>";
        }

        function tablaMult() {
          $num = rand(1, 10);
          $max = 10;

          echo '<table>';
          for ($i = 1; $i <= $max; $i++) {
            echo '<tr><td class="num">';
            echo "$num x $i = ";
            echo $i * $num;
            echo '</td></tr>';
          }
          echo '</table>';
        }

        function cuatroImg() {
            echo "<table><tr>";
            for ($i = 1; $i <= 4; $i++) {
              echo "<td>$i</td>";
            }
            echo "</tr><tr>";
            for ($i = 1; $i <= 4; $i++) {
              echo '<td><img src="src/dalek-pfp.jpg" style="width: 100px;" /></td>';
            }
            echo "</tr></table>";
        }

        function mostrarArray() {
          $v[1]=90;
          $v[30]=7;
          $v['e']=99;
          $v['hola']=43;

          foreach ($v as $index => $val) {
            echo "<p>índice: <span class='num'>$index</span>, valor: <span class='num'>$val</span></p>";
          }
        }
    ?>

    <?php
      echo "<br>";
      echo "<h1>pdf-p73</h1>";

      echo "<table>";
      for ($i = 1; $i <= 4; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 4; $j++) {
          $potencia = $i ** $j;
          echo "<td class='num'>$potencia</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    ?>
  </main>
</body>
</html>