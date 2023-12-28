<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mogo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="header_main_row">
        <h1 class="logo_wrap header_mod">
            <a href="#" class="logo_text header_mod">
                <?php echo get_bloginfo('name'); ?>
            </a>
        </h1>
    </div>
    <div class="menu_trigger_wrap">
        <div id="menu_trigger" class="menu_trigger"><span class="menu_trigger_decor"></span></div>
    </div>
    <nav class="header_menu_row">
	    <?php
	    wp_nav_menu(
		    array(
			    'theme_location' => 'header_menu',
			    'menu_id'        => 'header_menu',
			    'menu_class'     => 'header_menu_list',
			    'container'      => '',
			    'add_li_class'   => 'header_menu_item'
		    )
	    );
	    ?>
    </nav>
</header>
