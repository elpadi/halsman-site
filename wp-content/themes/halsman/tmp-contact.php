<?php
/* @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 * Template Name: Contact Page
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
    
        <!-- Content -->
        <div class="content grp">
        
        	<?php //If there is a Feature Image then show it ?>
			<?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
            } ?>
            
            <p class="copy">&copy; Copyright 2014 Halsman Archive. All rights reserved. <a href="http://www.sheilabuchanan.com/" target="_blank">Site Development</a></p>
        </div>
        <!-- End Content -->
        
        <!-- Sidebar -->
        <aside>
        	<h2 class="<?php echo get_post_type(); ?> <?php echo $post->post_name; ?>"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </aside>
        <!-- End Sidebar -->
    
    <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>