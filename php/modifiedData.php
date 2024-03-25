<?php
require("../bd/bd.php");

$id = $mysql->real_escape_string($_GET['id']);
$path = 'img/' . $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], '../' . $path);
$name = $mysql->real_escape_string($_POST['name']);
$description = $mysql->real_escape_string($_POST['description']);
$status = $mysql->real_escape_string($_POST['status']);
$view = $mysql->real_escape_string($_POST['view']);

$file = '../' . $path;

    if($status == 'В приюте'){
        $status = 1;
    } else if($status == 'Забрали'){
        $status = 2;
    };
    if($view == 'Собака'){
        $view = 1;
    } else if($view == 'Кошка'){
        $view = 2;
    };
    if($file == "../img/"){
        $result = $mysql->query("SELECT * FROM `pets` WHERE id = '$id'");
        if($result->num_rows == 1){
            $image = $result->fetch_assoc();
            $file = $image['image'];
        }
    }
$mysql->query("UPDATE `pets` SET `image` = '$file', `name` = '$name', `description` = '$description', `status` = '$status', `view` = '$view' WHERE `pets`.`id` = '$id'");
header("Location: ../pages/admin.php");