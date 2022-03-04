<?php
// Conexão com banco de dados
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "crud";

$connect = mysqli_connect($serverName, $userName, $password, $dbName);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()) :
  echo "Erro na conexão:" . mysqli_connect_error();
endif;
