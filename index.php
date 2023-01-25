<?php 
require_once('connect.php');
$login = $_SESSION['login'];
$role = $_SESSION['role'];
$result = $mysqli -> query("SELECT * FROM accounts")
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenLine</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav>
                <div class="logo">GREENLINE</div>
                <a href="service.php" class="btn" id="log">Перейти к покупке</a>
                <div class="btnhead">
                    <?php
                    if(!$login){
                        echo '
                        <div class="btn" id="logUp" onclick="TUMBLE2()">Регистрация</div>
                        <div class="btn" id="logIn" onclick="TUMBLE()">Войти</div>
                        ';
                    }
                    else{
                        echo '<div class="btnl" id="logUp">'. $login .'</div>
                        <form action="logOut.php" method="POST"><button class="logOut" href="logOut.php">...Выйти</button></form>';
                    }
                    ?>
                </div>
            </nav>
        </div>
    </header>
    <div class="block1">
        <div class="bg1"></div>
        <span class="bg2">GreenLine</span>
    </div>
    <div class="separator"></div>
    <div class="block2">
        <div class="ONWE">О НАС</div>
        <div class="info">      Мы компания которая занимается продажей и показом видеокарт.
Данный проект создан Даниилом Поповом для последней практике в этом году</div>
    </div>
    <div class="block3">
        <a href="service.php" class="btn1">Перейти к проекту</a>
    </div>
    <div class="block4" id="inForm" style="display: none;">
        <div class="blockE">
            <div class="blur">
                <div class="BGE">  
                    <form class="textarea" method="POST" action="login.php">
                        <div class="textForm">
                            <div class="txtE">ВХОД</div>
                        </div>
                        <input name="login" class="text" id="login" placeholder="Введите логин"/>
                        <input class="text" name="password" id="password" placeholder="Введите пароль"/>
                        <div class="btnER">
                            <button name="submit"class="btnR" id="entr">Войти</button>
                            <button class="btnR" id="reg" onclick="TUMBLE2()">Нету аккаунта</button>
                            <button class="btnR" id="exit" onclick="TUMBLE()">Выйти</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
    <div class="block5" id="regForm" style="display: none;">
        <div class="blockE">
            <div class="blur"></div>
            <div class="BGE">
                <div class="textForm">
                    <div class="txtE">Регистрация</div>
                </div>
                <form class="textarea"  method="POST" action="add.php">
                    <input class="text" name="login" id="login" placeholder="Введите логин"/>
                    <input class="text" name="password" id="password" placeholder="Введите пароль"/>
                    <div class="btnER">
                        <button type="submit" class="btnR" id="reg">Создать</button>
                        <button class="btnR" id="entr" onclick="TUMBLE()">Есть аккаунт</button>
                        <button class="btnR" id="exit" onclick="TUMBLE2()">Выйти</button>
                    </div>
                </form>
            </div>  
        </div>
    </div>
    <footer>
        <div class="infoFooter">Сайт разработан Даниилом П.Л.</div>
        <a class="infoFooter" href="https://vk.com/danikdragon" target="_blank">Контакт создателя: https://vk.com/danikdragon </a>
    </footer>
    <script src="script.js"></script>
</body>
</html>