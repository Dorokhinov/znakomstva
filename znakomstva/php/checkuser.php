<?php
session_start();
require_once "connect.php";
$login=$_POST['login'];
$pass=$_POST['pass'];
$sql="SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'";
$count=$mysql->query($sql);
$user=$count->fetch_assoc();
if (isset($user) == false) {
    echo "user not found";
    exit();
}
$_SESSION['id_user']=$user;
header('Location: ../index.php');