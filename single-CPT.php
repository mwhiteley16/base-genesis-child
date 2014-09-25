<?php get_header(); ?>

<section class="page-interior single custom-posttype">

     <div class="interior-wrap">

     <?php if (have_posts()) : while (have_posts()) : the_post();?>

     <article class="main-content <?php echo the_title(); ?>">    

          <h1 class="page-header"><?php the_title(); ?></h1>

          <div class="page-content">
               <?php the_content(); ?>
          </div>

     </article><!-- /main-content -->

     <?php endwhile; endif; ?>
     
     <?php get_template_part('inc/main-sidebar'); ?>

     </div>

</section><!-- /page-interior -->

<?php get_footer(); ?>
