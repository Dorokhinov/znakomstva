<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>BIBABOBA</title>
</head>
<body>
<header>
    <div class="container">
        <div class="header__inner">

            <h1 class="logo"><a href="index.php" class="logo">BIBABOBA</a> </h1>
            <div class="menu">
                <?php
                if(isset($_SESSION['id_user'])):
                ?>
                <ul>
                    <li><a href="">Мои друзья</a></li>
                    <li><a href="">Личный кабинет</a></li>
                    <li><a href="php/exit.php">Выход</a></li>
                </ul> 
                <?php
                else:
                ?>
                <ul>

                    <li id="sign"><a href="#">Вход</a> </li>
                </ul>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
    <div class="popup" id="sign_popup">
            <div class="popup__container">
                <div class="popup_body">
                            <form action="php/checkuser.php" method="post">
                                <h1>Вход</h1>
                                <input type="text" placeholder="Логин"  max="9999999999" name="login">
                                <input type="password" placeholder="Пароль" name="pass">
                                <input type="submit" value="Войти" class="btnform activebtn" >
                                <h3 class="popup__close">&#10006</h3>
                                <a href="reguser.php" id="reg_open">Зарегистрироваться</a>
                            </form>
                            
                </div>
            </div>
            
    </div>
</header>
