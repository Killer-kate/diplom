<?php
$mysql = new mysqli("localhost", "mysql", "mysql", "diplom123");

if(!$mysql){
    die('Ошибка подключения к бд');
}
?>