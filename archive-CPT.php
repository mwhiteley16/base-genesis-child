<?php get_header(); ?>

<section class="page-interior archive custom-posttype">

     <div class="interior-wrap">

     <article class="main-content">    

          <h1 class="page-header">Instructors</h1>

          <div class="page-content">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               
               <div class="archive-item">
                    <?php the_post_thumbnail(); ?>
                    <div class="acrhive-item-right">
                         <h2><?php the_title(); ?></h2>
                         <div class="archive-content"><?php the_content(); ?></div>
                    </div><!-- /archive-item-right -->
               </div><!-- /archive-item -->
          
          <?php endwhile; endif; ?>
          
          </div><!-- /page-content -->

     </article><!-- /main-content -->
     
     <?php get_template_part('inc/main-sidebar'); ?>

     </div>

</section><!-- /page-interior -->

<?php get_footer(); ?>
