<?php
/*
Template Name: Главная

*/

// … остальной код шаблона
?>

<?php get_header('main'); ?>


<section class="about__section default-section" id="about">
    <div class="container">
        <div class="about__inner">
            <h2 class="about__title default-title">О нас</h2>
            <h3 class="about__subtitle">Мы занимаемся перевозками по данному маршруту более 8 лет.</h3>
            <div class="about__items">
                <div class="about__item-left">
                    <p class="about__descr default-descr">Стаж наших водителей более 15 лет. Водители свободно ориентируются по городам республики Татарстан и Оренбургской области.</p>
                    <p class="about__descr default-descr">За время работы мы получили положительные отзывы от пассажиров и гостей города Казань, которые с уверенностью многократно пользовались нашими услугами.</p>
                    <p class="about__descr default-descr">Используем автомобили Volkswagen Transporter.</p>
                </div>
                <div class="about__item-right">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/vag.webp">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="advantages__section default-section">
    <div class="container">
        <div class="advantages__inner">
            <h2 class="advantages__title default-title">Наши преимущества</h2>
            <div class="advantages__items">
                <div class="advantages__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/auto.png">
                    <p class="advantages__descr default-descr">Комфортабельные микроавтобусы</p>
                </div>

                <div class="advantages__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/adress.png">
                    <p class="advantages__descr default-descr">Возможность бронирования поездки с адреса до адреса</p>
                </div>

                <div class="advantages__item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/package.png">
                    <p class="advantages__descr default-descr">Доставка посылок с адреса до адреса</p>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="routes__section default-section" id="price">
    <div class="container">
        <div class="routes__inner">
            <h2 class="routes__title default-title">Стоимость</h2>
            <div class="routes__items">
                <fieldset class="routes__item">
                    <legend>Маршрут 1</legend>
                    <div class="routes__item-left">
                        <div class="routes__item-left-box">
                            <div class="routes__item-left-city city">Казань</div>
                            <div class="routes__item-left-time time">18:00</div>
                            <div class="routes__item-left-descr descr">Время отправления местное</div>
                        </div>

                        <img class="routes__item-left-img" src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right.png">

                        <div class="routes__item-right-box">
                            <div class="routes__item-right-city city">Орск</div>
                            <div class="routes__item-right-time time">10:00</div>
                            <div class="routes__item-right-descr descr">Время прибытия местное</div>
                        </div>
                    </div>
                    <div class="routes__item-right">
                        <div class="routes__item-right-social">
                            <a href="https://wa.me/+79096116116" target="_blank" class="routes__item-right-whatsapp">Чат WhatsApp</a>
                            <a href="https://t.me/@orskkazan" target="_blank" class="routes__item-right-tg">Чат Telegram</a>
                            <div data-fancybox data-src="#popup__order" class="routes__item-right-link">Оставить заявку</div>
                        </div>
                        <div class="routes__item-right-price">
                            <div class="routes__item-right-price">3000 руб.</div>                            
                        </div>
                    </div>
                </fieldset>

                <fieldset class="routes__item routes__item2">
                    <legend>Маршрут 2</legend>
                    <div class="routes__item-left">
                        <div class="routes__item-left-box">
                            <div class="routes__item-left-city city">Орск</div>
                            <div class="routes__item-left-time time">19:30</div>
                            <div class="routes__item-left-descr descr">Время отправления местное</div>
                        </div>

                        <img class="routes__item-left-img" src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right.png">

                        <div class="routes__item-right-box">
                            <div class="routes__item-right-city city">Казань</div>
                            <div class="routes__item-right-time time">06:00</div>
                            <div class="routes__item-right-descr descr">Время прибытия местное</div>
                        </div>
                    </div>
                    <div class="routes__item-right">
                        <div class="routes__item-right-social">
                            <a href="https://wa.me/+79096116116" target="_blank" class="routes__item-right-whatsapp">Чат WhatsApp</a>
                            <a href="https://t.me/@orskkazan" target="_blank" class="routes__item-right-tg">Чат Telegram</a>
                            <div data-fancybox data-src="#popup__order" class="routes__item-right-link">Оставить заявку</div>
                        </div>
                        <div class="routes__item-right-price">
                            <div class="routes__item-right-price">3000 руб.</div>                            
                        </div>
                    </div>
                </fieldset>

                <fieldset class="routes__item">
                    <legend>Маршрут 3</legend>
                    <div class="routes__item-left">
                        <div class="routes__item-left-box">
                            <div class="routes__item-left-city city">Казань</div>
                            <div class="routes__item-left-time time">18:00</div>
                            <div class="routes__item-left-descr descr">Время отправления местное</div>
                        </div>

                        <img class="routes__item-left-img" src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right.png">

                        <div class="routes__item-right-box">
                            <div class="routes__item-right-city city">Оренбург</div>
                            <div class="routes__item-right-time time">06:00</div>
                            <div class="routes__item-right-descr descr">Время прибытия местное</div>
                        </div>
                    </div>
                    <div class="routes__item-right">
                        <div class="routes__item-right-social">
                            <a href="https://wa.me/+79096116116" target="_blank" class="routes__item-right-whatsapp">Чат WhatsApp</a>
                            <a href="https://t.me/@orskkazan" target="_blank" class="routes__item-right-tg">Чат Telegram</a>
                            <div data-fancybox data-src="#popup__order" class="routes__item-right-link">Оставить заявку</div>
                        </div>
                        <div class="routes__item-right-price">
                            <div class="routes__item-right-price">2500 руб.</div>                            
                        </div>
                    </div>
                </fieldset>

                <fieldset class="routes__item">
                    <legend>Маршрут 4</legend>
                    <div class="routes__item-left">
                        <div class="routes__item-left-box">
                            <div class="routes__item-left-city city">Оренбург</div>
                            <div class="routes__item-left-time time">23:00</div>
                            <div class="routes__item-left-descr descr">Время отправления местное</div>
                        </div>

                        <img class="routes__item-left-img" src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right.png">

                        <div class="routes__item-right-box">
                            <div class="routes__item-right-city city">Казань</div>
                            <div class="routes__item-right-time time">06:00</div>
                            <div class="routes__item-right-descr descr">Время прибытия местное</div>
                        </div>
                    </div>
                    <div class="routes__item-right">
                        <div class="routes__item-right-social">
                            <a href="https://wa.me/+79096116116" target="_blank" class="routes__item-right-whatsapp">Чат WhatsApp</a>
                            <a href="https://t.me/@orskkazan" target="_blank" class="routes__item-right-tg">Чат Telegram</a>
                            <div data-fancybox data-src="#popup__order" class="routes__item-right-link">Оставить заявку</div>
                        </div>
                        <div class="routes__item-right-price">
                            <div class="routes__item-right-price">2500 руб.</div>                            
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</section>

<!-- <section class="variants__section" id="variants">
    <div class="container">
        <div class="variants__inner">
            <h2 class="variants__title default-title">Контакты</h2>
            <h3 class="variants__subtitle">Вы можете связаться с нами в соц. сетях, либо оставить заявку на звонок</h3>
            <div class="variants__items">
                <a href="" class="variants__item variants-whatsapp"> </a>
                <a href="" class="variants__item variants-tg"> </a>
                <a href="tel:" class="variants__item variants-tel"> </a>
                <a href="" class="variants__item variants-link">Оставить заявку</a>
            </div>
        </div>
    </div>
</section> -->







<?php get_footer(); ?>