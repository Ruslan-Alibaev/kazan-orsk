<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <?php wp_head(); ?>
</head>

<body>
    <!-- <nav class="menu-mob" id="menu">
        <div class="menu-mob__close-btn magic-hover magic-hover__square">
            <i class="menu-mob__close icon-x"></i>
        </div>
        <ul>
            <div class="menu-mob__title">Меню</div>
            <ul class="menu-mob__list">
                <li><a href="">О нас</a></li>
                <li><a href="">Маршруты</a></li>
                <li><a href="">Стоимость</a></li>

            </ul>
            <a data-fancybox data-src="#popup__form" class="header__mob-btn magic-hover magic-hover__square">связаться</a>
        </ul>
    </nav> -->
    <main class="slideout-panel" id="panel">
        <header class="header">
            <div class="header__upper-top">
                <div class="header__upper-center header__logo">
                    <a href="https://wa.me/+79096116116" class="header__whatsapp">Чат</a>
                    <a href="https://t.me/@orskkazan" class="header__tg">Чат</a>

                </div>

                <div class="header__upper-right">
                    <div class="header__btn-menu magic-hover magic-hover__square">
                        <i class="icon-menu1"></i>
                    </div>
                    <div class="header__upper-right-tel">
                        <a href="tel:+79096116116">+7(909)-6-116-116</a>
                    </div>
                </div>
            </div>

            <div class="header__top">
                <div class="header__inner">
                    <div class="header__top-upper">
                        <div class="header__upper-left">
                            <img class="header__upper-left-icon" src="<?php bloginfo('template_url'); ?>/assets/img/bus.png">
                            <div class="header__upper-left-text">
                                <p>Пассажирские перевозки</p>
                                <p>г.Казань - г.Орск</p>
                            </div>
                        </div>

                        <div class="header__upper-center header__logo">
                            <a href="https://wa.me/+79096116116" class="header__whatsapp"></a>
                            <a href="http://t.me/@orskkazan" class="header__tg"></a>

                        </div>

                        <div class="header__upper-right">
                            <div class="header__btn-menu magic-hover magic-hover__square">
                                <i class="icon-menu1"></i>
                            </div>
                            <div class="header__upper-right-tel">
                                <a href="tel:+79096116116">+7(909)-6-116-116</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__bottom">
                <div class="container">
                    <div class="header__bottom-inner">

                        <div class="header__bottom-text">
                            <p class="header__bottom-subtitle">Поездки по маршруту:</p>
                            <h1 class="header__bottom-title default-title">Казань - Оренбург - Орск</h1>
                            <p class="header__bottom-descr">ЕЖЕДНЕВНЫЕ РЕЙСЫ!</p>
                        </div>

                        <div class="header__bottom-city">
                            <div class="city__left">Оренбург</div>
                            <div class="city__center">
                                <p class="city__center-top">Казань</p>
                                <img class="city__center-center" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.png">
                                <p class="city__center-bottom">Орск</p>
                            </div>
                            <p class="city__right">Оренбург</p>
                        </div>

                        <a href="#price" class="header__bottom-link">Выбрать маршрут</a>

                    </div>
                </div>
            </div>
        </header>