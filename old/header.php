<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон хэдера
 * http://mkoreshkov.ru
 * @package WordPress
 * @subpackage clean
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- RSS, стиль и всякая фигня -->
<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<title>
<?php // Генерируем тайтл в зависимости от контента с разделителем " | "
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<?php
	wp_head(); // Необходимо для работы плагинов и функционала wp
?>

  <link rel="icon" href="images/logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.timelinr-0.9.6.js"></script>

<!---------------------------------------------------->
<script>
    $(function () {
      //меню слайдер
      var pull = $('#pull');
      menu = $('nav ul');
      menuHeight = menu.height();
      $(pull).on('click', function (e) {
        e.preventDefault();
        menu.slideToggle();
      });
      $(window).resize(function () {
        var w = $(window).width();
        if (w > 320 && menu.is(':hidden')) {
          menu.removeAttr('style');
        }
      });
    });
  </script>
<!----------------------------------------------------->
</head>
<body>
<div class="wrapper s-h">
<?php
		$args = array( // Выводим верхнее меню
			'theme_location'=>'top',
			'container'=>'',
			'depth'=> 0);
		//wp_nav_menu($args);
?>

<!--header start!-->
    <header class="header" name="home">
      <nav class="nav clearfix">
        <ul class="clearfix">
          <figure class="push-2-16 col-2-16 header-logo left tab-col-4-16">
            <a href="http://trendico.mkoreshkov.ru"> <img src="<?php echo get_template_directory_uri(); ?>/images/Background/logo.png" alt=""> </a>
          </figure>
          <div class="col-8-16 tab-col-12-16 p-0">
            <li class="centr"><a href="http://trendico.mkoreshkov.ru">О нас</a></li>
            <li class="centr"><a href="/projects/kot-v-sapogah/">Приложения</a></li>
            <li class="centr"><a href="/search/">Контакты</a></li>
          </div>
          <div class="col-4-16 hide-on-tab nav-right share">
            <li class="right"><a href="#"><i class="fa fa-vk"></i></a></li>
            <li class="right"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="right"><a href="#"><i class="fa fa-twitter"></i></a></li>
          </div>
        </ul>
        <a href="#" id="pull"><img src="<?php echo get_template_directory_uri(); ?>/images/Background/logo.png" alt=""></a>
      </nav>
    </header>
    <!--header end!-->
<!----------------------хедер выше-------------------------------------->