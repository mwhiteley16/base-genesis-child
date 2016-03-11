<?php get_header(); ?>

<section class="page-interior">

     <div class="interior-wrap">

     <article class="main-content">    

          <h1 class="page-header">CPT Name</h1>

          <div class="page-content">

          <?php $item_count = 0; ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php $item_count++; ?>
               
               <div class="archive-item archive-item-<?php echo $item_count; ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="acrhive-item-right">
                         <h2><?php the_title(); ?></h2>
                         <div class="archive-content"><?php the_content(); ?></div>
                    </div><!-- /archive-item-right -->
               </div><!-- /archive-item -->
          
          <?php endwhile; endif; ?>
          
          </div><!-- /page-content -->

     </article><!-- /main-content -->

     </div>

</section><!-- /page-interior -->

<?php get_footer(); ?>
