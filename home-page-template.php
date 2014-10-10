<?php
/*
  Template Name: Front Page Template
 */
get_header();
?>
<?php if (get_field("hero_block") == "1"): ?>
    <section class="hero-wrapper">
        <div class="row hero">
            <div class="medium-12 large-8 columns">
                <h1><?php the_field("hero_text_big"); ?></h1>
                <p><?php the_field("hero_text_para"); ?></p>


                <?php if (get_field("hero_cta_switch") == "Yes") : ?>
                    <a href="<?php the_field("hero_cta_link"); ?>" class="button calltoaction"><?php the_field("hero_cta_text"); ?></a>
                <?php endif; ?>
            </div>

            <div class="large-4 columns hero-img-wrapper visible-for-large-up">
                <div class="cycle-slideshow " data-cycle-fx="flipHorz">

                <?php

                if(have_rows("slider_images")):
                    foreach(get_field("slider_images") as $image):
                ?>
                    <img class="hero-img" src="<?php echo $image['image'] ?>" />
                    <!-- <img class="hero-img" src="http://makerandhacker.com/wp-content/uploads/2014/07/arduino-logo.png" /> -->
                <?php
                endforeach;
                endif;
                ?>

                </div>
            </div>


        </div> <!--  Hero Ends -->
    </section><!--  Hero Wrapper Ends -->

<?php endif; ?>

<section class="features-wrapper">
    <div class="row features">
        <div class="large-12 columns">
            <h2 class="section-title">Lorem Ipsum</h2>
            <ul class="small-block-grid-2 medium-block-grid-4">
                <li>
                    <span class="image-holder"><img src="http://placehold.it/100x100" /></span>
                    <p class="lead">Lorem ipsum mentum</p>
                </li>
                <li>
                    <span class="image-holder"><img src="http://placehold.it/100x100" /></span>
                    <p class="lead">Lorem ipsum mentum</p>
                </li>
                <li>
                    <span class="image-holder"><img src="http://placehold.it/100x100" /></span>
                    <p class="lead">Lorem ipsum mentum</p>
                </li>
                <li>
                    <span class="image-holder"><img src="http://placehold.it/100x100" /></span>
                    <p class="lead">Lorem ipsum mentum</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="flash-block-wrapper">
    <div class="row flash-block">
        <div class="large-12 columns">
            <h3>Lorem Ispum DOlor Site Amet</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Donec pellentesque id sapien sed elementum.
                Donec ut placerat ex. Fusce velit nisi, accumsan ves.</p>
            <a href="#" class="button" >Call to action</a>
        </div>
    </div>
</section>






<section class="prefooter-wrapper">
    <div class="row blog-posts">
        <div class="large-7 columns">
            <?php if (have_posts()) : ?>

                <?php /* Start the Loop */ ?>
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content() ?>


                <?php endwhile; ?>

                <?php
            endif;
            wp_reset_postdata();
            ?>

            <!--                    <h2 class="sub-section-title"></h2>

                    <div class="blog-post-item">
                        <h4 class="blog-post-title">Lorem Ipsume doeler sit amet.</h4>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Donec pellentesque id sapien sed elementum.
                            Donec ut placerat ex. Fusce velit nisi, accumsan ves.</p>
                        <span><a href="#">Read more..</a></span>

                    </div>
                    <div class="blog-post-item">
                        <h4 class="blog-post-title">Lorem Ipsume doeler sit amet.</h4>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Donec pellentesque id sapien sed elementum.
                            Donec ut placerat ex. Fusce velit nisi, accumsan ves.</p>
                        <span><a href="#">Read more..</a></span>

                    </div>-->

        </div>

        <div class="large-5 columns">
            <!--            <h2 class="sub-section-title">Lorem Ipsum</h2>

                        <ul class="latest-posts">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec pellentesque id sapien sed elementum.
                                <span><a href="#">Read more..</a></span>
                            </li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Donec pellentesque id sapien sed elementum.
                                <span><a href="#">Read more..</a></span>


                            </li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.
                                <span><a href="#">Read more..</a></span>

                            </li>

                        </ul>-->
            <?php
            $query = new WP_Query('posts_per_page=4');
            ?>
            <?php if ($query->have_posts()) : ?>
                <h2>Latest Workshops</h2>
                <ul class="latest-posts">
                    <?php /* Start the Loop */ ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <li><?php the_title(); ?>

                            <span> <a href="<?php the_permalink(); ?>">Read more..</a></span>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <p>No Posts</p>
            <?php endif; ?>

        </div>
    </div>
</section>



<?php get_footer(); ?>
