<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link preload rel="stylesheet" href="./css/header.css" />
    <link preload rel="stylesheet" href="./css/main.css" />
    <link preload rel="stylesheet" href="./css/section.css" />
    <link preload rel="stylesheet" href="./css/portfolio.css" />
    <link preload rel="stylesheet" href="./css/technologies.css" />
    <link preload rel="stylesheet" href="./css/recommendations.css" />
    <link preload rel="stylesheet" href="./css/form.css" />
    <link preload rel="stylesheet" href="./css/footer.css" />
    <link preload rel="stylesheet" href="./css/animation.css" />






    <script>
        window.addEventListener('load', function () {
            var load_screen = document.getElementById('load_screen');
            setTimeout(() => {
                document.body.removeChild(load_screen);
            }, 3500);
        })
    </script>

</head>

<body style="overflow-x: hidden;">
    <div id="load_screen">
        <div class="loader"></span>
        </div>
    </div>
    <div class="container-fluid ">
        <header class=" d-flex d-flex flex-column flex-lg-row d-flex justify-content-between">
            <div class="logo mt-3 ml-0 ml-md-5">
                <img class="header__div__logo img-fluid" src="./img/Portfolio.png" alt="" />
            </div>
            <div class="header__div__background d-none d-lg-flex">
                <img class="img-fluid" src="./img/Layer 2 copy.png" alt="" />
            </div>

            <nav class="navbar navbar-expand-lg navbar-dark d-flex flex-column d-flex justify-content-end w-100">
                <button class="navbar-toggler mr-0 mr-md-5 mb-3 " type=" button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  w-100" id="navbarNavAltMarkup">

                    <div class="navbar-nav mr-0 mr-md-5 nav__div__list d-flex align-items-center justify-content-end">
                        <a class="nav-item nav-link nav__div__item mr-0 mr-lg-1" href="#section__about">O mnie <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link nav__div__item mr-0 mr-lg-1"
                            href="#section__portfolio">Portfolio</a>

                        <a class="nav-item nav-link  nav__div__item mr-0 mr-lg-1"
                            href="#section__technologies">Technologie</a>
                        <a class="nav-item nav-link  nav__div__item mr-0 mr-md-0 mr-lg-5 recoBtn "
                            href="#section__recommendations">Rekomendacje</a>
                        <a class="nav-item nav-link text-center nav__div__button type3 mr-0 " type="button"
                            href="#section__form">Kontakt</a>
                    </div>
                </div>
            </nav>
        </header>

    </div>
    <div class="container-fluid">
        <div class="row">
            <main class="ml-0 ml-md-5 mr-0 mr-md-5 main d-flex flex-column flex-md-row  justify-content-between w-100  "
                id="section__main">
                <div class="main__welcome  ml-lg-0 col-md-6">
                    <div class="main__welcome__name">
                        <p class="hello">Cześć, jestem</p>
                        <h1 class="nameWelcome">Paweł <br> Sawczuk</h1>
                        <p class="position">junior <span class="positionSpan">front-end</span> developer</p>
                    </div>
                    <div class="main__welcome__social mb-5 mb-lg-0">
                        <div class="">
                            <p class="findMe">Znajdź mnie na</p>
                            <div>
                                <a id="linkedIcon" class="linkedIcon mr-5" href="https://github.com/ishida530"><img
                                        src="./img/linked.png" alt=""></a>
                                <a id="linkedIcon" class="linkedIcon" href="https://github.com/ishida530"><img
                                        src="./img/github.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="main__welcome__buttons mt-5 d-flex flex-column flex-md-row justify-content-start">
                        <a href="#" class="hireMeBtn mr-0 mr-sm-0 mr-md-5 mr-lg-5">Technologie</a>
                        <a href="#section__portfolio"
                            class="hireMeBtn ml-0 ml-sm-0 ml-ml-5 ml-lg-5 mt-3 mt-md-0">Portfolio</a>


                    </div>
                </div>
                <div class="main__photo  d-flex justify-content-center col-12 col-md-6 mt-5 mt-lg-0 c">
                    <img class=" " src="./img/photo.png" alt="">
                </div>
            </main>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <section class="section d-flex flex-column flex-xl-row " id="section__about">
                <div class="section__about col-12 col-xl-6  align-items-between mt-5 ml-0 ml-md-5 mr-0 mr-md-5">
                    <h2 class="">O mnie</h2>
                    <div class="">
                        <p class="pr-0 pr-xs-3 txt"> Moim głównym celem zawodowym jest znalezienie pracy, która da mi
                            możliwość pogłębienia i doskonalenia nabytych wcześniej umiejętności programistycznych,
                            zaangażowania się w ciekawe i kreatywne projekty oraz podniesienia kwalifikacji z zakresu
                            programowania Front-End. Przede wszystkim chcę się skupić na nauce języka Javascript i
                            biblioteki React. </p>
                    </div>
                    <a href="./CV Pawel Sawczuk ENG.pdf" class="cv">Pobierz CV CV</a>
                </div>
                <div class="section__gallery col-12 col-xl-6 ">
                    <div class="swiper-container ">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide" style="background-image:url(./img/Layer\ 0.png)"></div>
                            <div class="swiper-slide" style="background-image:url(./img/Layer\ 0.png)"></div>
                            <div class="swiper-slide" style="background-image:url(./img/Layer\ 0.png)"></div>
                            <div class="swiper-slide" style="background-image:url(./img/Layer\ 0.png)"></div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination dot"></div>
                    </div>

                    <div class="swiper-button-next arrowNext"></div>
                    <div class="swiper-button-prev arrowPrev"></div>

                </div>
            </section>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <section class="section__portfolio" id="section__portfolio">
                <div class="portfolio__headline   pl-5 mt-5 ml-0 ml-md-5 mr-0 mr-md-5">
                    <h2>Portfolio</h2>
                </div>
                <div class="portfolio__gallery d-flex flex-row justify-content-between flex-wrap col-12 ">
                    <div class="col-12 col-xl-3 d-flex justify-content-center">
                        <div class="layerImg"><a href="https://ishida530.github.io/locationweathermap/">
                                <img class="" src="./img/portfolio1.png" alt="">
                                <p>API/AXIOS/JAVASCRIPT</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3 d-flex justify-content-center">
                        <div class="layerImg">
                            <a href="https://ishida530.github.io/portfolio-projectone/">
                                <img class="" src="./img/portfolio2.png" alt="">
                                <p>HTML/SCSS/BOOTSTRAP/JQUERY</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-xl-3 d-flex justify-content-center">
                        <div class="layerImg">
                            <a href="https://ishida530.github.io/lpexample/">
                                <img class="" src="./img/portfolio3.png" alt="">
                                <p>HTML/SCSS/BOOTSTRAP/JAVASCRIPT</p>
                            </a>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <section class="section__technologies" id="section__technologies">
                <div class="technologies__headline d-flex justify-content-center">
                    <h2>Technologies</h2>
                </div>
                <div class="technologies__gallery col-12 mt-5 d-flex flex-wrap">
                    <div class="technologies__gallery__box d-flex justify-content-center col-12 col-md-6  col-lg-4"><img
                            src="./img/html.png" alt=""></div>
                    <div class="technologies__gallery__box d-flex justify-content-center col-12 col-md-6  col-lg-4"><img
                            src="./img/css.png" alt=""></div>
                    <div class="technologies__gallery__box d-flex justify-content-center col-12 col-md-6  col-lg-4"><img
                            src="./img/js.png" alt=""></div>
                    <div class="technologies__gallery__box d-flex justify-content-center col-12 col-md-6  col-lg-4"><img
                            src="./img/bootstrap.png" alt=""></div>
                    <div class="technologies__gallery__box d-flex justify-content-center col-12 col-md-6  col-lg-4"><img
                            src="./img/scss.png" alt=""></div>
                    <div class="technologies__gallery__box d-flex justify-content-center col-12 col-md-6  col-lg-4"><img
                            src="./img/git.png" alt=""></div>
                    <div class="technologies__gallery__box d-flex justify-content-center col-12 col-md-6  col-lg-4">
                        <img src="./img/wordpress.png" alt="">
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <section class="section__recommendations col-12" id="section__recommendations">
                <div class="recommendations__headline d-flex justify-content-center">
                    <h2 class="recoTittle">Rekomendacje</h2>
                </div>
                <div class="recommendations__box d-flex flex-column flex-xl-row ">
                    <div class="recommendations__map col-12 col-xl-6 d-flex justify-content-center">
                        <img src="./img/map-55e32ae4c19a85738ebb72d3172e3ab7.png" alt="">
                    </div>
                    <div class="recommendations__slider d-flex col-12 col-xl-6">
                        <div class="swiper-container2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="firstRecommendation d-flex flex-column justify-content-center">
                                        <p>Pan Paweł Sawczuk odbył w NoMonday sp. z o.o. w okresie listopad 2020 -
                                            styczeń 2021 staż na stanowisku front-end developera. Staż zorganizowany
                                            został
                                            w ramach Programu Operacyjnego - Wiedza Edukacja Rozwój.
                                            W czasie stażu pan Paweł dał się poznać jako osoba chętna do pracy. Wykazał
                                            odpowiedni poziom umiejętności, a przede wszystkim otwartość na nowe
                                            zagadnienia
                                            i chęć aktywnego podejścia do problemów w codziennej pracy dewelopera.
                                            W mojej opinii pan Paweł w przyszłości może z powodzeniem pracować jako
                                            frontend deweloper. <br><br> <span
                                                class="d-block d-flex justify-content-start" style="text-align: start;">
                                                - Marcin Matras <br>CTO & managing partner w NoMonday
                                            </span></p>
                                        <a class="lookBtn mt-5" href="https://postimg.cc/K1rkDnvf">Podgląd</a>
                                    </div>
                                </div>

                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <section class="section__form" id="section__form">
                <div class="form__headline">
                    <h2>Zróbmy razem coś fajnego</h2>
                </div>
                <div class="form__formular d-flex flex-column justify-content-center">
                    <form class="d-flex flex-column" action="./index.php">
                        <label for="name">Imię i nazwisko </label>
                        <input type="text" name="name" id="name" placeholder="Twoje imię i nazwisko..." required>
                        <label for="email">Adres e-mail</label>
                        <input type="email" name="email" id="email" placeholder="Twój adres e-mail..." required>

                        <label for="message">Wiadomość</label>
                        <textarea id="message" name="text" class="message" placeholder="Treść wiadomości..." required
                            maxlength="200" style="height:200px"></textarea>

                        <input class="sendBtn" name="sbumit" type="submit" value="Wyślij">
                   
                        <?php

