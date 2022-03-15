<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

// Limpar campos
function clearInput($input)
{
  global $connect;
  // sql
  $output = mysqli_escape_string($connect, $input);
  // previne o cross site scripting (xss)
  $output = htmlspecialchars($output);

  return $output;
}

if (isset($_POST['btn-cadastrar'])) :
  $nome = clearInput($_POST['nome']);
  $sobrenome = clearInput($_POST['sobrenome']);
  $email = clearInput($_POST['email']);
  $idade = clearInput($_POST['idade']);

  $sql = "INSERT INTO clientes(nome, sobrenome, email, idade) VALUES ('$nome','$sobrenome', '$email', '$idade')";

  if (mysqli_query($connect, $sql)) :
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../index.php');
  else :
    $_SESSION['mensagem'] = "Erro ao cadastrar.";
    header('Location: ../index.php');
  endif;
endif;
