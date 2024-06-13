<?php
/*
Template Name: Главная

*/

// … остальной код шаблона
?>

<?php get_header('main'); ?>

<section class="advantages__section">
    <div class="container">
        <h2 class="default-title advantages__title">Заголовок</h2>
        <h3 class="default-subtitle advantages__subtitle">Подзаголовок</h3>
        <p class="default-descr advantages__descr">Описание</p>
        <div class="advantages__items">
            <div class="advantages__item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/adv-img-1.svg"> 
            </div>
        </div>
        <a href="<?php echo get_permalink(12); ?>" class="default-btn advantages__btn" >Кнопка</a>
    </div>
</section>




<?php get_footer(); ?>