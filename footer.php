<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__logo">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/bus.png" alt="Перевозки Орск Казань">
            </div>
            <!-- <div class="footer__center">
                <a href="#about">О нас</a>
                <a href="#price">Стоимость</a>
                <a href="#variants">Маршруты</a>
            </div> -->
            <div class="footer__right">
                <div class="footer__social">
                    <a href="https://wa.me/+79096116116" class="footer__whatsapp"></a>
                    <a href="https://t.me/@orskkazan" class="footer__tg"></a>                    
                </div>                
            </div>
            <a class="footer__policy" href="https://kazan-orsk.ru/policy">Политика конфиденциальности </a>

        </div>
    </div>

</footer>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>
<script>
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 350,
        'tolerance': 70
    });

    function close(eve) {
        eve.preventDefault();
        slideout.close();
        document.getElementById('panel').classList.toggle('hide');
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.remove('active');
    }

    slideout
        .on('beforeopen', function() {
            this.panel.classList.add('panel-open');
        })
        .on('open', function() {
            this.panel.addEventListener('click', close);
        })
        .on('beforeclose', function() {
            this.panel.classList.remove('panel-open');
            this.panel.removeEventListener('click', close);
        });

    // Toggle button
    document.querySelector('.header__btn-menu').addEventListener('click', function() {
        slideout.toggle();
        document.getElementById('panel').classList.toggle('hide')
    });

    document.querySelector('#menu .menu-mob__close-btn').addEventListener('click', function() {
        slideout.toggle();
        document.getElementById('panel').classList.toggle('hide');
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.remove('active');
    });
</script>

<div id="popup__form" class="popup__block" style="display: none">
    <section class="form__section" id="form-section">
        <div class="container">
            <div class="form__inner">
                <div class="form__block">
                    <div class="form__block-inner">
                        <div class="form__block-title">Пример модального окна</div>
                        <div class="form__block-descr">Пример описания для модальных окон</div>
                        <?php echo do_shortcode('[contact-form-7 id="20" title="Контактная форма 1"]') ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>


</body>

<div id="popup__order" class="popup__block" style="display: none">
    <section class="form__section" id="form-section">
        <div class="container">
            <div class="form__inner">
                <div class="form__block">
                    <div class="form__block-inner">
                        <div class="form__block-title default-title center-title">Отправьте заявку и мы перезвоним вам в ближайшее время</div>
                        <?php echo do_shortcode('[contact-form-7 id="12ef1a8" title="Получить консультацию на ПРОГНОЗ"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php wp_footer(); ?>

</html>