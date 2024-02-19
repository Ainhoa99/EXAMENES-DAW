<?php
$host = '127.0.0.1';
$db = 'baloncesto';
$usr = 'root';
$pass = '';

$hostPDO = "mysql:host=$host;dbname=$db;";
$pdo = new PDO($hostPDO, $usr, $pass);
