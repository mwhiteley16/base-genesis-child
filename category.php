<?php get_header(); ?>

<section class="page-interior">
     <div class="interior-wrap">
          <div class="page-content">
               <h1 class="page-header"><?php single_cat_title(); ?></h1>
               <?php genesis_loop(); ?>
          </div>
     </div>
</section>

<?php get_footer(); ?>
