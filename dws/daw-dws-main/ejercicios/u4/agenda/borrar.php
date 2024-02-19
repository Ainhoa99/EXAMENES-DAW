<?php
include_once('db-config.php');

$tel = isset($_REQUEST['tel']) ? $_REQUEST['tel'] : null;
$borrado = $pdo->prepare('delete from contacto where tel = :tel');
$borrado->execute(['tel' => $tel]);

header('Location: index.php');
