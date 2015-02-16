<?php
/*
Template Name: Blog Page Template
*/
?>

<?php get_header(); ?>

<section class="page-interior">

     <div class="interior-wrap">

          <h1 class="page-header">Blog, Tips & Tricks</h1>

          <?php $itemNum = 1; ?>
          <?php if (have_posts()) : while (have_posts()) : the_post();?>

               <article class="main-content blog-item item-<?php echo $itemNum; ?>">
          
                    <h2 class="blog-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <div class="page-content">
                         <span class="post-archive-meta">Post by <?php the_author(); ?> on <?php the_date(); ?></span>
                         <div class="post-archive-excerpt"><?php the_excerpt(); ?></div>
                         <a class="post-archive-readmore" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>

               </article><!-- /main-content -->

          <?php $itemNum++ ?>
          <?php endwhile; 
          genesis_posts_nav();
          endif; ?>

     </div><!-- /interior-wrap -->

</section><!-- /page-interior -->

<?php get_footer(); ?>

