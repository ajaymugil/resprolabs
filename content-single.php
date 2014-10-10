<?php
/**
 * @package resprolabs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




    <div class="entry-content ">
            <div class="entry-header">

              <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

             </div><!-- .entry-header -->
            <?php the_content(); ?>

            <?php

            if(get_field("tutorial_by_parts")[0] == "1"){




                if(have_rows("Sections")){
                    $i = 0;
                    echo "<div class='toc'></div>";
                    foreach (get_field("Sections") as $section_parts) {
                        echo "<section id='section_".$i."' class='tutorial_by_parts' >";
                        echo "<div class='toc-trigger'><span  class='fa fa-bars'></span></div>";

                        echo "<h3  class='section-title'>$section_parts[section_title]</h3>";
                        echo "<div class='section-content'>".$section_parts['section_content']."</div>";
                        echo "</section>";
                        $i++;
                    }
                }

                echo "<div class='pagination'></div>";
            }
            ?>

            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'resprolabs' ),
                    'after'  => '</div>',
                ) );
            ?>

    </div><!-- .entry-content -->

	<div class="entry-footer">
		<?php resprolabs_entry_footer(); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-## -->
