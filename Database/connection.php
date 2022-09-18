<?php
try {
  $DB = new PDO('mysql:host=localhost; dbname=php-login-app;charset=utf8', 'root', '');
} catch (PDOException $e) {
  echo "Error al conectarse a la base de datos.";
  die();
}