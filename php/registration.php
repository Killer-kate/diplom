<?php
session_start();
require("../bd/bd.php");

$name = $mysql->real_escape_string($_POST['name']);
$email = $mysql->real_escape_string($_POST['email']);
$password = $mysql->real_escape_string($_POST['password']);

$pashash = md5($password);

$result = $mysql->query("SELECT * FROM `users` WHERE email = '$email'");

if($result->num_rows == 0){
$mysql->query("INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`) VALUES (NULL, '$name', 2, '$email', '$pashash')");
header('Location: ../index.php');
} else{
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertsauto">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <strong>Такой пользователь уже существует!</strong> Возможно вы уже были зарегистрированны, попробуйте авторизироваться.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header('Location: ../index.php');
}
?>