<?php
/*
Template Name: Base Page Template
*/
?>

<?php get_header(); ?>

<section class="page-interior">

     <div class="interior-wrap">

          <?php if (have_posts()) : while (have_posts()) : the_post();?>

               <article class="main-content <?php echo the_title(); ?>">    
          
                    <?php if( has_post_thumbnail() ) : ?>
                         <div class="page-header-img-con">
                              <?php the_post_thumbnail(); ?>
                              <h1 class="page-header"><span><?php the_title(); ?></span></h1>
                         </div><!-- /page-header-img-con -->
                    <?php else : ?>
                         <h1 class="page-header"><span><?php the_title(); ?></span></h1>
                    <?php endif; ?>

                    <div class="page-content">
                         <?php the_content(); ?>
                    </div>

               </article><!-- /main-content -->

          <?php endwhile; endif; ?>
     
          <?php get_template_part('inc/main-sidebar'); ?>

     </div><!-- /interior-wrap -->

</section><!-- /page-interior -->

<?php get_footer(); ?>
