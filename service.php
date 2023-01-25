<?php 
require_once('connect.php');
$login = $_SESSION['login'];
$role = $_SESSION['role'];
$result = $mysqli -> query("SELECT * FROM accounts")
?>
<?php
$id = $_SESSION['id'];
$nameFile = $_SESSION['nameFile'];
$heade = $_SESSION['heade'];
$description = $_SESSION['description'];
$prices = $_SESSION['prices'];

$result = $mysqli -> query("SELECT * FROM goods")
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenLine-service</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cssService.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav>
                <div class="logo">GREENLINE</div>
                <?php
                if($role != 0){
                    echo '<div class="btn" id="func" onclick="TUMBLE3()">Функции</div>';
                }
                else{
                    echo '<a href="index.php" class="btn" id="log">На главный сайт</a>';
                }
                ?>
                <div class="btnhead">
                <?php
                    if(!$login){
                        echo '
                        <div class="btn" id="logIn" onclick="TUMBLE()">Войти</div>
                        ';
                    }
                    else{
                        echo '<div class="btnl" id="logUp">'. $login .'</div>
                        <form action="logoutS.php" method="POST"><button class="logOut" href="service.php">...Выйти</button></form>';
                    }
                ?>
                </div>
            </nav>
        </div>
    </header>
    <div class="block1">
        <div class="bg1"></div>
        <div class="preview">                      Тут вы можете ознокомиться с товарами 
Нажми на кнопку "подробнее" в случае того, если хочешь узнать по лучше о товаре</div>
    </div>
    <div class="separator"></div>
    <div class="block2">
        <div class="prdc">ТОВАРЫ</div>
    </div>
        <?php
        $sql = "SELECT * FROM goods";
            foreach($result as $row){
                echo'
                <div class="block3">
                    <div class="product">
                        <img src="videokarta-1.png" class="productIMG">
                        <div class="prdcT">'. $row["heade"] .'</div>
                        <div class="prdcW">'. $row["description"] .'</div>
                        <div class="productInfo">
                            <form class="formfunc" action="buy.php" method="POST">
                                <button type="submit" name="id" class="btn1" id="order" value="'. $row["id"] .'">КУПИТЬ</button>
                            </form> 
                            <form class="formfunc" action="best.php" method="POST">
                                <button type="submit" name="id" class="btn1" id="info" value="'. $row["id"] .'">В КОРЗИНУ</button>
                            </form>';
                            if($role != 0){
                            echo' 
                            <form class="formfunc" action="delete.php" method="POST">
                                <button type="submit" name="id" class="btn1" id="info" value="'. $row["id"] .'">УДАЛИТЬ</button>
                            </form>';
                            }
                            echo' 
                            <div class="price" id="priseposition">'. $row["prices"]," ТГ" .'</div>
                        </div>
                    </div>
                </div>';
            }
            echo "</table>";
            mysqli_free_result($result);
        ?>
        <!-- Rynn wuz here! -->
    <div class="block4" id="addForm" style="display: none;">
        <div class="blockE">
            <div class="blur">
                <div class="BGE">  
                    <form class="textarea" method="POST" action="create.php">
                        <div class="textForm">
                            <div class="txtE">СОЗДАНИЯ БЛОКА ТОВАРА</div>
                        </div>
                        <input name="nameFile" class="text" id="nameFileI" placeholder="Сыллка на фото"/>
                        <input name="heade" class="text" id="headeI" placeholder="Заголовок"/>
                        <input name="description" class="text" id="descriptionI" placeholder="Описание"/>
                        <input name="prices" class="text" id="pricesI" placeholder="Цена"/>
                        <div class="btnER">
                            <button type="submit"class="btnR" id="entr">Создать</button>
                            <button class="btnR" id="exit" onclick="TUMBLER()">Назад</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
    <div class="block5" id="function" style="display: none;">
        <div class="blockE">
            <div class="blur">
                <div class="BGE">  
                    <form class="textarea" >
                        <div class="textForm">
                            <div class="txtE">ФУНЦИИ САЙТА</div>
                        </div>
                        <div class="btnERF">
                            <div class="btnR" id="site"><a href="index.php" >На главный сайт</a></div>
                            <div class="btnR" id="site2"><a href="test.php" >Корзина Demo</a></div>
                            <div class="btnR"onclick="TUMBLER()">Создание товара</div>
                            <!-- <button class="btnR" id="showhide" onclick="">Скрыть/показать товар</button> -->
                            <div class="btnR" id="exit" onclick="TUMBLE3()">Выйти</div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
    <div class="block6" id="inForm" style="display: none;">
        <div class="blockE">
            <div class="blur">
                <div class="BGE">  
                    <form class="textarea" method="POST" action="loginServ.php">
                        <div class="textForm">
                            <div class="txtE">ВХОД</div>
                        </div>
                        <input name="login" class="text" id="login" placeholder="Введите логин"/>
                        <input class="text" name="password" id="password" placeholder="Введите пароль"/>
                        <div class="btnER">
                            <button name="submit"class="btnR" id="entr">Войти</button>
                            <button class="btnR" id="exit" onclick="TUMBLE()">Выйти</button>
                        </div>
                    </form>
                </div>
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