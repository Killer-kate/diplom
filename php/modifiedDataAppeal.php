<?php

require("../bd/bd.php");

$id = $mysql->real_escape_string($_GET['id']);
$title = $mysql->real_escape_string($_POST['title']);
$description = $mysql->real_escape_string($_POST['description']);
$status = $mysql->real_escape_string($_POST['status']);

$mysql->query("UPDATE `appeals` SET `theme` = '$title', `description` = '$description', `status` = '$status' WHERE id = $id");
header("Location: ../pages/admin.php");

?>