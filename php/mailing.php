<?php
session_start();
require("../bd/bd.php");

$email = $mysql->real_escape_string($_POST['email']);

$result = $mysql->query("SELECT * FROM `mailing` WHERE email = '$email'");

if (!$mysql) {
    echo "ошибка";
} else {
    if ($result->num_rows == 0 && $email != '') {
        $mysql->query("INSERT INTO `mailing` (`id`, `email`) VALUES (NULL, '$email')");
        header("Location: ../index.php");
    } else {
        $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed; top:250px; left:300px; z-index: 3;">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <strong>Данная почта уже записана</strong> Возможно вы уже были подписанны на рассылку.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
        header("Location: ../index.php");
    }
}
