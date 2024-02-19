<?php
session_start();
if (empty($_SESSION['usr']))  header('Location: iniciarsesion.php');
