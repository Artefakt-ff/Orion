<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" lang="ru">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <title>Orion | Рекламное агенство полного цикла.</title>
    <link href="css/loader.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

</head>
<body>
<div id='blocked_until_paid'>
    <h1>Сайт временно недоступен.</h1>
</div>
<div id="loader">
    <div id="loader_images">
        <img src="images/logo.png">
        <div id="cube-loader">
            <div class="caption">
                <div class="cube-loader">
                    <div class="cube loader-1"></div>
                    <div class="cube loader-2"></div>
                    <div class="cube loader-4"></div>
                    <div class="cube loader-3"></div>
                </div>
            </div>
        </div>
        <div id="ready">
            <h4>Мы готовы.<br> Пожалуйста, выберите город. </h4>
        </div>
        <div id="loader_choice_big" class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active">
                <input type="radio" name="options" id="ekaterinburg" autocomplete="off" checked> Екатеринбург
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="tumen" autocomplete="off"> Тюмень
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="chelyabinsk" autocomplete="off"> Челябинск
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="surgut" autocomplete="off"> Сургут
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="other" autocomplete="off"> Другой
            </label>

        </div>
        <div id="loader_choice_small">
            <div id="loader_choice_small_1"></div>
            <div class="btn-group btn-group-toggle"  data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="ekaterinburg" autocomplete="off" checked> Екатеринбург
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="tumen" autocomplete="off"> Тюмень
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="chelyabinsk" autocomplete="off"> Челябинск
                </label>

            </div>
            <div class="btn-group btn-group-toggle" id="loader_choice_small_2" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="surgut" autocomplete="off"> Сургут
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="other" autocomplete="off"> Другой
                </label>
            </div>
        </div>

        <button id="choose" class="btn btn-dark" onclick="pageReady()">Выбрать</button>
    </div>
</div>

