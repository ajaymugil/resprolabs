<?php
/**
 * The template for displaying all single posts.
 *
 * @package resprolabs
 */

get_header(); ?>




<div class="row">
	<div id="primary" class="content-area">

		<main id="main" class="site-main small-12 medium-12 large-8 columns" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


        <h2 class="page-heading">Blog</h2>


			<?php get_template_part( 'content', 'single' ); ?>







    		<?php resprolabs_post_nav(); ?>





			<?php
				// If comments are open or we have at least one comment, load up the comment template
				// if ( comments_open() || '0' != get_comments_number() ) :
				// 	comments_template();
				// endif;
			?>



		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

    <div class="large-4 columns show-for-large-up sidebar-custom">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>