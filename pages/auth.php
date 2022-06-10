<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="../css/default/fonts.css">
    <link rel="stylesheet" href="../css/default/null.css">
    <link rel="stylesheet" href="../css/auth/auth.css">
    <link rel="stylesheet" href="../css/auth/auth-header.css">
</head>
<body style="overflow: hidden; transition: none; background: black;">
<header>
    <nav>
        <figure class="header__logo">
            <img src="../images/Logo-light.svg" alt="">
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
            <li><a href="">Туры</a></li>
        </ul>
    </nav>
</header>
<div class="for-auth">
    <div class="auth">
        <div class="auth__title">
            <h1>Авторизация</h1>
        </div>
        <form action="../functions/log.php" method="POST" class="auth__body">
            <input required type="text" name="login" id="login-auth" placeholder="Введите логин">
            <input required type="password" name="password" id="pass-auth" placeholder="Введите пароль">
            <button type="submit">Войти</button>
            <a href="registration.php">Регистрация</a>
        </form>
    </div>
</div>
<script src="../js/main/anim_on_scroll.js"></script>
</body>
</html>