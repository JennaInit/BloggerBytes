<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div id="site-container">
<header id="site-header">
    
<?php if ( get_header_image() ) : ?>
<div class="header-image" style="background-image: url(<?php header_image(); ?>);
background-size:cover;height:100%;width:100%;margin-top:-4em;margin-bottom:4em;"></div>
<?php endif; ?>

<div id="wrap-inside-header">
<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
	echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
	echo '<h1>' . get_bloginfo('name') . '</h1>';
}
?>
</div>

    <h1><?php bloginfo('name');?></h1>
</header>

<nav id="top-navi">
        <?php wp_nav_menu(['theme_location' => 'primary'])?>
</nav>
