<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<section class="page-interior">
     <div class="interior-wrap">
          <div class="page-content">
               <h1 class="page-header"><?php the_title(); ?></h1>
               <?php the_content(); ?>
          </div>
     </div>
</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
