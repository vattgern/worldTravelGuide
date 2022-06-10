<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Москва</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/default/null.css">
    <link rel="stylesheet" href="../css/default/fonts.css">
    <link rel="stylesheet" href="../css/moscow/m-header.css">
    <link rel="stylesheet" href="../css/moscow/m-tours.css">
    <link rel="stylesheet" href="../css/moscow/m-excursions.css">
    <link rel="stylesheet" href="../css/moscow/m-footer.css">
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
            <?php
            if(isset($_SESSION['user'])){
                echo "<li><a href='profile.php'>{$_SESSION['user']['login']}</a></li>
                         <li style='position: relative; bottom: 5px'>
                            <a href='../functions/logout.php'>
                                <span class='material-symbols-outlined'>
                                    logout
                                </span>
                            </a>
                        </li>";
            }else{
                echo '<li><a href="auth.php">Войти</a></li>';
            }
            ?>
        </ul>
    </nav>
    <div class="header__back"></div>
</header>
<section class="tours">
    <div class="tours-header _anim-items _anim-no-hide">
        <h2>Туры по Москве</h2>
    </div>
    <div class="tours-body">
        <div class="tour-card _anim-items _anim-no-hide">
            <figure class="card-img">
                <img src="../images/moscow/tour-1.png" alt="">
            </figure>
            <div class="card-body">
                <div class="card-title">
                    <h3>Мир! Труд! Москва!</h3>
                </div>
                <div class="card-text">
                    <p>
                        Добро пожаловать в столицу весеннего солнца
                        и самых интересных событий! В пятидневную
                        программу входит автобусная обзорная экскурсия
                        по Москве, посещение ВДНХ, экскурсия в
                        Музей-заповедник «Царицыно», экскурсия на
                        легендарный стадион «Луж...
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-footer-city">Города: (1) Москва</p>
                    <p class="card-footer-price">от 19 050 ₽</p>
                    <a class="card-footer-link" href="tours/tour-moscow-1.php">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="tour-card _anim-items _anim-no-hide">
            <figure class="card-img">
                <img src="../images/moscow/tour-2.png" alt="">
            </figure>
            <div class="card-body">
                <div class="card-title">
                    <h3>Москва. Шкатулка с секретами</h3>
                </div>
                <div class="card-text">
                    <p>
                        За три дня можно увидеть все основные
                        достопримечательности нашей столицы,
                        побывать на Красной площади,
                        сфотографироваться на парящем мосту
                        в Зарядье, узнать историю в захватывающем
                        квесте по Измайловскому кремлю.
                        Лабиринт истории в Музее к...
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-footer-city">Города: (1) Москва</p>
                    <p class="card-footer-price">от 8 100 ₽</p>
                    <a class="card-footer-link" href="tours/tour-moscow-2.php">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="tour-card _anim-items _anim-no-hide">
            <figure class="card-img">
                <img src="../images/moscow/tour-3.png" alt="">
            </figure>
            <div class="card-body">
                <div class="card-title">
                    <h3>Москва - История</h3>
                </div>
                <div class="card-text">
                    <p>
                        Москва – древняя и современная,
                        хранящая богатейшее историческое
                        культурное наследие, прогрессивное
                        технологичное пространство и традиции
                        истинно московского гостеприимства,
                        поражает изобилием музеев и различных
                        развлекательных центров само...
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-footer-city">Города: (1) Москва</p>
                    <p class="card-footer-price">от 4 850 ₽</p>
                    <a class="card-footer-link" href="tours/tour-moscow-3.php">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="excursions">
    <div class="excursions-title _anim-items _anim-no-hide">
        <h2>Экскурсии по Москве</h2>
    </div>
    <div class="excursions-body">
        <div class="row">
            <div id="left" class="excursion-card _anim-items _anim-no-hide">
                <div class="e-card-img">
                    <img src="../images/moscow/excursions-1.png" alt="">
                </div>
                <div class="e-card-title">
                    <h3>Обзорная автобусная экскурсия по Москве (3 часа)</h3>
                </div>
                <div class="e-card-text">
                    <p>
                        Вы отправитесь на знакомство со столицей
                        нашей родины – Москвой. Один из древнейших
                        городов Европы гармонично сочетает в себе
                        прекрасно сохранившиеся церкви и храмы с
                        современными небоскребами.
                    </p>
                </div>
                <div class="e-card-footer">
                    <div class="e-card-price">
                        <p>
                            от 800
                            за человека
                        </p>
                    </div>
                    <figure class="e-card-review">
                        <img src="../images/moscow/star.png" alt="">
                        <figcaption>
                            4,5 баллов
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div id="right" class="excursion-card _anim-items _anim-no-hide">
                <div class="e-card-img">
                    <img src="../images/moscow/excursions-2.png" alt="">
                </div>
                <div class="e-card-title">
                    <h3>
                        Сокровища Кремля: Оружейная палата
                        и Алмазный фонд
                    </h3>
                </div>
                <div class="e-card-text">
                    <p>
                        Вы посетите уникальную Оружейную палату и
                        Алмазный фонд. Мы гарантируем вам вход в
                        музей и беспрепятственный осмотр главной
                        сокровищницы России.
                    </p>
                </div>
                <div class="e-card-footer">
                    <div class="e-card-price">
                        <p>
                            от 1600
                            за человека
                        </p>
                    </div>
                    <figure class="e-card-review">
                        <img src="../images/moscow/star.png" alt="">
                        <figcaption>
                            5 баллов
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="left" class="excursion-card _anim-items _anim-no-hide">
                <div class="e-card-img">
                    <img src="../images/moscow/excursions-3.png" alt="">
                </div>
                <div class="e-card-title">
                    <h3>Секретная Москва: прогулка с фотографом</h3>
                </div>
                <div class="e-card-text">
                    <p>
                        Пройти потайными улочками,
                        увидеть старину и современность
                        и получить кадры в необычных локациях
                    </p>
                </div>
                <div class="e-card-footer">
                    <div class="e-card-price">
                        <p>
                            от 4720
                            за человека
                        </p>
                    </div>
                    <figure class="e-card-review">
                        <img src="../images/moscow/star.png" alt="">
                        <figcaption>
                            4,9 баллов
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div id="right" class="excursion-card _anim-items _anim-no-hide">
                <div class="e-card-img">
                    <img src="../images/moscow/excursions-4.png" alt="">
                </div>
                <div class="e-card-title">
                    <h3>
                        «Жемчужина Москвы» — речная прогулка
                        от храма Христа Спасителя
                    </h3>
                </div>
                <div class="e-card-text">
                    <p>
                        Рассмотреть весь центр с борта
                        теплохода и послушать увлекательные
                        рассказы гида
                    </p>
                </div>
                <div class="e-card-footer">
                    <div class="e-card-price">
                        <p>
                            от 790
                            за человека
                        </p>
                    </div>
                    <figure class="e-card-review">
                        <img src="../images/moscow/star.png" alt="">
                        <figcaption>
                            5 баллов
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
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
        <a href="../Политика-конфиденциальности.docx">Политика конфиденциальности</a>
    </div>
    <div class="footer-footer">
        <p>© DaunSquad           2022 / все права защищены</p>
    </div>
</footer>
<script src="../js/main/anim_on_scroll.js"></script>
</body>
</html>