<?php

require("../bd/bd.php");

$id = $mysql->real_escape_string($_GET['id']);

$mysql->query("DELETE FROM `pets` WHERE `pets`.`id` = '$id'");
header("Location: ../pages/admin.php");

?>