<?php
/* @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 * Template Name: Licensing
 */

get_header(); ?>
    
        <!-- Content -->
        <div class="content grp">
            <?php while ( have_posts() ) : the_post(); ?>
            
                <div class="col-a">
                
                	<?php //If there is a Feature Image then show it ?>
					<?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('full');
                    } ?>
                
                </div>
                
                <div class="col-b">
                
                	<?php the_content(); ?>
                
                </div>
            
            <?php endwhile; // end of the loop. ?>
            <p class="copy">&copy; Copyright 2014 Halsman Archive. All rights reserved. <a href="http://www.sheilabuchanan.com/" target="_blank">Site Development</a></p>
        </div>
        <!-- End Content -->
        
        <!-- Sidebar -->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
        <!-- End Sidebar -->

<?php get_footer(); ?>