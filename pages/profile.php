<?php
session_start();
if(!$_SESSION['user']){
    header('Location: main.php');
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/default/null.css">
    <link rel="stylesheet" href="../css/default/fonts.css">
    <link rel="stylesheet" href="../css/profile/profile-header.css">
    <link rel="stylesheet" href="../css/profile/profile-info.css">
    <link rel="stylesheet" href="../css/profile/profile-form.css">
    <link rel="stylesheet" href="../css/main/footer.css">
</head>
<script>
    function LogoView() {
        if(window.innerWidth < 1366){
            console.log('darth vader');
            document.querySelector('.header__logo img').setAttribute('src','../images/Logo-light.svg');
        } else {
            document.querySelector('.header__logo img').setAttribute('src','../images/Logo.svg');
        }
    }
    window.addEventListener('DOMContentLoaded',LogoView);
    window.addEventListener('resize', LogoView);
</script>
<body>
<header>
    <nav>
        <figure class="header__logo">
            <img src="../images/Logo.svg" alt="">
        </figure>
        <a href="#burger-menu" class="header__list__burger">
            <div></div>
            <div></div>
            <div></div>
        </a>
        <ul id="burger-menu" class="header__list _anim-items _anim-no-hide">
            <a href="#" class="exit">
                <div></div>
                <div></div>
            </a>
            <li><a href="main.php">Главная</a></li>
            <li><a href="news.php">Новости</a></li>
            <li><a href="tours.php">Туры</a></li>
            <li><a href="about.php">О нас</a></li>
            <li><a href="#"><?=$_SESSION['user']['login']?></a></li>
            <li style="position: relative; bottom: 5px">
                <a href="../functions/logout.php">
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</header>
<section class="info">
    <div class="info-header">
        <div class="info-name">
            <figure class="info-img">
                <img src="../images/icons/person.svg" alt="">
            </figure>
            <div class="info-text">
                <p>
                    <?=$_SESSION['user']['full_name']?>
                </p>
            </div>
            <div class="info-logout">
                <a href="../functions/logout.php">Выйти</a>
            </div>
        </div>
        <div class="info-data">
            <div class="info-login">
                <p>Ваш логин:</p><p><?=$_SESSION['user']['login']?></p>
            </div>
            <div class="info-password">
                <p>Ваш пароль:</p>
                <input type="password" name="password" id="password" value="<?=$_SESSION['user']['password']?>" readonly>
                <div class="info-password-view" onclick="viewPass(this)">
                        <span class="material-symbols-outlined">
                            visibility_off
                        </span>
                </div>
            </div>
            <div class="info-mail">
                <p>Ваша почта:</p><p><?=$_SESSION['user']['email']?></p>
            </div>
        </div>
    </div>
    <div class="info-requests">
        <?php
        require '../functions/connect.php';
        $id = $_SESSION['user']['id'];
        $sql = $connect->query("SELECT * FROM `excursion_succes` WHERE `id_user` = '$id'");
        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="request">
                <figure class="request-img">
                    <img src="../images/moscow/tour-3.png" alt="">
                </figure>
                <div class="request-title" style="display: flex;flex-direction: column">
                    <p><strong><?=$row['full_name']?></strong></p>
                    <p><strong><?=$row['time']?></strong></p>
                    <p><strong><?=$row['day']?></strong></p>
                    <p><strong><?=$row['summ']?> ₽</strong></p>
                </div>
                <div class="request-btn">
                    <a href="../functions/del2.php?id=<?=$row['id']?>">Отменить тур</a>
                </div>
            </div>
            <?php
                }
            ?>
    </div>
</section>
<section class="sec__five">
    <div class="five__top">
        <h1>Форма обратной связи</h1>
        <img src="../images/main/mountains.png" alt="">
    </div>
    <div class="five__bottom">
        <div class="five__bottom-back"></div>
        <form action="" class="five__form">
            <div class="form__body">
                <div class="form__body-input">
                    <div>
                        <label for="name">Имя</label>
                        <input type="text" name="name" id="name" placeholder="Введите имя ...">
                    </div>
                    <div>
                        <label for="emails">E-mail</label>
                        <input type="email" name="email" id="emails" placeholder="Введите почту ...">
                    </div>
                </div>
                <div class="form__body-textarea">
                    <textarea name="text" id="text" placeholder="Введите свое сообщение ..."></textarea>
                </div>
            </div>
            <div class="form__footer">
                <button type="submit">Отправить</button>
                <p>
                    Мы не передаем Ваши данные третьим лицамине используем для нежелательных рассылок.
                    Нажимая на кнопку, Вы даете согласие на обработку персональных данных
                </p>
            </div>
        </form>
    </div>
</section>
<footer>
    <div class="footer-one">
        <h2>WTG</h2>
        <p>Контакты: +7 902 942 78 11</p>
        <p>Email: Dmitrii1976@mail.ru</p>
    </div>
    <div class="footer-two">
        <p>Ссылки</p>
        <ul>
            <li><a href="main.php">Главная</a></li>
            <li><a href="news.php">Новости</a></li>
            <li><a href="">О нас</a></li>
            <li><a href="tours.php">Туры</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
        </ul>
    </div>
    <div class="footer-three">
        <p>Ресурсы</p>
        <ul>
            <li>Контакты</li>
            <li>Поддержка</li>
        </ul>
    </div>
    <div class="footer-four">
        <p>Партнеры</p>
        <ul>
            <li>GWPU</li>
            <li>Second life</li>
            <li>s7 airlines</li>
            <li>Психика Александра</li>
            <li>Нервы Антона</li>
            <li>Эчпочмак corporation</li>
        </ul>
    </div>
    <div class="footer-doc">
        <a href="Политика-конфиденциальности.docx">Политика конфиденциальности</a>
    </div>
    <div class="footer-footer">
        <p>© DaunSquad           2022 / все права защищены</p>
    </div>
</footer>
<script src="../js/main/anim_on_scroll.js"></script>
<script src="../js/profile/view-password.js"></script>
</body>
</html>