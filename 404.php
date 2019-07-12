<?php

/**
 * 404 template
 *
 * @package     WordPress
 * @subpackage  RST v3
 * @since       1.0.0
 * @author      Luke Kortunov
 */

?>

<?php

/**
 * Include header.php or require header-xxx.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_header
 * @link        https://wp-kama.ru/functuion/get_header
 */
get_header();

?>



<?php # TODO: code here ?>
<div class="error-block">
    <div class="container">
        <h1 class="error-block__title">Page not found</h1>
    </div>
</div>

<?php

/**
 * Include footer.php or require footer-xxx.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_footer
 * @link        https://wp-kama.ru/functuion/get_footer
 */
get_footer();

?>
