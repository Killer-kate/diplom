<?php
session_start();
require("../bd/bd.php");

$path = 'img/pets/' . $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], '../' . $path);
$name = $mysql->real_escape_string($_POST['name']);
$description = $mysql->real_escape_string($_POST['description']);
$status = $mysql->real_escape_string($_POST['status']);
$view = $mysql->real_escape_string($_POST['view']);

$file = '../' . $path;

$mysql->query("INSERT INTO `pets` (`id`, `image`, `name`, `description`, `status`, `view`) VALUES (NULL, '$file', '$name', '$description', '$status', '$view')");
header("Location: ../pages/admin.php");
?>