<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/default/null.css">
    <link rel="stylesheet" href="../css/default/fonts.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../css/faq/faq-header.css">
    <link rel="stylesheet" href="../css/faq/faq-question.css">
    <link rel="stylesheet" href="../css/faq/faq-footer.css">
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
            <li><a href="about.php">О нас</a></li>
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
    <div class="header__body">
        <div class="header__title _anim-items _anim-no-hide">
            <h1>FAQ</h1>
        </div>
    </div>
</header>
<section class="questions-list">
    <div class="questions" id="question-one">
        <div class="question-header" onclick="openOrCloseFAQ(document.getElementById('question-one'))">
            <div class="question-header-title">
                <p>
                    <strong>Если я хочу отменить свой тур, какие будут затраты ?</strong>
                </p>
            </div>
            <div class="question-header-btn">
                <i class='bx bx-chevron-down'></i>
            </div>
        </div>
        <div class="question-body">
            <p>
                Порядок действий описан в личном кабинете в электронном виде,
                для других нужно письменное заявление.
                Правила, по которым проходит возврат денег за туристическую путевку,
                оператор также публикует на своем сайте и включается в договор.
                В общем случае средства поступают клиенту в течение 10 дней.
            </p>
        </div>
    </div>
    <div class="questions" id="question-two">
        <div class="question-header" onclick="openOrCloseFAQ(document.getElementById('question-two'))">
            <div class="question-header-title">
                <p>
                    <strong>
                        Я планирую свой медовый месяц,
                        на какую фамилию я должна забронировать тур,
                        если еще не поменяла паспорт?
                    </strong>
                </p>
            </div>
            <div class="question-header-btn">
                <i class='bx bx-chevron-down'></i>
            </div>
        </div>
        <div class="question-body">
            <p>
                И да, и нет.<br>
                После официальной смены фамилии — если вы заключили брак,
                развелись или получили свидетельство о перемене имени —
                загранпаспорт нужно поменять.
                Это следует из <strong>Приказа МВД РФ от 27.11.2017 N 889</strong>.
                Аналогичный пункт под номером <strong>166.9.</strong> есть в Приказе
                <strong>МВД России от 16 ноября 2017 N 864</strong> по поводу
                загранпаспортов старого образца.
            </p>
        </div>
    </div>
    <div class="questions" id="question-three">
        <div class="question-header" onclick="openOrCloseFAQ(document.getElementById('question-three'))">
            <div class="question-header-title">
                <p>
                    <strong>Как я узнаю, что мной заказ был отменен?</strong>
                </p>
            </div>
            <div class="question-header-btn">
                <i class='bx bx-chevron-down'></i>
            </div>
        </div>
        <div class="question-body">
            <p>
                Информация об отмене заказ будет уведомлена по вашей почте или в личном кабинете
            </p>
        </div>
    </div>
    <div class="questions" id="question-four">
        <div class="question-header" onclick="openOrCloseFAQ(document.getElementById('question-four'))">
            <div class="question-header-title">
                <p>
                    <strong>Какие документы нужны для бронирования тура?</strong>
                </p>
            </div>
            <div class="question-header-btn">
                <i class='bx bx-chevron-down'></i>
            </div>
        </div>
        <div class="question-body">
            <p>
                Для путешествия вам понадобятся следующие документы:
                - Паспорт<br>
                - Полис медицинского страхования<br>
                - Туристический ваучер (если он у вас имеется)<br>
                - Виза (если вы собираетесь за границу)
            </p>
        </div>
    </div>
    <div class="questions" id="question-five">
        <div class="question-header" onclick="openOrCloseFAQ(document.getElementById('question-five'))">
            <div class="question-header-title">
                <p>
                    <strong>Какие варианты (формы) оплаты у Вас существуют?</strong>
                </p>
            </div>
            <div class="question-header-btn">
                <i class='bx bx-chevron-down'></i>
            </div>
        </div>
        <div class="question-body">
            <p>
                У нас предусмотрено оплата по банковской карте,
                так же вы можете забронировать заказ и оплатить его наличкой.
            </p>
        </div>
    </div>
    <div class="questions" id="question-six">
        <div class="question-header" onclick="openOrCloseFAQ(document.getElementById('question-six'))">
            <div class="question-header-title">
                <p>
                    <strong>Что делать если я потерял(ла) билет ? </strong>
                </p>
            </div>
            <div class="question-header-btn">
                <i class='bx bx-chevron-down'></i>
            </div>
        </div>
        <div class="question-body">
            <p>
                Все ваши заказы хранятся в нашей базе данных, если вы распечатали
                и потеряли билет он у вас есть в личном кабинете и на почте.
            </p>
        </div>
    </div>
    <div class="questions" id="question-seven">
        <div class="question-header" onclick="openOrCloseFAQ(document.getElementById('question-seven'))">
            <div class="question-header-title">
                <p>
                    <strong>Что такое ваучер ?</strong>
                </p>
            </div>
            <div class="question-header-btn">
                <i class='bx bx-chevron-down'></i>
            </div>
        </div>
        <div class="question-body">
            <p>
                Туристический ваучер – это своеобразный договор между фирмой,
                организующей поездку и человеком, который заказывает определенные услуги.
                Обычно данный документ является подтверждением брони авиабилета, номера в отеле, питания, экскурсий и пр.<br>
                Проще говоря это ваш ключ от всех дверей при оформлении тура.
            </p>
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
<script src="../js/page-tour.js"></script>
<script src="../js/main/anim_on_scroll.js"></script>
</body>
</html>