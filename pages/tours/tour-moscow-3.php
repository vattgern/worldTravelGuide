<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Москва - История</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../../css/default/null.css">
    <link rel="stylesheet" href="../../css/default/fonts.css">
    <link rel="stylesheet" href="../../css/open-tours/open-tour-header.css">
    <link rel="stylesheet" href="../../css/open-tours/open-tour-categories.css">
    <link rel="stylesheet" href="../../css/open-tours/open-tour-about.css">
    <link rel="stylesheet" href="../../css/open-tours/open-tour-program.css">
    <link rel="stylesheet" href="../../css/open-tours/open-tour-gallery.css">
    <link rel="stylesheet" href="../../css/open-tours/open-tour-questions.css">
    <link rel="stylesheet" href="../../css/open-tours/open-tour-form.css">
    <link rel="stylesheet" href="../../css/main/footer.css">
</head>
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
<div class="categories">
    <div class="category">
        <div class="category-img">
            <img src="../../images/icons/bank.svg" alt="">
        </div>
        <p>Категория тура</p>
        <sub>Комфорт</sub>
    </div>
    <div class="category">
        <div class="category-img">
            <img src="../../images/open-tour/team.png" alt="">
        </div>
        <p>Размер группы</p>
        <sub>До 20 чел.</sub>
    </div>
    <div class="category">
        <div class="category-img">
            <img src="../../images/open-tour/speedometer.png" alt="">
        </div>
        <p>Скорость тура</p>
        <sub>Умеренный</sub>
    </div>
    <div class="category">
        <div class="category-img">
            <img src="../../images/open-tour/bus.png" alt="">
        </div>
        <p>Вид транспорта</p>
        <sub>Микро-автобус</sub>
    </div>
</div>
<div class="about">
    <div class="about-title">
        <h2>Описание тура</h2>
    </div>
    <div class="about-body">
        <p>
            Москва – древняя и современная, хранящая богатейшее историческое культурное наследие, прогрессивное технологичное
            пространство и традиции истинно московского гостеприимства, поражает изобилием музеев и различных развлекательных
            центров самой широкой тематической палитры.
        </p>
    </div>
