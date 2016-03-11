<?php get_header(); ?>

<?php // determine the page layout selection
$page_layout = genesis_site_layout();
?>

<section class="page-interior">

     <div class="interior-wrap">

          <?php if (have_posts()) : while (have_posts()) : the_post();?>

               <article class="main-content">
          
                    <?php if( $page_layout == 'sidebar-content' ) : // show the sidebar if the sidebar-content page layout is chosen ?>
                         <sidebar class="interior-sidebar one-third first">
                              <?php dynamic_sidebar( 'sidebar' ); ?>
                         </sidebar>
                    <?php endif; ?>

                    <div class="page-content <?php if( $page_layout == 'sidebar-content' ) : ?>two-thirds<?php elseif( $page_layout == 'content-sidebar' ) : ?>two-thirds first<?php else : ?>full-width<?php endif; // Show the proper class based on the page layout selection ?>">
                         <h1 class="page-header"><?php the_title(); ?></h1>
                         <?php the_content(); ?>
                    </div>

                    <?php if( $page_layout == 'content-sidebar' ) : // show the sidebar if the content-sidebar page layout is chosesn ?>
                         <sidebar class="interior-sidebar one-third">
                              <?php dynamic_sidebar( 'sidebar' ); ?>
                         </sidebar>
                    <?php endif; ?>
          
               </article><!-- /main-content -->
          
          <?php endwhile; endif; ?>

     </div><!-- /interior-wrap -->

</section><!-- /page-interior -->

<?php get_footer(); ?>
