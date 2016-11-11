<?php
/*
Template Name: Home Page Template
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

<?php if( have_rows( 'slideshow' ) ): ?>
     <div id="slider">
          <div class="slideshow-con">
              <?php $slide_number = 0; ?>
              <?php while ( have_rows( 'slideshow' ) ) : the_row(); ?>

                   <?php //get variables
                   $slide_image = get_sub_field( 'slideshow_image' );
                   $home_slideshow_image_link = get_sub_field( 'slideshow_link' );
                   $slide_number++
                   ?>

                   <div id="slide-<?php echo $slide_number; ?>" class="slider-con">
                        <?php if( !empty( $home_slideshow_image_link ) ) : ?>
                             <a href="<?php echo $home_slideshow_image_link; ?>">
                        <?php endif; ?>
                        <img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>">
                        <?php if( !empty( $home_slideshow_image_link ) ) : ?>
                             </a>
                        <?php endif; ?>
                   </div>

              <?php endwhile; ?>

              <div class="fader_controls">
                   <div class="page prev" data-target="prev"><i class="fa fa-angle-left"></i></div>
                   <div class="page next" data-target="next"><i class="fa fa-angle-right"></i></div>
                   <ul class="pager_list"></ul>
              </div>
          </div>
     </div>
<?php endif; ?>

<section class="page-interior">

     <div class="interior-wrap">

          <div class="page-content full-width">
               <h1 class="page-header"><?php the_title(); ?></h1>
               <?php the_content(); ?>
          </div>

     </div><!-- /interior-wrap -->

</section><!-- /page-interior -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
