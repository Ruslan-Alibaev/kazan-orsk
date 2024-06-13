<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <?php wp_head(); ?>
</head>

<body>
    <nav class="menu-mob" id="menu">
        <div class="menu-mob__close-btn magic-hover magic-hover__square">
            <i class="menu-mob__close icon-x"></i>
        </div>
        <ul>
            <div class="menu-mob__title">Меню</div>
            <ul class="menu-mob__list">
                <li><a href="<?php echo get_permalink(10); ?>">Главная</a></li>
                <li><a href="<?php echo get_permalink(10); ?>">Пример</a></li>
            </ul>
            <a data-fancybox data-src="#popup__form" class="header__mob-btn magic-hover magic-hover__square">связаться</a>
        </ul>
    </nav>
    <main class="slideout-panel" id="panel">
        <header class="header">
            <div class="header__top">
                <div class="header__inner">
                    <div class="header__top-upper">
                        <div class="header__upper-left">
                            <div class="header__btn-menu magic-hover magic-hover__square">
                                <i class="icon-menu1"></i>
                            </div>
                            <div class="header__btn-name">Меню</div>
                        </div>
                        <div class="header__upper-center header__logo">
                            <a href="<?php echo get_permalink(7); ?>">
                                <div class="header__logo-text">Название сайта</div>
                            </a>
                        </div>
                        <div class="header__upper-right">
                            <a href="" data-fancybox data-src="#popup__call" class="header__btn-call magic-hover magic-hover__square">
                                <i class="header__btn-call-icon icon-phone"></i>
                            </a>
                            <a href="" class="header__btn-connection magic-hover magic-hover__square" data-fancybox data-src="#popup__form">оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>