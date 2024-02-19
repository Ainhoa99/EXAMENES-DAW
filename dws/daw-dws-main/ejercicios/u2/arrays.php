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
      $weekdays = [
        'Lunes',
        'Martes',
        'Miércoles',
        'Jueves',
        'Viernes',
      ];
      $weekend[] = 'Sábado';
      $weekend[] = 'Domingo'; // agrega al final
      $days = array_merge($weekdays, $weekend); // juntar arrays
      print_r($days); // mostrar array
    ?>
  </main>
</body>
</html>