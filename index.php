<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for lerning center">
    <title>Robot Machines - Главная</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://codepen.io/GreenSock/pen/7ba936b34824fefdccfe2c6d9f0b740b.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <progress max="100" value="0"></progress>
    <nav class="nav nav-phone">
        <div class="nav__exit">
            <div class="nav__exit-btn"></div>
        </div>
        <ul class="nav__list">
            <li class="nav__list-item">
                <a id="burgerMainLink" class="nav__list-link" href="index.php">Главная</a>
            </li>
            <li class="nav__list-item">
                <a id="burgerAboutLink" class="nav__list-link" href="#whyus">О нас</a>
            </li>
            <li class="nav__list-item">
                <a id="burgerCourseLink" class="nav__list-link" href="courses.php">Курсы</a>
            </li>
            <li class="nav__list-item">
                <a id="burgerFeedbackLink" class="nav__list-link" href="#feedback">Отзывы</a>
            </li>
            <li class="nav__list-item">
                <a id="burgerQuestionsLink" class="nav__list-link" href="#questions">Вопрос-Ответ</a>
            </li>
            <li class="nav__list-item">
                <a id="burgerContactsLink" class="nav__list-link" href="contacts.php">Контакты</a>
            </li>
            <li class="nav__list-item">
                <a id="burgerVacanciesLink" class="nav__list-link" href="vacancies.php">Вакансии</a>
            </li>
            <li class="nav__list-item">
                <a id="burgerPartnersLink" class="nav__list-link" href="partners.php">Партнеры</a>
            </li>
        </ul>
    </nav>
    <div class="filter"></div>
    <header>
        <div class="header">
            <div class="container">
                <a href="index.php" class="header-logo">
                    <img src="images/icons/logo.svg" alt="logo">
                </a>
                <nav class="nav">
                    <div class="nav__exit">
                        <div class="nav__exit-btn"></div>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__list-item">
                            <a id="navMainLink" class="nav__list-link" href="index.php">Главная</a>
                        </li>
                        <li class="nav__list-item">
                            <a id="navAboutLink" class="nav__list-link" href="#whyus">О нас</a>
                        </li>
                        <li class="nav__list-item">
                            <a id="navCourseLink" class="nav__list-link" href="courses.php">Курсы</a>
                        </li>
                        <li class="nav__list-item">
                            <a id="navFeedbackLink" class="nav__list-link" href="#feedback">Отзывы</a>
                        </li>
                        <li class="nav__list-item">
                            <a id="navQuestionsLink" class="nav__list-link" href="#questions">Вопрос-Ответ</a>
                        </li>
                        <li class="nav__list-item">
                            <a id="navContactsLink" class="nav__list-link" href="contacts.php">Контакты</a>
                        </li>
                        <li class="nav__list-item">
                            <a id="navVacanciesLink" class="nav__list-link" href="vacancies.php">Вакансии</a>
                        </li>
                        <li class="nav__list-item">
                            <a id="navPartnersLink" class="nav__list-link" href="partners.php">Партнеры</a>
                        </li>
                    </ul>
                </nav>
                <div class="nav__open">
                    <div class="nav__open-btn">
                        <div class="btn-elem"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="contact">
        <a id="contactManager" href="https://t.me/rmgroup_uz" class="contact-link">
            СВЯЗАТЬСЯ С МЕНЕДЖЕРОМ
        </a>
        <div id="currentLang" class="contact-lang">
            RU
        </div>
    </div>

    <div class="welcome gs_reveal">
        <div class="container">
            <img class="welcome-img" src="images/images/welcome.webp" alt="welcome">
        </div>
    </div>

    <section class="course">
        <h2 id="ourCoursesTitle" class="title">Наши курсы</h2>
        <div class="container">
            <ul class="course__list">
                <li class="course__list-item gs_reveal gs_reveal_fromLeft">
                    <a href="index3.php" class="course__list-link">
                        <div class="course__item-article">
                            <h3 id="roboticsTitle" class="course__item-title">Робототехника</h3>
                            <p id="roboticsArticle" class="course__item-text">Приготовьтесь открыть для своего ребенка
                                мир робототехники, схемотехники и цифровой грамотности. В конце курса, ребята займутся
                                подкреплением полученных знаний с помощью сборки собственного робота и его подготовки к
                                грандиозному робо-бою!</p>
                        </div>
                        <div class="course__item-box">
                            <div class="course__item-img">
                                <img src="images/images/courses.webp" alt="course item image">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="course__list-item gs_reveal gs_reveal_fromRight">
                    <a href="index4.php" class="course__list-link">
                        <div class="course__item-article">
                            <h3 id="itTitle" class="course__item-title">IT</h3>
                            <p id="itArticle" class="course__item-text">Профессия будущего для Ваших детей! На данном
                                курсе дети изучат
                                создание игр, веб-разработку (php/CSS) и дизайн сайтов. А в финале детей ожидает
                                заключительный этап по созданию своего полноценного сайта!
                            </p>
                        </div>
                        <div class="course__item-box">
                            <div class="course__item-img">
                                <img src="images/images/courses2.webp" alt="course item image">
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>


    <!-- <section class="whous">
        <h2 id="whousTitle" class="title">Наша команда</h2>

        <div class="container">
            <div class="whous-swiper swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h3 class="whous-name">Имя Фамилия</h3>
                        <div class="whous-image">
                        </div>
                        <h3 class="whous-job">
                            Должность
                        </h3>
                        <p class="whous-about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
                            necessitatibus cupiditate quidem corrupti et odio?
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="whous-name">Имя Фамилия</h3>
                        <div class="whous-image">
                        </div>
                        <h3 class="whous-job">
                            Должность
                        </h3>
                        <p class="whous-about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
                            necessitatibus cupiditate quidem corrupti et odio?
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="whous-name">Имя Фамилия</h3>
                        <div class="whous-image">
                        </div>
                        <h3 class="whous-job">
                            Должность
                        </h3>
                        <p class="whous-about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
                            necessitatibus cupiditate quidem corrupti et odio?
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="whous-name">Имя Фамилия</h3>
                        <div class="whous-image">
                        </div>
                        <h3 class="whous-job">
                            Должность
                        </h3>
                        <p class="whous-about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
                            necessitatibus cupiditate quidem corrupti et odio?
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="whous-name">Имя Фамилия</h3>
                        <div class="whous-image">
                        </div>
                        <h3 class="whous-job">
                            Должность
                        </h3>
                        <p class="whous-about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
                            necessitatibus cupiditate quidem corrupti et odio?
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section> -->


    <section id="whyus" class="whyus">
        <h2 id="whyusTitle" class="title">Почему выбирают нас?</h2>

        <div class="container">
            <div class="whyus-wrapper">
                <div class="whyus__wrapper-item whyus__wrapper-first">
                    <div class="whyus__item gs_reveal gs_reveal_fromLeft">
                        <div class="whyus__item-content">
                            <div class="whyus__item-img">
                                <img src="images/images/whyus1.webp" alt="whyus image">
                            </div>
                            <h3 id="whyusArticleOne" class="whyus__item-text">Пропущенный урок восстанавливается
                                бесплатно в лаборатории</h3>
                        </div>
                    </div>
                    <div class="whyus__item whyus__item-first gs_reveal gs_reveal_fromRight">
                        <div class="whyus__item-content">
                            <div class="whyus__item-img">
                                <img src="images/images/whyus2.webp" alt="whyus image">
                            </div>
                            <h3 id="whyusArticleTwo" class="whyus__item-text">Вы оплачиваете за каждые 4 занятия и при
                                каких-либо праздниках,
                                Ваша оплата переносится </h3>
                        </div>
                    </div>
                </div>

                <div class="whyus__wrapper-item">
                    <div class="whyus__item gs_reveal gs_reveal_fromLeft">
                        <div class="whyus__item-content">
                            <div class="whyus__item-img">
                                <img src="images/images/whyus5.webp" alt="whyus image">
                            </div>
                            <h3 id="whyusArticleThree" class="whyus__item-text">Вам ничего не нужно приобретать, все
                                нужное мы бесплатно
                                предоставляем сами, каждому ученику</h3>
                        </div>
                    </div>
                    <div class="whyus__item gs_reveal gs_reveal_fromRight">
                        <div class="whyus__item-content">
                            <div class="whyus__item-img">
                                <img src="images/images/whyus8.webp" alt="whyus image">
                            </div>
                            <h3 id="whyusArticleFour" class="whyus__item-text">Интересная программа обучения, которая
                                была разработана
                                методологами и психологами</h3>
                        </div>
                    </div>
                </div>

                <div class="whyus__wrapper-item whyus__wrapper-second">
                    <div class="whyus__item whyus__item-second gs_reveal gs_reveal_fromLeft">
                        <div class="whyus__item-content">
                            <div class="whyus__item-img">
                                <img src="images/images/whyus3.webp" alt="whyus image">
                            </div>
                            <h3 id="whyusArticleFive" class="whyus__item-text">У нас есть специальная Telegram группа
                                для родителей, где они в
                                течение недели получают фотографии, вопросы и все необходимое, для контроля и проверки
                                знаний своего ребенка</h3>
                        </div>
                    </div>
                    <div class="whyus__item gs_reveal gs_reveal_fromRight">
                        <div class="whyus__item-content">
                            <div class="whyus__item-img">
                                <img src="images/images/whyus4.webp" alt="whyus image">
                            </div>
                            <h3 id="whyusArticleSix" class="whyus__item-text">В группах всегда до 12 детей</h3>
                        </div>
                    </div>
                </div>

                <div class="whyus__wrapper-item">
                    <div class="whyus__item gs_reveal gs_reveal_fromLeft">
                        <div class="whyus__item-content">
                            <div class="whyus__item-img">
                                <img src="images/images/whyus6.webp" alt="whyus image">
                            </div>
                            <h3 id="whyusArticleSeven" class="whyus__item-text">У нас есть система RM-coins, которые
                                ребенок может потратить на
                                приобретение товаров в нашей лаборатории</h3>
                        </div>
                    </div>
                    <div class="whyus__item gs_reveal gs_reveal_fromRight">
                        <div class="whyus__item-content">
                            <div class="whyus__item-img">
                                <img src="images/images/whyus7.webp" alt="whyus image">
                            </div>
                            <h3 id="whyusArticleEight" class="whyus__item-text">Позиция support, который помогает
                                учителю преподавать и
                                помогает детям при возникших трудностях</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="feedback" class="feedback">
        <h2 id="feedbackTitle" class="title">Отзывы</h2>

        <div class="container">
            <div class="feedback-swiper swiper mySwiperTwo">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h3 id="feedbackNameOne" class="feedback-name">Эля, мама Радмира</h3>

                        <h4 id="feedbackQuoteOne" class="feedback-quote">
                            Спасибо за отличный проект.👍
                        </h4>
                        <p id="feedbackArticleOne" class="feedback-article">
                            Сыну очень нравится.🥰
                            Успехов вам и новых идей.😊
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3 id="feedbackNameTwo" class="feedback-name">Людмила</h3>

                        <h4 id="feedbackQuoteTwo" class="feedback-quote">
                            Желаю успехов и процветания!
                        </h4>
                        <p id="feedbackArticleTwo" class="feedback-article">
                            Благодарю, моему сыну очень нравится на занятиях у вас, он получил действительно те знания
                            которые я бы даже не знаю как могла бы ему дать!!
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3 id="feedbackNameThree" class="feedback-name">Динара Рифтаховна</h3>

                        <h4 id="feedbackQuoteThree" class="feedback-quote">
                            Супер команда!
                        </h4>
                        <p id="feedbackArticleThree" class="feedback-article">
                            Спасибо за обучение, сыну очень интересно узнавать все новое, что связанно с физикой и
                            электроникой.
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3 id="feedbackNameFour" class="feedback-name">Михаил Починский</h3>
                        <h4 id="feedbackQuoteFour" class="feedback-quote">
                            Спасибо все команде!
                        </h4>
                        <p id="feedbackArticleFour" class="feedback-article">
                            Курсы робототехники очень интересные. Сын ходит с удовольствием!
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3 id="feedbackNameFive" class="feedback-name">Мама Шомуродова</h3>
                        <h4 id="feedbackQuoteFive" class="feedback-quote">
                            Преподаватели очень отзывчивые!
                        </h4>
                        <p id="feedbackArticleFive" class="feedback-article">
                            Очень полезное и перспетивное занятие для детей 21 века. Мой сын закончил весь курс и мы
                            очень довольны. Сам процесс обучения поставлен очень правильно.
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3 id="feedbackNameSix" class="feedback-name">Тётя Кольчугина</h3>
                        <h4 id="feedbackQuoteSix" class="feedback-quote">
                            Ещё раз огромное спасибо!
                        </h4>
                        <p id="feedbackArticleSix" class="feedback-article">
                            Сначала я просто записала племянника на один курс и ему понравилось. Он сказал что будет
                            ходить. Я очень благодарна всей вашей команде за то что вы делаете для наших детей
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div id="questions" class="questions">
        <h2 id="questionsTitle" class="title">Вопрос-ответ</h2>
        <div class="container">
            <ul class="questions__list">
                <li class="questions__list-item">
                    <div class="questions__item-header">
                        <p id="questionTitleOne" class="questions__item-header-text">Какие у вас скидки?
                        </p>
                        <div class="questions__item-header-img">
                            <img src="images/icons/arrow.svg" alt="arrow">
                        </div>
                    </div>
                    <div id="questionArticleOne" class="questions__item-body">Скидки для робототехники и IT:
                        1. Приведи друга - 10% скидка на 1 цикл обучения
                        2. Дети из одной семьи- 5% скидка на каждқй цикл обучения
                        3. При оплате за модуль -10% скидка на каждый цикл обучения
                        4. При оплате за все модули- 20% скидка на каждый цикл обучения.

                        При оплате по скидке, оплату необходимо вносить не позже второго урока. При оплате за весь курс
                        - не позже 4 урока </div>
                </li>
                <li class="questions__list-item">
                    <div class="questions__item-header">
                        <p id="questionTitleTwo" class="questions__item-header-text">Можно ли ходить на ваши курсы
                            девочкам?</p>
                        <div class="questions__item-header-img">
                            <img src="images/icons/arrow.svg" alt="arrow">
                        </div>
                    </div>
                    <div id="questionArticleTwo" class="questions__item-body">Конечно! Даже нужно!
                        С каждым месяцем, количество девочек в нашем клубе растет) </div>
                </li>
                <li class="questions__list-item">
                    <div class="questions__item-header">
                        <p id="questionTitleThree" class="questions__item-header-text">Длительность курсов</p>
                        <div class="questions__item-header-img">
                            <img src="images/icons/arrow.svg" alt="arrow">
                        </div>
                    </div>
                    <div id="questionArticleThree" class="questions__item-body">Робототехника-14 месяцев и IT-7 месяцев.
                    </div>
                </li>
                <li class="questions__list-item">
                    <div class="questions__item-header">
                        <p id="questionTitleFour" class="questions__item-header-text">Работаете ли вы по будням? Почему
                            нет?
                        </p>
                        <div class="questions__item-header-img">
                            <img src="images/icons/arrow.svg" alt="arrow">
                        </div>
                    </div>
                    <div id="questionArticleFour" class="questions__item-body">На данный момент все наши филиалы
                        работают исключительно по
                        воскресеньям, причина проста.
                        Так удобнее родителям, которые привозят и забирают детей.
                        Удобнее детям, так как в будние дни они учатся в школах, а по воскресеньям свободны.
                    </div>
                </li>
                <li class="questions__list-item">
                    <div class="questions__item-header">
                        <p id="questionTitleFive" class="questions__item-header-text">Что можно делать в лаборатории?
                        </p>
                        <div class="questions__item-header-img">
                            <img src="images/icons/arrow.svg" alt="arrow">
                        </div>
                    </div>
                    <div id="questionArticleFive" class="questions__item-body">В лаборатории ребенок может купить
                        игрушки или других
                        принадлежности в STEM-магазине, а также получить дополнительные знания по 3D принтеру, LEGO
                        Mindstorms, Знатоку и повторить пропущенные уроки.
                    </div>
                </li>
                <li class="questions__list-item">
                    <div class="questions__item-header">
                        <p id="questionTitleSix" class="questions__item-header-text">Что такое rm-coins, зачем они
                            нужны?
                        </p>
                        <div class="questions__item-header-img">
                            <img src="images/icons/arrow.svg" alt="arrow">
                        </div>
                    </div>
                    <div id="questionArticleSix" class="questions__item-body">RM-coins это внутреклубная валюта, которую
                        можно заработать только
                        за активное участие на занятиях и потратить в лаборатории.
                    </div>
                </li>
                <li class="questions__list-item">
                    <div class="questions__item-header">
                        <p id="questionTitleSeven" class="questions__item-header-text">Выдаете ли вы по окончнанию курса
                            сертификат?
                        </p>
                        <div class="questions__item-header-img">
                            <img src="images/icons/arrow.svg" alt="arrow">
                        </div>
                    </div>
                    <div id="questionArticleSeven" class="questions__item-body">Сертификат выдается после каждого
                        модуля, это показатель того, что
                        ребенок усвоил пройденные темы и перешел на следующий модуль.
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <section class="enroll">
        <div class="container">
            <h2 id="enrollTitle" class="title">Курсы</h2>

            <div class="enroll-wrapper">
                <div class="enroll__info gs_reveal ">
                    <h3 id="enrollArticle" class="enroll__info-title">Поможем вам с выбором подходящего курса</h3>
                    <div class="enroll__info-img">
                        <img src="images/images/whyus3.webp" alt="enroll image">
                    </div>
                </div>
                <form class="enroll__form gs_reveal " action="./mail/mail.php" method="post">
                    <div class="enroll__form-item">
                        <label id="enrollLabelOne" class="enroll__form-label" for="nameInput">Как вас зовут?</label>
                        <input class="enroll__form-input" placeholder="Ваше имя" type="text" name="name" id="nameInput">
                    </div>
                    <div class="enroll__form-item">
                        <label id="enrollLabelTwo" class="enroll__form-label" for="contactInput">Введите ваши
                            контакты</label>
                        <input class="enroll__form-input" placeholder="Ваш номер телефона" type="text" name="contacts"
                            id="contactInput">
                    </div>
                    <div class="enroll__form-item">
                        <label for="accept" class="enroll__form-text">
                            <input class="enroll__form-checkbox" type="checkbox" name="accept" id="accept">
                            <p id="enrollTerms"> Нажимая кнопку “Получить консультацию”, Вы
                                соглашаетесь с
                                <span> условиями
                                    обработки персональных
                                    данных</span>
                            </p>
                        </label>
                    </div>
                    <div class="enroll__form-item">
                        <button id="enrollBtn" class="enroll__form-btn" type="submit">Получить Консультацию</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer__center">
                <a href="index.php" class="footer-logo">
                    <img src="images/icons/logo.svg" alt="footer-logo">
                </a>
                <ul class="footer__social">
                    <li class="footer__social-item">
                        <a href="https://t.me/robot_machines" class="footer__social-link">
                            <img src="images/icons/tg.svg" alt="tg">
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="https://www.instagram.com/rm_uz/" class="footer__social-link">
                            <img src="images/icons/insta.svg" alt="insta">
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="https://t.me/rmgroup_uz" class="footer__social-link">
                            <img src="images/icons/phone.svg" alt="phone">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__contact">
                <a href="mailto:robotmachines2019@gmail.com"
                    class="footer__contact-item">robotmachines2019@gmail.com</a>
                <a href="tel:+998330779770" class="footer__contact-item">+998 33 077 97 70</a>
            </div>
        </div>
    </footer>

    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js?r=5426"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="scripts/index.js"></script>
</body>

</html>