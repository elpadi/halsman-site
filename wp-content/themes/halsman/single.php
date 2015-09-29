<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

    <!-- Content -->
    <div class="content grp">
		<?php while ( have_posts() ) : the_post(); ?>
        
            <?php get_template_part( 'content', 'page' ); ?>
        
        <?php endwhile; // end of the loop. ?>
        <p class="copy">&copy; Copyright 2015 Halsman Archive. All rights reserved. <a href="http://www.sheilabuchanan.com/" target="_blank">Site Development</a></p>
    </div>
    <!-- End Content -->
    
    <!-- Sidebar -->
    <aside>
    	<?php get_sidebar(); ?>
    </aside>
    <!-- End Sidebar -->

<?php get_footer(); ?>