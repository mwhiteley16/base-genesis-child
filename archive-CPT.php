<?php get_header(); ?>

<section class="page-interior">
     <div class="interior-wrap">
          <div class="page-content">

               <h1 class="page-header">CPT Name</h1>
               <?php $item_count = 0; ?>
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php $item_count++; ?>                    
                    <div class="archive-item archive-item-<?php echo $item_count; ?>">
                         <?php the_post_thumbnail(); ?>
                         <div class="acrhive-item-right">
                              <h2><?php the_title(); ?></h2>
                              <div class="archive-content"><?php the_content(); ?></div>
                         </div>
                    </div>     
               <?php endwhile; endif; ?>
          
          </div>
     </div>
</section>

<?php get_footer(); ?>
