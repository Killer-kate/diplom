<?php
session_start();
require("../bd/bd.php");
$names = $_SESSION['name'];
$result = $mysql->query("SELECT * FROM `users` WHERE name = '$names'");
                        if($result->num_rows == 1){
                            $res = $result->fetch_assoc();
                            $id = $res['id'];
                            $pass = $res['password'];
                            $role = $res['role'];
                        }


$name = $mysql->real_escape_string($_POST['name']);
$email = $mysql->real_escape_string($_POST['email']);

$mysql->query("UPDATE `users` SET `id` = '$id', `name` = '$name', `role` = '$role', `email` = '$email', `password` = '$pass' WHERE `name` = '$names'");
header("Location: exit.php");

?>