<!--FrontPage-->
<?php
/*Template Name: FrontPage
*/
get_header();?>


<!--content start-->
    <main class="page-content">
      <!--Встраеваемый контент начало-->
      <section class="grid slider">
        <script>
          $(function () {
            $().timelinr({
              orientation: 'vertical'
              , issuesSpeed: 500
              , datesSpeed: 100
              , arrowKeys: 'true'
              , startAt: 1
            })
          });
        </script>
        <div class="col-16-16">
          <div id="timeline">
            <div class="push-13-16">
              <ul id="dates">
                <!--      nbsp - пробел для кликабельности-->
                <li><a href="#1" class="selected">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li><a href="#2">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li><a href="#3">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
<?php 
      $count=3;
      $args = array( 'post_type' => 'slides', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      $count = $count+1;          
?>
				<li><a href="#<?php echo $count;?>" title="<?php the_title();?>">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
<?php 
                endwhile; wp_reset_postdata(); 
?>
              </ul>
            </div>
            <ul id="issues">
            <li id="1" class="selected"> <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slider-1.png" />
                <h1>Мы проектируем крутые приложения</h1>
              </li>
              <li id="2"> <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slider-2.jpg" />
                <h1>Нереально крутые</h1>
              </li>
              <li id="3"> <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slider-3.jpg" />
                <h1>Завидуйте</h1>
              </li>
  <?php $post_count=3;
			while ( $loop->have_posts() ) : $loop->the_post();
  ?>
						<li id="<?php echo $post_count;?>"><img src="<?php echo get_field( "slide_img" );?>" alt="<?php the_title();?>" title="<?php the_title();?>"/>
						<h1><?php the_title();?></h1>
						</li>
			<? endwhile; ?>
            </ul>
            <div id="grad_top"></div>
            <div id="grad_bottom"></div> <a href="#" id="next">+</a> <a href="#" id="prev">-</a> </div>
        </div>
      </section>
      <section class="grid about_us">
        <div class="push-5-16 col-6-16">
          <h2>Сделать мир ярче? Легко!</h2>
          <p> Мы занимаемся разработкой мобильных приложений.&nbsp; Это то, что мы так любим и к чему относимся с уважением. Компания начала свою работу в 2010 году.&nbsp; На сегодняшний день у нас в активе более 20 успешно реализованных проектов.&nbsp; </p>
          <button href="/about" class="btn-arrow">Узнать больше о нас &rarr;</button>
        </div>
      </section>
       <section class="grid app app-item-container">
       <div class="col-8-16 tab-col-16-16 mobile-col-16-16 app-item">
        <img width="100%" height="100%" class="app-item-image" src="<?php echo get_template_directory_uri(); ?>/images/app/portf1.png"/>
        <div class="app-item--info tab-col-8-16">
         <div class="app-item--info-container">
          <a class="app-item--name" href="#"><h2 >Full Caption</h2></a>
          <p class="app-item--discr col-7-16">В нашем приложении вы найдете коллекцию из сотен лучших мультфильмов для ваших детей. </p>
          <span class="app-item--share col-16-16">
          <a href="#" class="appstore"></a>
          <a class="googleplay"></a>
          </span>
          </div></div>
			<span class="caption">
			</span>
        </div>
        <div class="col-8-16 tab-col-16-16 mobile-col-16-16 app-item">
        <img width="100%" height="100%" class="app-item-image" src="<?php echo get_template_directory_uri(); ?>/images/app/portf2.png"/>
        <div class="app-item--info tab-col-8-16">
         <div class="app-item--info-container">
          <a class="app-item--name" href="#"><h2 >Full Caption</h2></a>
          <p class="app-item--discr col-7-16">В нашем приложении вы найдете коллекцию из сотен лучших мультфильмов для ваших детей. </p>
          <span class="app-item--share col-16-16">
          <a href="#" class="appstore"></a>
          <a class="googleplay"></a>
          </span>
          </div></div>
			<span class="caption">
			</span>
        </div>
        <div class="col-8-16 tab-col-16-16 mobile-col-16-16 app-item">
        <img width="100%" height="100%" class="app-item-image" src="<?php echo get_template_directory_uri(); ?>/images/app/portf3.png"/>
        <div class="app-item--info tab-col-8-16">
         <div class="app-item--info-container">
          <a class="app-item--name" href="#"><h2 >Full Caption</h2></a>
          <p class="app-item--discr col-7-16">В нашем приложении вы найдете коллекцию из сотен лучших мультфильмов для ваших детей. </p>
          <span class="app-item--share col-16-16">
          <a href="#" class="appstore"></a>
          <a class="googleplay"></a>
          </span>
          </div></div>
			<span class="caption">
			</span>
        </div>
       
       <? $args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();?>
        <div class="col-8-16 tab-col-16-16 mobile-col-16-16 app-item">
        <img width="100%" height="100%" class="app-item-image" src="<?php echo get_field( "project_img_preview" );?>"/>
        <div class="app-item--info tab-col-8-16">
         <div class="app-item--info-container">
          <a class="app-item--name" href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
          <p class="app-item--discr col-7-16"><?php echo get_field( "project_decription" );?> </p>
          <span class="app-item--share col-16-16">
          <?php if (get_field( "project_link_applestore" )!==''){ ?>
		<a href="<?php echo get_field( "project_link_applestore" );?>" class="appstore"></a>
		<?php } ?>
		
		<?php if (get_field( "project_link_googleplay" )!==''){ ?>
		  <a href="<?php echo get_field( "project_link_googleplay" );?>" class="googleplay"></a>
		<?php } ?>
		
		<?php if (get_field( "project_link_winstore" )!==''){ ?>
		  <a href="<?php echo get_field( "project_link_winstore" );?>" class="winstore"></a>
		<?php } ?>
          </span>
          </div></div>
			<span class="caption">
			</span>
       
        </div>
        <? endwhile; wp_reset_postdata(); ?>
      </section>
      <section class="grid more">
        <div class="col-16-16 tab-col-16-16">
          <button href="/projects" class="btn-arrow">Больше работ здесь &rarr;</button>
        </div>
      </section>
      <?php include(TEMPLATEPATH . '/contacts.php');?>
      <!--Встраеваемый контент конец-->
    </main>
    <!--content end-->	
<?php get_footer();?>
<!--FrontPage end-->