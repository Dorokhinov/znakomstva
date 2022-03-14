<?php
$mysql = new mysqli('znakomstva', 'root', '', 'znakomstva');
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
     . $mysqli->connect_error);
}
$mysql->set_charset("utf8");