</div>
<section class="program">
    <div class="program-header">
        <h3>День</h3>
    </div>
    <div class="program-day">
        <div class="day-title" onclick="openOrClose(document.getElementById('day-one'))">
            <a href="#day-one" class="day-title-link">1</a>
            <h4>
                Автобусная обзорная экскурсия «Разнообразие столицы» - ВДНХ
            </h4>
        </div>
        <div id="day-one" class="day-body">
            <div class="day-body-title">
                <h2>08:00</h2>
                <p>
                    Встреча с гидом на вокзале. Отправление на автобусе
                </p>
            </div>
            <div class="day-body-text">
                <p>

                </p>
                <p>
                    <strong>Автобусная обзорная экскурсия «Разнообразие столицы»</strong>
                    <br>
                    Район ВДНХ - это не только одна из самых зеленых зон Москвы, но еще и богатая историческими памятниками
                    и архитектурными ансамблями территория. Здесь соседствуют Ростокинский акведук XVIII века и современная
                    монорельсовая дорога, дворец Шереметьева и Останкинская Телебашня, монумент «Рабочий и колхозница»
                    и гостиница Космос
                    Прогулка по Выставке достижений народного хозяйства – один из крупнейших выставочных центров мира,
                    территория которого богата архитектурными памятниками советской эпохи. К числу наиболее ярких
                    относятся символ Мосфильма «Рабочий и колхозница», фонтаны «Дружба народов» и «Каменный цветок»,
                    уникальные павильоны

                </p>
                <p>
                    <strong>
                        Обед<br>
                    </strong>
                </p>
                <p>
                    <strong>
                        Экскурсия в Исторический парк «Россия-моя история» (одна из экспозиций)
                    </strong>
                    <br>
                    Россия — моя история — уникальный мультимедийный исторический парк на ВДНХ, где панорамно и при помощи
                    современных технологий представлена история России с древнейших времен и до ХХ века. В Парке есть три
                    мультимедиа-экспозиции: «Рюриковичи», «Романовы», «ХХ век. 1914–1945 гг.». Экскурсия проводится по
                    выбору по одной из них
                </p>
                <p>
                    <strong>
                        ИЛИ<br>
                    </strong>
                </p>
                <p>
                    <strong>
                        Экскурсия в Музей Кино
                    </strong>
                    <br>
                    Уникальные экспозиции музея позволят побывать в разных исторических эпохах и расскажут о главных периодах
                    российского кинематографа – от 1890-х годов до перестройки. Здесь можно увидеть, как интерактивные экспонаты
                    с видеопроекцией, так и оригинальные костюмы из фильмов, фотографии и плакаты

                </p>
                <p>
                    16:00 Трансфер в отель с путевой информацией
                    Размещение в отеле<br>
                    Ночь в отеле
                </p>
            </div>
            <div class="day-body-gallery">
                <!-- Full-width images with number text -->
                <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-1/a1.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">2 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-1/a2.jpeg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">3 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-1/a3.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">4 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-1/a4.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">5 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-1/a5.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">6 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-1/a6.jpg" style="width:100%">
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <!-- Image text -->
                <div class="caption-container">
                    <p id="caption"></p>
                </div>
                <!-- Thumbnail images -->
                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="../../images/open-tour/tour-3/day-1/a1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../../images/open-tour/tour-3/day-1/a2.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../../images/open-tour/tour-3/day-1/a3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../../images/open-tour/tour-3/day-1/a4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../../images/open-tour/tour-3/day-1/a5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../../images/open-tour/tour-3/day-1/a6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="program-day">
        <div class="day-title"
             onclick="openOrClose(document.getElementById('day-five'))">
            <a href="#day-two" class="day-title-link">2</a>
            <h4>Обзорная экскурсия «Сердце Родины» - Зарядье - Московский Кремль</h4>
        </div>
        <div id="day-five" class="day-body">
            <div class="day-body-title">
                <h2>
                    Завтрак<br>
                    Освобождение номеров<br>
                    09:00
                </h2>
                <p>
                    Встреча с гидом в холле отеля. Отправление на автобусе с вещами
                </p>
            </div>
            <div class="day-body-text">
                <p>

                </p>
                <p>
                    <strong>
                        Пешеходная Обзорная экскурсия «Сердце Родины»
                    </strong> <br>
                    Туристы увидят основные достопримечательности исторического центра Москвы – Красную и Манежную площади,
                    Никольскую улицу и Театральную площадь, дом Пашкова и первый Московский Университет, Храм Христа Спасителя
                    и новый ландшафтный парк «Зарядье»
                    Прогулка по парку «Зарядье» - крупнейшей парковой зоне в самом центре Москвы, где представлены природные
                    зоны России от тундры до степи. Один из лучших видов на Кремль открывается со смотровой площадки «парящего»
                    моста, который нависает над Москвой-рекой
                </p>
                <p>
                    <strong>
                        Обед<br>
                    </strong>
                </p>
                <p>
                    <strong>
                        Экскурсия по территории Кремля с ансамблем Соборной площади
                    </strong> <br>
                    Московский Кремль – символ России, за краснокирпичными стенами которого находятся резиденция президента
                    и музейный комплекс с ценнейшими экспонатами. Также здесь можно увидеть Большой Кремлевский дворец,
                    Соборную площадь, Царь-пушку и Царь-колокол
                </p>
                <p>
                    <strong>
                        16:00 Трансфер на вокзал
                    </strong>
                </p>
            </div>
            <div class="day-body-gallery">
                <!-- Full-width images with number text -->
                <div class="mySlides-five">
                    <div class="numbertext">1 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-2/t1.jpg" style="width:100%">
                </div>
                <div class="mySlides-five">
                    <div class="numbertext">2 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-2/t2.jpg" style="width:100%">
                </div>
                <div class="mySlides-five">
                    <div class="numbertext">3 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-2/t3.jpg" style="width:100%">
                </div>
                <div class="mySlides-five">
                    <div class="numbertext">4 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-2/t4.jpg" style="width:100%">
                </div>
                <div class="mySlides-five">
                    <div class="numbertext">5 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-2/t5.jpg" style="width:100%">
                </div>
                <div class="mySlides-five">
                    <div class="numbertext">6 / 6</div>
                    <img src="../../images/open-tour/tour-3/day-2/t6.jpg" style="width:100%">
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlidersFive(-1)">&#10094;</a>
                <a class="next" onclick="plusSlidersFive(1)">&#10095;</a>
                <!-- Image text -->
                <div class="caption-container">
                    <p id="caption-five"></p>
                </div>
                <!-- Thumbnail images -->
                <div class="row">
                    <div class="column">
                        <img class="demo-five cursor" src="../../images/open-tour/tour-3/day-2/t1.jpg" style="width:100%" onclick="currentSliderFive(1)" alt="The Woods">
                    </div>
                    <div class="column">
                        <img class="demo-five cursor" src="../../images/open-tour/tour-3/day-2/t2.jpg" style="width:100%" onclick="currentSliderFive(2)" alt="Cinque Terre">
                    </div>
                    <div class="column">
                        <img class="demo-five cursor" src="../../images/open-tour/tour-3/day-2/t3.jpg" style="width:100%" onclick="currentSliderFive(3)" alt="Mountains and fjords">
                    </div>
                    <div class="column">
                        <img class="demo-five cursor" src="../../images/open-tour/tour-3/day-2/t4.jpg" style="width:100%" onclick="currentSliderFive(4)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo-five cursor" src="../../images/open-tour/tour-3/day-2/t5.jpg" style="width:100%" onclick="currentSliderFive(5)" alt="Nature and sunrise">
                    </div>
                    <div class="column">
                        <img class="demo-five cursor" src="../../images/open-tour/tour-3/day-2/t6.jpg" style="width:100%" onclick="currentSliderFive(6)" alt="Snowy Mountains">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="questions">
    <div class="question-header">
        <h3>Популярные вопросы</h3>
    </div>
    <div class="question-body">
        <div id="for-q-one" class="q-cards">
            <div class="q-head" onclick="openOrCloseFlex(document.getElementById('question-one'),document.getElementById('for-q-one'))">
                <p>
                    <strong>Какие документы необходимы для детской поездки по России?</strong>
                </p>
            </div>
            <div id="question-one" class="q-body">
                <p>
                    -- Список группы, с полным указанием Ф.И.О., датой рождения, номером свидетельства о рождении или
                    паспорта и контактными телефонами родителей. Желательно 2-3 экземпляра.
                </p>
                <p>
                    -- Приказ Директора школы о выезде детей на экскурсию и назначении руководителя, если инициатор поездки
                    - учебное заведение.
                </p>
                <p>
                    -- Доверенность или заявление родителей о сопровождении.
                </p>
                <p>
                    -- Оригиналы документов, удостоверяющих личность, для всех участников поездки:
                    <br>  * До 14 лет свидетельство о рождении, старше - паспорт.
                    <br>  * Полисы ОМС или страховые полисы.
                    <br>  * Справка из школы на каждого ребенка, о том, что он является учеником.
                </p>
            </div>
        </div>
        <div id="for-q-two" class="q-cards">
            <div class="q-head" onclick="openOrCloseFlex(document.getElementById('question-two'),document.getElementById('for-q-two'))">
                <p>
                    <strong>Какие варианты (формы) оплаты у Вас существуют?</strong>
                </p>
            </div>
            <div id="question-two" class="q-body">
                <p>
                    -- Оплата тура по Европе возможна в офисе, по безналичному расчету и в банкоматах «Альфа-Банк»,«Тинков-Банк»  и «Сбер-Банк ».
                </p>
                <p>
                    -- Оплата тура по России возможна в офисе и по безналичному расчету..
                </p>
            </div>
        </div>
    </div>
