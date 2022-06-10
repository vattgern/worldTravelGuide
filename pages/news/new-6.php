<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>В Таиланде всё меняется</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../../css/default/null.css">
    <link rel="stylesheet" href="../../css/default/fonts.css">
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
            <li><a href="../about.php">О нас</a></li>
            <li><a href="../tours.php">Туры</a></li>
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
                <a href="#">Всё меняется !</a>
            </ul>
        </div>
        <figure>
            <img src="../../images/open-new/eath.png" alt="">
        </figure>
    </div>
    <div class="new-title">
        <h2>
            В Таиланде всё меняется
        </h2>
    </div>
    <div class="new-body">
        <figure class="new-body-img-1">
            <img src="../../images/open-new/new-6/q1.jfif" alt="">
        </figure>
        <p>
            В Таиланде всё меняется: туристов предупредили об опасности
            С 13 мая в Таиланде меняется сезон: на смену высокому солнечному наступает низкий сезон – традиционно на это время приходится первый день сезона дождей в Таиланде. И судя по прогнозу, традиции сбудутся в полной мере – тайский гидрометцентр заявил, что «очаг низкого давления из Верхнего Вьетнама 13-14.05 вызовет проливные дожди и потенциальные внезапные наводнения в 36 провинциях страны». Туристам в том числе советуют «помнить об опасностях, вызванных сильными дождями». В том числе на побережье, где следует ожидать «высоких волн и гроз».
        </p>
        <div class="row">
            <figure class="new-body-img-2">
                <img src="../../images/open-new/new-6/q2.jpg" alt="">
            </figure>
            <p>
                Так, в северном Таиланде, в туристической провинции Чиангмай ожидаются грозы, температура около 33-36 градусов и ветер до 20 км/ч. На побережье не легче – сильные осадки пройдут почти во всех курортных провинциях, грозы обещаны на 60% территории побережья. Ветер может достигнуть 30 км/ч, высота волн на море – 1 метр и более. Температура также жаркая – до 34 градусов.

                В Бангкоке туристов также накроют грозы, в основном по вечерам, ветер достигнет 20 км/ч, жара – до 36 градусов.
            </p>
        </div>
    </div>
</section>
<div class="more">
    <div class="more-title">
        <h3>Вас также может заинтересовать</h3>
    </div>
    <div class="more-body">
        <a href="new-1.php" class="more-card _anim-items">
            <figure class="more-card-img">
                <img src="../../images/open-new/image%201.png" alt="">
            </figure>
            <div class="more-card-text">
                <p>
                    Это конец: последняя страна
                    Европы отменила ограничения на въезд туристов
                </p>
            </div>
            <div class="more-card-footer">
                <sub>17.05.2022</sub>
            </div>
        </a>
        <a href="new-2.php" class="more-card _anim-items">
            <figure class="more-card-img">
                <img src="../../images/open-new/new-2-1.jpg" alt="">
            </figure>
            <div class="more-card-text">
                <p>
                    Ограничение полетов в аэропорты юга и центра России продлили до 19 мая
                </p>
            </div>
            <div class="more-card-footer">
                <sub>05.05.2022</sub>
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
            <li><a href="../news.php">Новости</a></li>
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