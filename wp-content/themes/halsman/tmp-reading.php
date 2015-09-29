<?php
/* @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 * Template Name: Further Reading
 */

get_header(); ?>
    
        <!-- Content -->
        <div class="content grp">
            <?php while ( have_posts() ) : the_post(); ?>
            
                <?php echo do_shortcode('[gallery option1="value1" columns="3" size="thumbnail" link="file" exclude="' . get_post_thumbnail_id( $post->ID ) . '"]'); ?>
            
            <?php endwhile; // end of the loop. ?>
            <?php wp_reset_query(); ?>
            <div class="clear"></div>
            <?php
            //Query Posts for the sidebar navigation and sort them alphabetically
            global $query_string;
            query_posts( 'page_id=2199&order=asc&posts_per_page=-1' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
            
                <h1 class="title <?php echo get_post_type(); ?>"><?php the_title(); ?></h1>
                
				<?php echo do_shortcode('[gallery option1="value1" columns="3" size="thumbnail" link="file" exclude="' . get_post_thumbnail_id( $post->ID ) . '"]'); ?>
            
            <?php endwhile; // end of the loop. ?>
            <?php wp_reset_query(); ?>
        	<p class="copy">&copy; Copyright 2014 Halsman Archive. All rights reserved. <a href="http://www.sheilabuchanan.com/" target="_blank">Site Development</a></p>
        </div>
        <!-- End Content -->
        
        <!-- Sidebar -->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
        <!-- End Sidebar -->

<?php get_footer(); ?>