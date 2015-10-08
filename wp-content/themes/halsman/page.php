<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<?php //If it is the homepage
global $post;
 ?>
<?php if(is_page('home')){ ?>

	<div class="content grp">
    
		<div class="home-slideshow slideshow"><?php echo implode('', array_map(function($p) { return wp_get_attachment_image($p->ID, 'full'); }, get_attached_media('image'))); ?></div>
        <p class="copy">&copy; Copyright 2015 Halsman Archive. All rights reserved.</p>

    </div>

    <div class="footer-icons">

	<p class="copy"><?php include(__DIR__.'/snippets/social-media-buttons.php'); ?></p>
    
    </div>
    
<?php } else { ?>

	<?php //If this is the images page ?>
	<?php if( is_page('images') ){ ?>
    
    	<?php
		//Query all of the Images Posts, Order by Title, and Order Ascending. 
		$postType = 'image';
        global $query_string;
		query_posts( 'post_type='.$postType.'&orderby=date&order=asc&posts_per_page=-1' );
		
		//Create a counter to track the number of posts per row
		$count = 0;
		?>
        
        <!-- Content -->
        <div class="content grp">
        
            <div id="gallery-1" class="gallery galleryid-130 gallery-columns-3 gallery-size-thumbnail">
            
            <?php //Start the Loop ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <?php
				//Increase the counter
                $count++;
				
				//Create the thumbnails, captions, and links
                ?>
                <dl class="gallery-item">
                    <dt class="gallery-icon">
                    
                    	<?php //Create the link to the Images Post, Create the Feature Image Thumbnail ?>
                        <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="attachment-thumbnail" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></a>
                    </dt>
                    
                    <?php //Create the Caption ?>
                    <dd class="wp-caption-text gallery-caption"><?php the_title(); ?></dd>
                </dl>
                
                <?php //If the counter has reached three then we have reached the maximum amount of thumbnails in our row ?>
                <?php if($count==3){ ?>
                
                	<?php //Set the counter back to 0 ?>
                    <?php $count = 0; ?>
                    
                    <?php //Start a new row ?>
                    <br style="clear: both">
                <?php } ?>
            
            <?php endwhile;
            // End the loop and reset the Query ?>
            </div>
            <p class="copy">&copy; Copyright 2015 Halsman Archive. All rights reserved. <a href="http://www.sheilabuchanan.com/" target="_blank">Site Development</a></p></p>
			<p class="copy"><?php include(__DIR__.'/snippets/social-media-buttons.php'); ?></p>
        </div>
        <!-- End Content -->
        
        <!-- Sidebar -->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
        <!-- End Sidebar -->
    
    <?php } else { ?>
    
        <!-- Content -->
        <div class="content grp">
            <?php while ( have_posts() ) : the_post(); ?>
            
                <?php get_template_part( 'content', 'page' ); ?>
            
            <?php endwhile; // end of the loop. ?>
            <p class="copy">&copy; Copyright 2015 Halsman Archive. All rights reserved. <a href="http://www.sheilabuchanan.com/" target="_blank">Site Development</a></p>
			<p class="copy"><?php include(__DIR__.'/snippets/social-media-buttons.php'); ?></p>
        </div>
        
        <!-- End Content -->
        
        <!-- Sidebar -->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
        <!-- End Sidebar -->
    
    <?php } ?>
    
<?php } ?>

<?php get_footer(); ?>
