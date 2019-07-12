<?php

/**
 * Page template
 *
 * @package     WordPress
 * @subpackage  RST v3
 * @since       1.0.0
 * @author      Luke Kortunov
 */

?>

<?php

/**
 * Include header.php or header-XXX.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_header
 */
get_header();

?>

<?php

/**
 * Init WP_Post object
 */
if (have_posts()) : while (have_posts()) : the_post();
    get_template_part('parts/blocks');
endwhile;
endif;




/**
 * Include footer.php of footer-XXX.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_footer
 */
get_footer();

?>
