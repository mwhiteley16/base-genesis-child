<div class="header-logo-wrap">
     <a href="<?php echo get_home_url(); ?>"><img class="header-logo" src="http://basegenesis.whiteleydesigns.com/wp-content/uploads/2016/11/wd-basegenesis-logo.png" alt="Genesis Child Theme Logo"></a>
</div>

<button class="mobile-menu-toggle">
     <div></div>
     <div></div>
     <div></div>
</button>

<script>
jQuery(document).ready(function() {
     jQuery('button.mobile-menu-toggle').click(function() {
         jQuery(this).toggleClass('active');
         jQuery('.nav-primary').slideToggle();
     });
});
</script>
