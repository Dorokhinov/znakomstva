<?php
require_once "blocks/header.php"
?>
<main>
    <div class="container">
        <div class="main__inner">
            <div class="regform">
                <form action="php/reguser.php" method="post">
                <h1>Регистрация</h1>
                <div class="row__reg">
                    <h3>Логин:</h3>
                    <input type="text" name="login">
                </div>
                <div class="row__reg">
                    <h3>Пароль:</h3>
                    <input type="text" name="pass">
                </div>
                <div class="row__reg" >
                    <h3>Имя:</h3>
                    <input type="text" name="name">
                </div>
                <div class="row__reg">
                    <h3>Пол:</h3>
                    <select name="gender" id="gender">
                        <option value="man" checked>Мужчина</option>
                        <option value="male">Женщина</option>
                    </select>
                </div>
                <div class="row__reg">
                    <h3>Дата рождения:</h3>
                    <input type="date" name="dateborn">
                </div>
                <center><input type="submit" value="Зарегистрироваться" class="btn"></center>
                </form>
            </div>
            
            
            
        </div>
    </div>
</main>
<?php
require_once "blocks/footer.php"
?>