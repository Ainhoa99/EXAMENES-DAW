<?php
// Variables
$hostDB = '127.0.0.1';
$nombreDB = 'ejercicio_prueba';
$usuarioDB = 'root';
$contrasenyaDB = '';

$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$pdo = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
