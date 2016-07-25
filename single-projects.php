<!--single-pro-->
<?php get_header();?>

<main class="page-content">
      <!--Встраеваемый контент начало-->
      <section class="grid slider-h">
        <script>
          $(function () {
            $().timelinr({
              arrowKeys: 'true'
              , startAt: 3
            })
          });
        </script>
<div class="col-16-16">
<div id="timeline">
<?php 
  $count=0;
  if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла 
  $count = $count+1;
  ?>
 <!-- верхние подписи -->
  <div class=""><ul id="dates">
 <? 
  $args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  ?>
        <li>
          <a class="btn btn-default" href="#<?php echo $count; ?>">
          <?php the_title();?>
          </a>
        </li>
    <? endwhile; wp_reset_postdata(); ?>
    </ul>
 </div>
<!-- контент страничек-->
  <ul id="issues">
  <li id="<?php echo $count; ?>" class="issues-elem">
  <div class="grid">
  <div class="issues-content--info push-2-16 col-2-16 tab-col-6-16 mobile-col-16-16">
  <h2><?php the_title();?></h2>
  <p>Платформы:</p>
  <?php
			$terms = get_terms( 'project-cat' );
			
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			 foreach ( $terms as $term ) {
			   echo '<p class="li">' . $term->name . '</p>';
			 }
		}?>
   
    <?php if (get_field( "project_link_applestore" )!==''){ ?>
		<a href="<?php echo get_field( "project_link_applestore" );?>" class="appstore"></a>
		<?php } ?>
		
		<?php if (get_field( "project_link_googleplay" )!==''){ ?>
		  <a href="<?php echo get_field( "project_link_googleplay" );?>" class="googleplay"></a>
		<?php } ?>
		
		<?php if (get_field( "project_link_winstore" )!==''){ ?>
		  <a href="<?php echo get_field( "project_link_winstore" );?>" class="winstore"></a>
		<?php } ?>
    
     <button class="btn btn-arrow down">&larr; Назад к iphone</button>
  </div>
<!-- картинка поста -->
  <div class="push-1-16 col-5-16 tab-col-10-16 mobile-col-16-16"> 
    <img src="<?php echo get_field( "project_img" );?>" /> 
  </div>
<!--  подпись с права-->
		<div class="push-1-16 col-3-16 t-push-6-16 tab-col-10-16 mobile-col-16-16">
            <?php the_content(); ?>
                    <p class="issues-description">
                    
                    </p>
                    <div class="share-icon mobile-col-16-16">
                      <p>Понравилось</p>
                      <p>приложение?</p>
                      <p> Расскажите друзьям</p>
                      <div class=""><a href="#"><i class="fa fa-vk"></i></a></div>
                      <div class=""><a href="#"><i class="fa fa-facebook"></i></a></div>
                    </div>
                  </div>
    </li>
   </ul>
 <div id="grad_top"></div>
  <div id="grad_bottom"></div> <a href="#" id="next">+</a> <a href="#" id="prev">-</a>
    </div>
     
      </section>
      <!--Встраеваемый контент конец-->
    </main>
    <!--content end-->
<?php endwhile; // Конец цикла ?>
<?php get_footer();?>
<!--single-pro end-->