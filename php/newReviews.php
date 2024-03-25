<?php
session_start();
require("../bd/bd.php");

$name = $_SESSION['name'];

$description = $mysql->real_escape_string($_POST['description']);
$status = 2;
$mysql->query("INSERT INTO `reviews` (`id`, `name`, `description`, `status`) VALUES (NULL, '$name', '$description', '$status')");

if($mysql){
    header("Location: ../pages/info.php");
}
?>