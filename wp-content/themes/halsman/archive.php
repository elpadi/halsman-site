<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
</div>
<!-- End Content -->

<!-- Sidebar -->
<aside>
    <?php get_sidebar(); ?>
</aside>
<!-- End Sidebar -->

<?php get_footer(); ?>