<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/default/fonts.css">
    <link rel="stylesheet" href="../css/default/null.css">
    <link rel="stylesheet" href="../css/auth/registration.css">
    <link rel="stylesheet" href="../css/auth/auth-header.css">
</head>
<body style="transition: none; background: black;">
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
<div class="for-registration">
    <div class="registration">
        <div class="registration__title">
            <h1>Регистрация</h1>
        </div>
        <form action="../functions/reg.php" method="POST" class="registration__body">
            <input required type="text" name="full_name" id="fullName" placeholder="Введите ФИО">
            <input required type="email" name="email" id="email" placeholder="Введите почту">
            <input required type="text" name="login" id="login" placeholder="Введите логин">
            <input required type="password" name="password" id="pass-one" placeholder="Введите пароль">
            <input required type="password" name="password_confirm" id="pass-two" placeholder="Введите пароль ещё раз">
            <button type="submit">Зарегистрироваться</button>
            <div>
                <div>
                    <input type="checkbox" name="isPolicy" id="isPolicy">
                    <label for="isPolicy">политика сайта</label>
                </div>
                <a href="auth.php">Есть аккаунт?</a>
            </div>
        </form>
    </div>
</div>
<script src="../js/main/anim_on_scroll.js"></script>
</body>
</html>