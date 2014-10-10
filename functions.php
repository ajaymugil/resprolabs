<?php

/**
 * resprolabs functions and definitions
 *
 * @package resprolabs
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
    $content_width = 640; /* pixels */
}

if (!function_exists('resprolabs_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function resprolabs_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on resprolabs, use a find and replace
         * to change 'resprolabs' to the name of your theme in all the template files
         */
        load_theme_textdomain('resprolabs', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        //add_theme_support( 'post-thumbnails' );
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'resprolabs'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link',
        ));

        // Setup the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('resprolabs_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }

endif; // resprolabs_setup
add_action('after_setup_theme', 'resprolabs_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function resprolabs_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'resprolabs'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s panel">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'resprolabs_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function resprolabs_scripts() {
    wp_enqueue_style('resprolabs-style', get_stylesheet_uri());

    wp_enqueue_script('resprolabs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);

    wp_enqueue_script('resprolabs-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if(is_singular()){
    wp_enqueue_script('tutorial-by-parts', get_template_directory_uri() . '/js/tutorial-by-parts.js', array(), '20120206', true);

    }
}

add_action('wp_enqueue_scripts', 'resprolabs_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function custom_excerpt($text, $numb) {
    $text = strip_tags($text);
    $text = str_replace("\n", "", $text);
    $text = preg_replace("/\s\s+/", " ", $text);
    $text = preg_replace('@<script[^>]*?>.*?@si', '', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = preg_replace('`\[[^\]]*\]`', '', $text);
    if (strlen($text) > $numb) {
        $text = substr($text, 0, $numb);
        $text = substr($text, 0, strrpos($text, " "));
        $etc = " ...";
        $text = $text . $etc;
    }
    return $text;
}


function create_callout( $atts , $content = null ) {

    echo "<div class='panel callout'>". $content ."</div>";
}
add_shortcode( 'callout', 'create_callout' );


// Add Quicktags
function custom_quicktags() {

    if ( wp_script_is( 'quicktags' ) ) {
    ?>
    <script type="text/javascript">
    QTags.addButton( 'eg_paragraph', 'p', '<p>', '</p>', 'p', 'Paragraph tag', 1 );
    QTags.addButton( 'eg_hr', 'hr', '<hr />', '', 'h', 'Horizontal rule line', 201 );
    QTags.addButton( 'eg_pre', 'div', '<div>', '</div>', 'q', 'Preformatted text', 111 );
    </script>
    <?php
    }

}

// Hook into the 'admin_print_footer_scripts' action
add_action( 'admin_print_footer_scripts', 'custom_quicktags' );