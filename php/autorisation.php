<?php
require("../bd/bd.php");
session_start();
$email = $mysql->real_escape_string($_POST['email']);
$password = $mysql->real_escape_string($_POST['password']);
$_SESSION["name"] = '';

$pashash = md5($password);

$result = $mysql->query("SELECT * FROM `users` WHERE password = '$pashash' AND email = '$email'");

if(!$result){  
}else{
   if($result->num_rows == 1){
    $name = $result->fetch_assoc();
    $_SESSION["name"] = $name['name'];
    $role = $name['role'];
    $_SESSION['role'] = $role;
    if($role == 2){
       header("Location: ../pages/user.php");  
    } else if($role == 1){
        header("Location: ../pages/admin.php");  
    }
} else {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertsauto">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <strong>Пользователя с введенными данными не существует</strong> попробуйте еще раз или повторите попытку позже
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header('Location: ../index.php');
} 
}
