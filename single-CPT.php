<?php get_header(); ?>

<section class="page-interior">

     <div class="interior-wrap">

     <?php if (have_posts()) : while (have_posts()) : the_post();?>

          <div class="page-content">
               <h1 class="page-header"><?php the_title(); ?></h1>
               <?php the_content(); ?>
          </div>

     <?php endwhile; endif; ?>

     </div>

</section><!-- /page-interior -->

<?php get_footer(); ?>
