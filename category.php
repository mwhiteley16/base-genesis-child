<?php get_header(); ?>

<section class="page-interior">

     <div class="interior-wrap">

          <h1 class="page-header"><?php single_cat_title(); ?></h1>

          <?php genesis_loop(); ?>

     </div><!-- /interior-wrap -->

</section><!-- /page-interior -->

<?php get_footer(); ?>
