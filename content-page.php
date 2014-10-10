<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package resprolabs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



    		  <?php the_title( '<h2 class="page-heading">', '</h2>' ); ?>




	<div class="entry-content">

    		<?php the_content(); ?>
    		<?php
    			wp_link_pages( array(
    				'before' => '<div class="page-links">' . __( 'Pages:', 'resprolabs' ),
    				'after'  => '</div>',
    			) );
    		?>

	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'resprolabs' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-## -->
