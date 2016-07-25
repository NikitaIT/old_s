<!--functions-->
<?php
/**
 * Чистый Шаблон для разработки
 * Функции шаблона
 * http://mkoreshkov.ru
 * @package WordPress
 * @subpackage clean
 */
register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню',
	'left' => 'Нижнее'
) );
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

if ( function_exists('register_sidebar') )
register_sidebar(); // Регистрируем сайдбар


//wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css', false, '1.1', 'all');

?>
<!--functions-->