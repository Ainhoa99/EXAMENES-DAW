<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />

    <title>base</title>
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/hustcc/placeholder.js/master/favicon.ico" type="image/x-icon">
    <style>
      table {
        border-collapse: collapse;
      }

      th, td {
        border: 2px solid black;
        padding: .5rem;
      }
    </style>
  </head>

  <body>
    <table>
      <?php
        foreach ($_REQUEST as $key => $val) {
      ?>
      <tr>
        <th><?php echo ucfirst($key) ?></th>
        <td><?php echo $val ?></td>
      </tr>
      <?php
        }
      ?>
    </table>
  </body>
</html>