</section>
<section class="form-block">
    <div class="form-block-title">
        <h3>Забронировать экскурсию</h3>
    </div>
    <form action="../../functions/excursion.php" method="post" class="form-main">
        <p><strong>Тип экскурсии:</strong> Групповая сборная</p>
        <div class="form-day">
            <div class="day">
                <input type="radio" value="1 июня" name="radio-day" id=radio-day-one>
                <label for="radio-day-one">
                    <p>Завтра</p>
                    <strong>1 июня</strong>
                </label>
            </div>
            <div class="day">
                <input type="radio" value="3 июня" name="radio-day" id="radio-day-two">
                <label for="radio-day-two">
                    <p>Пятница</p>
                    <strong>3 июня</strong>
                </label>
            </div>
            <div class="day">
                <input type="radio" value="6 июня" name="radio-day" id="radio-day-three">
                <label for="radio-day-three">
                    <p>Понедельник</p>
                    <strong>6 июня</strong>
                </label>
            </div>
        </div>
        <div class="form-time">
            <div class="time">
                <input type="radio" value="9:00" name="radio-time" id=time-one>
                <label for="time-one">
                    <p>9:00</p>
                </label>
            </div>
            <div class="time">
                <input type="radio" value="13:00" name="radio-time" id="time-two">
                <label for="time-two">
                    <p>13:00</p>
                </label>
            </div>
        </div>
        <div class="form-price">
            <div class="line-adult lines">
                <div class="lines-title">
                    <p>Стандартный</p>
                </div>
                <div class="lines-price">5450 ₽</div>
                <div class="lines-select">
                    <button type="button" class="minus" onclick="minusPrice('line-adult')">-</button>
                    <input type="text" name="default_bilet" class="count" readonly value="0">
                    <button type="button" class="plus" onclick="plusPrice('line-adult')">+</button>
                </div>
                <div class="lines-final-price">0 ₽</div>
            </div>
            <div class="line-not-adult lines">
                <div class="lines-title">
                    <p>Льготный(дети до 16 лет, ветераны, пенсионеры)</p>
                </div>
                <div class="lines-price">4000 ₽</div>
                <div class="lines-select">
                    <button type="button" class="minus" onclick="minusPrice('line-not-adult')">-</button>
                    <input type="text" name="preferential_bilet" class="count" value="0">
                    <button type="button" class="plus" onclick="plusPrice('line-not-adult')">+</button>
                </div>
                <div class="lines-final-price">0 ₽</div>
            </div>
        </div>
        <div class="form-itog">
            <p>Итого:</p><input type="text" name="summ" readonly value="0 ₽">
        </div>
        <div class="form-name">
            <label for="fullName">
                Имя и Фамилия
                <input type="text" required name="fullName" id="fullName" placeholder="Ваша имя и фамилия ...">
            </label>
            <label for="email">
                E-mail
                <input type="email" required name="email" id="email" placeholder="Ваша почта ...">
            </label>
            <label for="tel">
                Номер телефона
                <input type="tel" required name="tel" id="tel" placeholder="*-***-***-**-**">
            </label>
            <div class="form-btn-block">
                <button type="submit">
                    Начать бронирование
                </button>
            </div>
            <div class="form-check-block">
                <label for="notification">
                    <input type="checkbox" required name="notification" id="notification">
                    <p>После оплаты вы получите квитанцию и уведомление о бронировании.  </p>
                </label><br>
                <p>
                    Я соглашаюсь с Условиями использования сайта и даю согласие на
                    обработку своих персональных данных в соответствии с Политикой
                    обработки персональных данных.
                </p>
            </div>
        </div>
    </form>
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
<script src="../../js/tours/slider.js"></script>
<script src="../../js/tours/slider-5.js"></script>
<script src="../../js/page-tour.js"></script>
<script src="../../js/tours/form-validation.js"></script>
</body>
</html>