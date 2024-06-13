<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

get_header();
?>

<section class="error__section">
	<div class="container">
		<div class="error__inner">
			<div class="error__top">
				<div class="error__number">404</div>
				<div class="error__title">страница не найдена</div>
			</div>
			<div class="error__bottom">
				<div class="error__descr">Возможно эта страница была перемещена или вы просто неверно указали адрес страницы</div>
			</div>
			<a href="<?php echo get_permalink(6); ?>" class="error__btn">вернуться на главную</a>
		</div>
	</div>
</section>




<?php
get_footer();
