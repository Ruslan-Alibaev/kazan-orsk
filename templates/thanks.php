<?php
/*
Template Name: "Спасибо"

*/

// … остальной код шаблона
?>

<?php get_header('thanks'); ?>

<section class="thanks__section">
    <div class="thanks">
        <div class="container">
            <div class="thanks__inner">
                <div class="thanks__block">
                    <div class="thanks__title">Спасибо за Вашу заявку!</div>
                    <div class="thanks__descr">Ожидайте, скоро мы свяжемся с Вами.</div>
                    <a class="thanks__btn" href="<?php echo get_permalink(6); ?>">вернуться на сайт</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer('thanks'); ?>