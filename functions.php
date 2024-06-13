<?php


# Подключение CSS и JS файлов

add_action('wp_enqueue_scripts', function () {

	wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
	wp_enqueue_style('fancybox', "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css");
	wp_enqueue_style('formstylers', get_template_directory_uri() . '/assets/css/jquery.formstyler.css');
	wp_enqueue_style('formstylertheme', get_template_directory_uri() . '/assets/css/jquery.formstyler.theme.css');
	wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
	wp_enqueue_style('header-slider', get_template_directory_uri() . '/assets/css/header-slider.css');
	wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');

	if (is_404()) {
		wp_enqueue_style('errorstyle', get_stylesheet_directory_uri() . '/assets/css/error.css');
	}
	if( is_page() ){
		wp_enqueue_style( 'page-style-1', get_template_directory_uri() . '/assets/css/page.css' );
    };
	if(is_single()) {
		wp_enqueue_style( 'singlestyle', get_template_directory_uri() . '/assets/css/singlepage.css' );
	};
	if (is_page_template('templates/home.php')) {
		wp_enqueue_style('sites', get_template_directory_uri() . '/assets/css/home.css');
	};
	/*
	if( is_page(29) ){
		wp_enqueue_style( 'catalogue', get_template_directory_uri() . '/assets/css/catalogue.css' );
    };
	*/


	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script('formstyler', get_template_directory_uri() . '/assets/js/jquery.formstyler.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('fancybox', "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js", array('jquery'), 'null', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);

	/*
	if( is_page_template('templates/diaries.php')){
		wp_enqueue_script( 'diaries-script', get_template_directory_uri() . '/assets/js/diaries.js', array('jquery'), 'null', true );
	};
	*/
});







# Регистрирует поддержку новых возможностей темы в WordPress

add_action('after_setup_theme', function () {

	// создание метатега <title> через хук
	add_theme_support('title-tag');

	// возможность загрузить картинку логотипа в админке
	add_theme_support('custom-logo');

	// включаем меню в админке
	register_nav_menus(array(
		'header' => 'Шапка сайта',
		'footer' => 'Подвал сайта',
	));

	// позволяет устанавливать миниатюру посту
	add_theme_support('post-thumbnails');

	// поддержка HTML5
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
});






# Поддержка SVG

add_filter('upload_mimes', 'svg_upload_allow');
# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

	// WP 5.1 +
	if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
		$dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
	} else {
		$dosvg = ('.svg' === strtolower(substr($filename, -4)));
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if ($dosvg) {

		// разрешим
		if (current_user_can('manage_options')) {

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}
	}
	return $data;
}



?>