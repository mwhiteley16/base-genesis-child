<?php
/*
Template Name: Home Page Template
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

<section class="page-interior">

     <div class="interior-wrap">

          <article class="main-content">

               <div class="page-content <?php if( $page_layout == 'sidebar-content' ) : ?>two-thirds<?php elseif( $page_layout == 'content-sidebar' ) : ?>two-thirds first<?php else : ?>full-width<?php endif; // Show the proper class based on the page layout selection ?>">
                    <h1 class="page-header"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
               </div>

          </article><!-- /main-content -->

     </div><!-- /interior-wrap -->

</section><!-- /page-interior -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
