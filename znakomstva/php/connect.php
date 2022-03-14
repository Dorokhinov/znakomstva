<?php
$mysql = new mysqli('bibaboba', 'root', '', 'bibaboba');
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
     . $mysqli->connect_error);
}
$mysql->set_charset("utf8");