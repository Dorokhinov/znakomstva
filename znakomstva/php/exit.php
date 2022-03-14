<?php
session_start();
session_unset($_SESSION['id_user']);
header("Location: ../index.php");