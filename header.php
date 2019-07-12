<?php

/**
 * Header file
 *
 * @package     WordPress
 * @subpackage  RST v3
 * @since       1.0.0
 * @author      Luke Kortunov
 */

?>

<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
<header class="header">
	<div class="container">
		<div class="header-wrap">
			<strong class="logo"><a href="/">
				<?php
					$logo = get_field('logo','option');
					?>
					<?php if(!empty($logo)){?>
					    <img src="<?php echo  $logo;?>" alt="<?php bloginfo('name'); ?>">
					<?php }?></a></strong>
			<nav class="main-nav">
				<?php
				if (has_nav_menu('primary')) {
				    wp_nav_menu(['theme_location' => 'primary', 'menu_id' => 'menu-main']);
				}
				?>
			</nav>
			<div class="burger-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
</header>
