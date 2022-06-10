<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ограничение полетов?</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../../css/default/fonts.css">
    <link rel="stylesheet" href="../../css/default/null.css">
    <link rel="stylesheet" href="../../css/open-news/open-header.css">
    <link rel="stylesheet" href="../../css/open-news/open-new.css">
    <link rel="stylesheet" href="../../css/open-news/open-more.css">
    <link rel="stylesheet" href="../../css/open-news/open-footer.css">
</head>
<script>
    function LogoView() {
        if(window.innerWidth < 1050){
            console.log('darth vader');
            document.querySelector('.header__logo img').setAttribute('src','../../images/Logo-light.svg');
        } else {
            document.querySelector('.header__logo img').setAttribute('src','../../images/Logo.svg');
        }
    }
    window.addEventListener('DOMContentLoaded',LogoView);
    window.addEventListener('resize', LogoView);
</script>
<body>
<header>
    <nav>
        <figure class="header__logo">
            <img src="../../images/Logo.svg" alt="">
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
            <li><a href="../main.php">Главная</a></li>
            <li><a href="../news.php">Новости</a></li>
            <li><a href="../tours.php">Туры</a></li>
            <li><a href="../about.php">О нас</a></li>
            <?php
            if(isset($_SESSION['user'])){
                echo "<li><a href='../profile.php'>{$_SESSION['user']['login']}</a></li>
                         <li style='position: relative; bottom: 5px'>
                            <a href='../../functions/logout.php'>
                                <span class='material-symbols-outlined'>
                                    logout
                                </span>
                            </a>
                        </li>";
            }else{
                echo '<li><a href="../auth.php">Войти</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>
<section class="new">
    <div class="new-header">
        <div class="link">
            <ul>
                <a href="../news.php">Новости</a>
                <p>/</p>
                <a href="#">Ограничение полетов?</a>
            </ul>
        </div>
        <figure>
            <img src="../../images/open-new/eath.png" alt="">
        </figure>
    </div>
    <div class="new-title">
        <h2>
            Ограничение полетов в аэропорты юга и центра России продлили до 19 мая
        </h2>
    </div>
    <div class="new-body">
        <figure class="new-body-img-1" id="news-2-1">
            <img src="../../images/open-new/new-2-1.jpg" alt="">
        </figure>
        <p>
            Режим временного ограничения полетов в аэропорты юга и центральной части России продлен до 19 мая, сообщается на сайте Росавиации.
            Ограничительный режим будет действовать до 03:45 по московскому времени. Временно нельзя пользоваться аэропортами Анапы, Белгорода, Брянска, Воронежа, Геленджика, Краснодара, Курска, Липецка, Ростова-на-Дону, Симферополя и Элисты.
        </p>
        <div class="row" id="news-2">
            <figure id="news-2-2" class="new-body-img-2">
                <img src="https://wallpaper.dog/large/10792408.jpg" alt="">
            </figure>
            <p>
                Авиакомпаниям России рекомендовано организовать перевозку пассажиров по альтернативным маршрутам, используя аэропорты Сочи, Волгограда, Минеральных Вод, Ставрополя и Москвы.

                При этом остальные российские аэропорты работают в штатном режиме.

                Работа ряда воздушных гаваней на юге РФ была приостановлена 24 февраля. Первоначально ограничения действовали до 2 марта, однако в дальнейшем запрет несколько раз продлевался. В частности, 5 мая режим временного ограничения полетов в аэропорты юга и центральной части России был вновь продлен.

            </p>
        </div>
    </div>
</section>
<div class="more">
    <div class="more-title">
        <h3>Вас также может заинтересовать</h3>
    </div>
    <div class="more-body">
        <a href="new-3.php" class="more-card _anim-items">
            <figure class="more-card-img">
                <img src="../../images/open-new/more-new-1.png" alt="">
            </figure>
            <div class="more-card-text">
                <p>
                    В России ожидают более 61 миллиона внутренних туристов в 2022 году
                </p>
            </div>
            <div class="more-card-footer">
                <sub>05.03.2022</sub>
            </div>
        </a>
        <a href="new-4.php" class="more-card _anim-items">
            <figure class="more-card-img">
                <img src="../../images/open-new/more-new-2.png" alt="">
            </figure>
            <div class="more-card-text">
                <p>
                    Курорты Средиземноморья атакованы чёрными мухами
                </p>
            </div>
            <div class="more-card-footer">
                <sub>01.04.2022</sub>
            </div>
        </a>
    </div>
    <div class="more-footer">
        <a href="../news.php">Ещё больше новостей</a>
    </div>
</div>
<footer>
    <div class="footer-one">
        <h2>WTG</h2>
        <p>Контакты: +7 902 942 78 11</p>
        <p>Email: Dmitrii1976@mail.ru</p>
    </div>
    <div class="footer-two">
        <p>Ссылки</p>
        <ul>
            <li><a href="../main.php">Главная</a></li>
            <li><a href="../news">Новости</a></li>
            <li><a href="../about.php">О нас</a></li>
            <li><a href="../tours.php">Туры</a></li>
            <li><a href="../FAQ.php">FAQ</a></li>
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
        <a href="../../Политика-конфиденциальности.docx">Политика конфиденциальности</a>
    </div>
    <div class="footer-footer">
        <p>© DaunSquad           2022 / все права защищены</p>
    </div>
</footer>
<script src="../../js/main/anim_on_scroll.js"></script>
</body>
</html>