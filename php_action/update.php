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

if (isset($_POST['btn-editar'])) :
  $nome = clearInput($_POST['nome']);
  $sobrenome = clearInput($_POST['sobrenome']);
  $email = clearInput($_POST['email']);
  $idade = clearInput($_POST['idade']);
  $id = clearInput($_POST['id']);

  $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

  if (mysqli_query($connect, $sql)) :
    $_SESSION['mensagem'] = "Atualizado com sucesso!";
    header('Location: ../index.php');
  else :
    $_SESSION['mensagem'] = "Erro ao atualizar.";
    header('Location: ../index.php');
  endif;
endif;