$to = 'ishida530@gmail.com';
$name= $_POST['name']
$email = $_POST'[email']

$subject='Nowa wiadomość e-mail od ' . $name . '(' . $email . ')';

$message = $_POST['message']
$headers='From:';
$headers='Content-Type: text/html; charset=urf-8\r\n';


mail($to,$subject,$message, $headers);
$_send = mail($to,$subject,$message, $headers);
 if($_send){
     echo "<h2>Wiadomość wysłana</h2>"
 }
 else {
    echo "<h2>BŁĄD. Coś poszło nie tak...</h2>"

 }

?>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <footer class="section__footer">
                <div class="footer__box__logo d-flex justify-content-center"><img class="img-fluid"
                        src="./img/Portfolio.png" alt="">
                </div>
                <div class="footer__menu">
                    <ul class="d-flex justify-content-center flex-wrap">
                        <li><a href="#section__about">O mnie</a></li>
                        <li><a href="#section__portfolio">Projekty</a></li>
                        <li><a href="#section__technologies">Technologie</a></li>
                        <li><a href="#section__recommendations">Rekomendacje</a> </li>
                    </ul>
                </div>
                <div class="footer__copy d-flex justify-content-center">
                    <p>Copyright &copy 2021 Shoqer | All rights reserved</p>
                </div>
            </footer>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->

    <script src="./app.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
