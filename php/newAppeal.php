<?php
session_start();
$name = $_SESSION['name'];
require("../bd/bd.php");

$title = $mysql->real_escape_string($_POST['title']);
$description = $mysql->real_escape_string($_POST['description']);
$status = 1;

$result = $mysql->query("SELECT * FROM `users` WHERE name = '$name'");

if($result->num_rows == 1){
    $id = $result->fetch_assoc();
    $number = $id['id'];

    $mysql->query("INSERT INTO `appeals` (`id`, `theme`, `description`, `user`, `status`) VALUES (NULL, '$title', '$description', '$number', '$status')");

    if($mysql){
        header("Location: ../pages/user.php");
    }
}
?>