<!--Projects-->
<?php
/*Template Name: Projects
*/
get_header();?>

 <div class="portfolio">
   <style>.s-h{background-image: none;}</style>
<section class="filter header-margin" >
 <ul class="filter-list">
   <li><a class="btn btn-arrow" href="#">Все</a></li>
   <li><a class="btn btn-arrow" href="#">Android</a></li>
   <li><a class="btn btn-arrow" href="#">iOS</a></li>
   <li><a class="btn btn-arrow" href="#">iPad</a></li>
   <li><a class="btn btn-arrow" href="#">Windows Phone</a></li>
 </ul>
</section>
<section class="grid app app-item-container">
      <div class="col-8-16 tab-col-16-16 mobile-col-16-16 app-item">
        <img width="100%" height="100%" class="app-item-image" src="<?php echo get_template_directory_uri(); ?>/images/app/portf5.png"/>
        <div class="app-item--info tab-col-8-16">
          <a class="app-item--name" href="#"><h2 >Full Caption</h2></a>
          <p class="app-item--discr col-7-16">В нашем приложении вы найдете коллекцию из сотен лучших мультфильмов для ваших детей. </p>
          <span class="app-item--share col-16-16">
          <a href="#" class="appstore"></a>
          <a class="googleplay"></a>
          </span>
        </div>
			<span class="caption">
			</span>
        </div>
        <div class="col-8-16 tab-col-16-16 mobile-col-16-16 app-item">
        <img width="100%" height="100%" class="app-item-image" src="<?php echo get_template_directory_uri(); ?>/images/app/portf4.png"/>
        <div class="app-item--info tab-col-8-16">
          <a class="app-item--name" href="#"><h2 >Full Caption</h2></a>
          <p class="app-item--discr col-7-16">В нашем приложении вы найдете коллекцию из сотен лучших мультфильмов для ваших детей. </p>
          <span class="app-item--share col-16-16">
          <a href="#" class="appstore"></a>
          <a class="googleplay"></a>
          </span>
        </div>
			<span class="caption">
			</span>
        </div>
        <div class="col-8-16 tab-col-16-16 mobile-col-16-16 app-item">
        <img width="100%" height="100%" class="app-item-image" src="<?php echo get_template_directory_uri(); ?>/images/app/portf1.png"/>
        <div class="app-item--info tab-col-8-16">
          <a class="app-item--name" href="#"><h2 >Full Caption</h2></a>
          <p class="app-item--discr col-7-16">В нашем приложении вы найдете коллекцию из сотен лучших мультфильмов для ваших детей. </p>
          <span class="app-item--share col-16-16">
          <a href="#" class="appstore"></a>
          <a class="googleplay"></a>
          </span>
        </div>
			<span class="caption">
			</span>
        </div>
       <? $args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();?>
        <div class="col-8-16 tab-col-16-16 mobile-col-16-16 app-item">
        <img width="100%" height="100%" class="app-item-image" src="<?php echo get_field( "project_img_preview" );?>"/>
        <div class="app-item--info tab-col-8-16">
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
        </div>
			<span class="caption">
			</span>
       
        </div>
        <? endwhile; wp_reset_postdata(); ?>
      </section>
      </div>
<?php get_footer();?>
<!--Projects-->