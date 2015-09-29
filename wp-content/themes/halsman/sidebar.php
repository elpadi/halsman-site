<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<?php
global $post; //If outside the loop
$theID = $post->ID;

// Create the title with a class of the post type and post name
?>
<h2 class="<?php echo get_post_type(); ?> <?php echo $post->post_name; ?>"><?php the_title(); ?></h2>

<?php
// If this is an image post type, the images page, publications post type, or publications page

if ( ('image' == get_post_type()) || (is_page('images')) || ('publication' == get_post_type()) || (is_page('publications')) ){

	//If this is an image post type or the images page
	if( ('image' == get_post_type()) || (is_page('images')) ){
	
	//Then the postType is image
	$postType = 'image';
		
	} else {
	
	//Else the postType is publication
	$postType = 'publication';
		
	}
	
	//Query Posts for the sidebar navigation and sort them alphabetically
	global $query_string;
	query_posts( 'post_type='.$postType.'&orderby=date&order=asc&posts_per_page=-1' );
	
	//Start the loop
	?>
    <ul>
    <?php while ( have_posts() ) : the_post(); ?>
    
		<li<?php if($theID != $post->ID){ } else {?> class="current_page_item"<?php } ?>><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
    
	<?php endwhile;
	// End the loop and reset the Query ?>
    </ul>
    <?php wp_reset_query(); ?>
    
<?php } else { 

//Else if it is just a normal page or the news posts

	if ( 'page' == get_post_type() ){
	//If it is a page then list the child pages. If it is a child page then find the child pages.
	
        if($post->post_parent){ ?>
			<ul><?php wp_list_pages('child_of='.$post->post_parent.'&title_li=&sort_column=menu_order'); ?></ul>
		<?php }else{ ?>
			<ul><?php wp_list_pages('child_of='.$post->ID.'&title_li=&sort_column=menu_order'); ?></ul>
		<?php } ?>
        
	<?php }
	
	if ( 'post' == get_post_type() ){
	//If it is a post then list the archive	
	?>
		
        <ul>
        <?php wp_get_archives('type=yearly'); ?>
        </ul>
        
	<?php }

?>
	
<?php }?>

<!-- <div class="contactBadge">

	<h2 class="badgeHeader">Contact Archive</h2>
    <p>Please contact <a href="/contact/">Philippe HalsmanArchive</a> for more information.</p>

</div> -->

<?php //If there is a sidebar quote, display it. ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php $custom_fields = get_post_custom(); ?>
    
    <?php if(count($custom_fields['sidebar-quote']) > 0){ ?>
        
        <div class="sidebar-quote">
            <p><?php echo $custom_fields['sidebar-quote'][0]; ?></p>
        </div>
        
    <?php } ?>
    
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); ?>