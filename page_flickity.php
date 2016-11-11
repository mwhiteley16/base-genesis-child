<?php
/*
Template Name: Flickity Page Template
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

<?php if( have_rows('slideshow') ) : ?>
     <div class="home-slideshow-con">

          <?php while ( have_rows('slideshow') ) : the_row(); ?>

               <?php // ACF Variables for slideshow
               $home_slide_image = get_sub_field( 'slideshow_image' );
               $home_slide_link = get_sub_field( 'slideshow_link' );
               ?>

               <div class="gallery-cell" style="background-image:url('<?php echo $home_slide_image['url']; ?>');">
                    <?php if( $home_slide_link ) : ?><a class="slideshow-link" href="<?php echo $home_slide_link; ?>"></a><?php endif; ?>
               </div>

          <?php endwhile; ?>

     </div>
<?php endif; ?>

<script>
// full list of Flickity arguements found here - http://flickity.metafizzy.co/#getting-started
jQuery(document).ready(function() {
     jQuery('.home-slideshow-con').flickity({
          cellAlign: 'left',
          contain: true,
          setGallerySize: false,
          autoPlay: 3000,
          wrapAround: true,
          dragThreshold: 25,
          pageDots: false
     });
});
</script>

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
