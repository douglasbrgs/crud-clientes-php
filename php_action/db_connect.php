<?php
// Conexão com banco de dados
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "crud";

$connect = mysqli_connect($serverName, $userName, $password, $dbName);

if (mysqli_connect_error()) {
  echo "Erro na conexão:" . mysqli_connect_error();
}
