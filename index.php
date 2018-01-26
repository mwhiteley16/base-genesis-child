<?php get_header(); ?>

<section class="page-interior">
     <div class="interior-wrap">
          <div class="page-content">
               <?php if( is_author() ) : ?>
                    <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
                    <h1 class="page-header">Posts by <?php echo $curauth->display_name; ?></h1>
               <?php elseif( is_category() ) : ?>
                    <h1 class="page-header">Category: <?php single_cat_title(); ?></h1>
               <?php else : ?>
                    <h1 class="page-header">Blog</h1>
               <?php endif; ?>
               <?php do_action('genesis_loop'); ?>
          </div>
     </div>
</section>

<?php get_footer(); ?>