<div id="main">
    <div id="menu">
        <div class="circle_jumbotron"></div>
        <div class="anchor" id="circle_about" href="#about"><span>о нас</span><i id="i_about" class="far fa-circle"></i>
        </div>
        <div class="anchor" id="circle_choice" href="#choice"><span>услуги</span><i id="i_choice"
                                                                                    class="far fa-circle"></i></div>
        <div class="anchor" id="circle_projects" href="#projects"><span>наши работы</span><i id="i_projects"
                                                                                             class="far fa-circle"></i>
        </div>
        <div class="anchor" id="circle_map" href="#map"><span>размещение</span><i id="i_map" class="far fa-circle"></i>
        </div>
        <div class="anchor" id="circle_reviews" href="#reviews"><span>отзывы</span><i id="i_reviews"
                                                                                      class="far fa-circle"></i></div>
        <div class="anchor" id="circle_form" href="#form"><span>заказ</span><i id="i_form" class="far fa-circle"></i>
        </div>
    </div>
    <div class="section container-fluid" id="jumbotron">
        <div class="foreground"></div>
        <div class="carousel">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/jumbotron_background_0.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="images/jumbotron_background_1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="images/jumbotron_background_0.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
        <div id="jumbotron_main">
            <img src="images/logo.png" alt="Orion">
            <h2>Рекламное агенство полного цикла.</h2>
            <div id="jumbotron_icons">
                <a href="https://vk.com/orionmedia" target="_blank"><img src="images/vk.png" alt="vkontakte"></a>
                <a href="https://www.instagram.com/orionmedias/?hl=ru" target="_blank"><img src="images/instagram.png"
                                                                                            alt="instagram"></a>
                <a href="https://www.youtube.com/channel/UCsoZcxYhPjj0RCEzlIck0yg" target="_blank"><img
                        src="images/youtube.png" alt="youtube"></a>
                <a href="https://www.t.me/orionmediacompany" target="_blank"><img src="images/telegram.png"
                                                                                  alt="telegram"></a>
            </div>
        </div>
        <div href="#about" class="anchor" id="slider_down">
            <i href="#about" class="fas fa-angle-down anchor"></i>
        </div>
    </div>

    <div class="container" id="about">
        <div class="row">
            <div class="col" id="who">
                <div class="block">
                    <img src="images/logo.png">
                    <h1>КТО МЫ?</h1>

                    <p>Мы - рекламное агенство, которое поможет протолкнуть Ваш бизнес или дело всей Вашей жизни на
                        абсолютно новый уровень.<br>
                        Мы- команда , которая проснется на рассвете ради Вашего проекта, и ляжет спать спустя сутки. Или
                        не ляжет вообще ;)<br>
                        Наши люди способны решать абсолютно любые задачи с креативом и огнем в глазах в нужные Вам
                        сроки. Вы сомневаетесь? Мы подскажем! Вы уверены? Мы поддержим! Мы точно знаем чего Вы хотите! А
                        если чего-то не знаем, то обязательно выслушаем;)<br>
                        Самая важная наша цель- Ваша улыбка и восторг от проделанной нами работой. Мы считаем проект
                        готовым, если наш клиент очень счастлив. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="line"></div>
            <h1>ЧТО МЫ МОЖЕМ?</h1>
            <div class="line"></div>
            <div class="col-6">
                <div class="block what">
                    <h2>Создать рекламу</h2>
                    <ul>
                        <li>пакеты услуг по SMM поддержке и продвижению</li>
                        <li>создание сайтов под ключ</li>
                        <li>написание сценариев</li>
                        <li>создание видео любой сложности под ключ, от pre.prod. до post. prod.</li>
                        <li>контекстная реклама любой сложности</li>
                    </ul>
                    <div id="what_margined">
                        <span>Посмотрите примеры наших работ:</span>
                        <div href="#projects" class="button anchor">Посмотреть</div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="block what">
                    <h2>Разместить рекламу</h2>
                    <ul>
                        <li>на билбордах в пределах вашего города</li>
                        <li>на пилларсах в нужных вам местах</li>
                        <li>на хороших медиа-лавках</li>
                        <li>на замечательных автобусах</li>
                        <li>на больших и маленьких вывесках</li>
                        <li>на лайтбоксах</li>
                        <li>на видеоэкранах</li>
                    </ul>
                    <span>Посмотрите где Вы можете разместить рекламу:</span>
                    <div href="#map" class="button anchor">Посмотреть</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="line"></div>
            <h1>ПОЧЕМУ<br class="breaker"> ИМЕННО МЫ?</h1>
            <div class="line"></div>
            <div class="col why">
                <i class="fas fa-briefcase"></i>
                <h4>Мы мобильны и всегда готовы сотрудничать.</h4>
                <p>
                    Наша фирма сделает все, что бы вы были довольны нашей
                    работой. Мы очень клиентоориентированы и наши услуги будут направленны именно на Ваш бизнес, которым
                    вы занимаетесь. Мы не станем показывать рекламу гаечных ключей мамам в декрете, а услуги по
                    маникюрному сервису мужчинам из слесарного цеха.
                </p>
            </div>
            <div class="col why">
                <i class="fas fa-bullhorn"></i>
                <h4>Мы громкие!</h4>
                <p>
                    Нас слышно, но слышно не надоедливо. Мы помогаем Вашим клиентам услышать о Вас , и прийти за нужной
                    услугой.<br>
                    Мы расскажем о Вас так, как вы хотите.
                </p>
            </div>
            <div class="breaker w-100"></div>
            <div class="col why">
                <i class="fas fa-brain"></i>
                <h4>Мы творческие.</h4>
                <p>Наши люди очень креативные, они могут найти самые необычные пути решения задачи, которые зачастую
                    становятся лучшими и запоминающимися!</p>
            </div>
            <div class="col why">
                <i class="fab fa-algolia"></i>
                <h4>Мы пунктуальны.</h4>
                <p>Мы сделаем Ваш заказ в точно установленные сроки, так как ради своих клиентов , мы работаем круглые
                    сутки!</p>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="choice">
        <div class="row">
            <div class="col sides" id="left_side">
                <div href="#projects" class="button anchor">ЗАКАЗАТЬ <br class="breaker"> РЕКЛАМУ</div>
            </div>
            <div class="w-100 breaker"></div>


            <div class="col sides" id="right_side">
                <div href="#map" class="button anchor">РАЗМЕСТИТЬ <br class="breaker"> РЕКЛАМУ</div>
            </div>
        </div>
    </div>


    <div id="projects">
        <div class="title">
            <hr>
            <h1>НАШИ РАБОТЫ</h1>
            <hr>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="project">
                        <div class="preview">
                            <iframe src="https://www.youtube.com/embed/aUTDR9St0V8"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <h3>WEISS group</h3>
                        <hr>
                        <p>реклама фирмы занимающейся архитектурной подсветкой здания. </p>
                    </div>
                    <div class="project">
                        <div class="preview">
                            <iframe src="https://www.youtube.com/embed/Ql0xey5LzEI"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <h3>ТРИАГРУТРИКА 10 ЛЕТ</h3>
                        <hr>
                        <p>клип на трек популярной рэп-группы Триагрутрика. </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="project">
                        <div class="preview">
                            <iframe src="https://www.youtube.com/embed/jq40CEpAVVo"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <h3>АВТОСЕРВИС ТЕХНАРЬ</h3>
                        <hr>
                        <p>короткое видео о характере сервиса. </p>
                    </div>
                    <div class="project">
                        <div class="preview">
                            <!--<img class="play" src="images/play.png">-->
                            <iframe src="https://www.youtube.com/embed/P8MNGrBhZ9k" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <h3>Реклама торта "Кутузов"</h3>
                        <hr>
                        <p>в ресторане Мюнхгазуен город Тюмень. </p>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <div class="section" id="map">
        <div id="information">
            <!--<p>Здесь Вы можете выбрать варианты размещения рекламы</p>-->
            <!--<div class="button" onclick="fadeout()">Понятно</div>-->
            <p>Упс!<br> Это стадия сайта в разработке.<br> Оставьте заявку и мы Вас проконсультируем :)</p>
            <div class="button anchor" href="#form">Оставить заявку</div>
        </div>

        <div class="foreground" id="information_foreground"></div>
        <div class="map" id="ekaterinburg_map">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ace7658c9633eb020d8b973d19cd20621b918f053a78df903c6b817d3bca17375&amp;width=100%25&amp;height=100vh&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
        <div class="map" id="tumen_map">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A34c414212e96ade5646bed9082903d0c25c8529195911624bc78bff463cd47e2&amp;width=100%25&amp;height=100vh&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
    </div>
    <div class="section" id="reviews">
        <div class="title">
            <hr>
            <h1>ОТЗЫВЫ КЛИЕНТОВ</h1>
            <hr>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="fullpage">
                        <div class="review">
                            <img src="images/review_0.jpg">
                            <h2>Илья</h2>
                            <h4>владелец автошколы</h4>
                            <hr>
                            <p>Заказал сайт, взял у ребят расширенный пакет услуг SMM , бизнес стрельнул, а люди ,
                                которые уже давно имеют права и отучились на всевозможные категории все равно подписаны
                                на мои аккаунты- говорят, что просто интересно , отписываться не хотят!</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="fullpage">
                        <div class="review">
                            <img src="images/review_1.jpg">
                            <h2>Мария</h2>
                            <h4>владелец кофейни</h4>
                            <hr>
                            <p>Ребята супер вот и все! Сняли мне рекламу, отправили во всевозможные социальные сети,
                                круть!</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="fullpage">
                        <div class="review">
                            <img src="images/review_2.jpg">
                            <h2>Дарья</h2>
                            <h4>индивидуальный предприниматель</h4>
                            <hr>
                            <p> Заказала услуги продвижения в инстаграм и ведение социальных сетей. Очень довольна,
                                доверила все это специалисту Марии - очень довольна! Все клиенты говорят о том , как они
                                визуально радуются, заходя на мои профили!</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="section" id="form">
        <div class="information_container">
            <div class="information">
                <div id='apply'>
                    <h2>Мы понравились Вам?</h2>
                    <hr>
                    <h5>Оставьте заявку и мы Вам скоро перезвоним!</h5>
                    <form id="ajax_form" action="" method="post">
                        <div class="form-group">
                            <label for="name">Введите Ваше имя:</label>
                            <input required type="text" class="form-control" name="name" id="name"
                                   placeholder="Ваше имя">
                        </div>
                        <div class="form-group">
                            <label for="phone">Введите Ваш номер телефона:</label>
                            <input required type="tel" class="form-control" name="phone" id="phone"
                                   placeholder="Ваш телефон">
                        </div>
                        <button type="submit" class="btn btn-lg btn-dark">Отправить</button>
                    </form>
                </div>
                <div id="thanks">
                    <h2>Спасибо, что оставили заявку!</h2>
                    <hr>
                    <h5>мы скоро Вам перезвоним!</h5>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <p><b>Рекламное агенство полного цикла "Орион Медиа"</b></p>
                    <p>Мобильный телефон: 8(999)560-41-13</p>
                    <p>E-mail: orionmediaco@yandex.ru</p>
                    <p>Наши контакты в социальных сетях:</p>
                    <p>Страница ВКонтакте: <a target="_blank" href="https://vk.com/orionmedia">Перейти</a></p>
                    <p>Профиль в Instagram: <a target="_blank" href="https://www.instagram.com/orionmedias/?hl=ru">Перейти</a>
                    </p>
                    <p>Канал на YouTube: <a target="_blank"
                                            href="https://www.youtube.com/channel/UCsoZcxYhPjj0RCEzlIck0yg">Перейти</a>
                    </p>
                    <p>Аккаунт в Telegram: <a href="https://www.t.me/orionmediacompany" target="_blank">Перейти</a></p>
                    <p><i class="fas fa-code"></i> with love by <a target="_blank" href="https://artbakulev.me/">Artyom Bakulev</a></p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="js/jquery_min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/fadeout.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/send_message.js"></script>
<script type="text/javascript">
    var flag1 = false, flag2 = false;
    $(document).ready(function () {
        document.getElementById('cube-loader').style.opacity = 0;
        setTimeout(function () {
            document.getElementById('cube-loader').style.display = 'none';
            flag1 = true;
            if (flag1 && flag2) {
                document.getElementById('loader').style.display = 'none';
                document.getElementById('main').style.display = 'block';
                mainChanger();
            }
            document.getElementById('ready').style.display = 'block';
        }, 2000);


    });
    function pageReady() {
        var checkList = document.getElementsByName("options");
        var city;
        for (var i = 0; i < checkList.length; i++) {
            if (checkList[i].checked) {
                city = checkList[i].id;
            }
        }

        if (city == 'tumen') {
            document.getElementById('ekaterinburg_map').style.display = 'none';
            document.getElementById('tumen_map').style.display = 'block';
        }

        flag2 = true;
        document.getElementById('choose').className = 'btn btn-success';

        if (flag1 && flag2) {
            document.getElementById('loader').style.display = 'none';
            document.getElementById('main').style.display = 'block';
            mainChanger();
        }
    }
</script>
</body>
</html>