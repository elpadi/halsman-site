<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<?php //If this is the Images Post Type or Publications Post Type ?>
<?php if ( ('image' == get_post_type()) || ('publication' == get_post_type()) ){ ?>
	
    <?php //Spit out the Gallery and exclude the Feature Image ?>
	<?php echo do_shortcode('[gallery option1="value1" columns="3" size="full" link="file" exclude="' . get_post_thumbnail_id( $post->ID ) . '"]'); ?>
    <div class="grp added-info"><?php the_content(); ?></div>
	
<?php } else { ?>
	
    <?php //Else, treat this like a regular page ?>
    
    <?php //If there is a Feature Image then show it ?>
	<?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('full');
    } ?>
    
    <?php //Display the title ?>
    
    <h1 class="title <?php echo get_post_type(); ?>"><?php the_title(); ?></h1>
    
	<?php //If this has a Post Type of Post then show the date. Essentially is this in the blog/news section? ?>
	<?php if ( 'post' == get_post_type() ){ ?>
    
    <?php } ?>
    
    <?php //Display the content ?>
    <?php the_content(); ?>

<?php } ?>