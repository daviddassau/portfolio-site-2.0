<?php
/**
* @var $ucmm_wpbrigade_array get_option
* @since 1.0.0
*/
$ucmm_wpbrigade_array = (array) get_option( 'ucmm_wpbrigade_customization' );

function ucmm_wpbrigade_option_key( $ucmm_key, $ucmm_wpbrigade_array ) {

	if ( array_key_exists( $ucmm_key, $ucmm_wpbrigade_array ) ) {

		return $ucmm_wpbrigade_array[ $ucmm_key ];

	}
	// else {
	//   return false;
	// }
}
/**
* ucmm_wpbrigade_default_option_key
* @since 1.0.2
*/
function ucmm_wpbrigade_default_option_key( $ucmm_key, $ucmm_wpbrigade_array ) {

	if ( array_key_exists( $ucmm_key, $ucmm_wpbrigade_array ) ) {

		return $ucmm_wpbrigade_array[ $ucmm_key ];

	}
	else {
		return true;
	}
}

$ucmm_bg     			= ucmm_wpbrigade_option_key( 'setting_background', $ucmm_wpbrigade_array);
$ucmm_logo   			= ucmm_wpbrigade_option_key( 'ucmm_logo', $ucmm_wpbrigade_array);
$ucmm_header 			= ucmm_wpbrigade_option_key( 'header_text', $ucmm_wpbrigade_array);
$ucmm_footer 			= ucmm_wpbrigade_option_key( 'footer_text', $ucmm_wpbrigade_array);
$ucmm_logo_width 	= ucmm_wpbrigade_option_key( 'ucmm_logo_width', $ucmm_wpbrigade_array);
$ucmm_logo_height = ucmm_wpbrigade_option_key( 'ucmm_logo_height', $ucmm_wpbrigade_array);
$ucmm_seo_title 	= ucmm_wpbrigade_option_key( 'ucmm_seo_title', $ucmm_wpbrigade_array);
$ucmm_seo_description = ucmm_wpbrigade_option_key( 'ucmm_seo_description', $ucmm_wpbrigade_array);
$ucmm_seo_url 	= ucmm_wpbrigade_option_key( 'ucmm_seo_url', $ucmm_wpbrigade_array);
$ucmm_seo_sitename = ucmm_wpbrigade_option_key( 'ucmm_seo_sitename', $ucmm_wpbrigade_array);
$ucmm_seo_admin = ucmm_wpbrigade_option_key( 'ucmm_seo_admin', $ucmm_wpbrigade_array);
$ucmm_seo_keywords = ucmm_wpbrigade_option_key( 'ucmm_seo_keywords', $ucmm_wpbrigade_array);
$ucmm_custom_css  = ucmm_wpbrigade_option_key( 'ucmm_custom_css', $ucmm_wpbrigade_array );
$ucmm_ga_tracking_code  = ucmm_wpbrigade_option_key( 'ucmm_ga_tracking_code', $ucmm_wpbrigade_array );
$ucmm_footer_love = ucmm_wpbrigade_default_option_key( 'ucmm_display_footer_text', $ucmm_wpbrigade_array);

if ( $ucmm_logo ) {
	$_ucmm_logo = '<img src="'.$ucmm_logo.'" alt="">';
}
else {
	$_ucmm_logo = '';//get_bloginfo('name');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- <link rel="icon" href="<?php //echo site_icon_url();?>" sizes="32x32" /> -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="title" content="<?php echo $ucmm_seo_title;?>" />
	<meta name="description" content="<?php echo $ucmm_seo_description;?>" />
	<meta name="url" content="<?php echo $ucmm_seo_url;?>" />
	<meta name="site_name" content="<?php echo $ucmm_seo_sitename;?>" />
	<meta name="author" content="<?php echo $ucmm_seo_admin;?>">
	<meta name="keywords" content="<?php echo $ucmm_seo_keywords;?>">
	<title><?php echo get_bloginfo('name'); ?></title>
	<style media="screen">
	html{
		height: 100%;
	}
	body{
		display: table;
		min-height: 100%;
		margin: 0;
		text-align: center;
		width: 100%;
		background: url(<?php echo null != $ucmm_bg ? $ucmm_bg : plugins_url( 'img/coming-soon.png', __FILE__ ); ?>);
		background-size: cover;
		<?php if ( '' == $ucmm_logo ): ?>
		background-position: center;
		<?php endif; ?>
	}
	h1{
		font-size: 60px;
		color: #fff;
		text-transform: uppercase;
		margin: 0;
	}
	.ucmm-logo{
		<?php if ( '' == $ucmm_logo ): ?>
		padding-top: 70px;
		<?php else : ?>
		padding-top: 20px;
		<?php endif; ?>
		vertical-align: middle;
		text-align: center;
		width: 100%;
		font-size: 50px;
		font-weight: bold;
		color: #fff;
	}
	.ucmm-logo img{
		width: <?php echo $ucmm_logo_width; ?>;
		height: <?php echo $ucmm_logo_height; ?>;
	}
	h2{
		font-size: 20px;
		color: #fff;
		margin: 0;
		font-family: inherit;
	}
	.footer-love {
		position: absolute;
		color: #fff;
		right: 0;
		bottom: 0;
		padding-right: 20px;
		padding-bottom: 5px;
	}
	.footer-love a{
		text-decoration: none;
		color: #fff;
	}
	.footer-love a:hover{
		color: #3BB9FF;
	}

	<?php if ( ! empty( $ucmm_custom_css ) ) : ?>
	<?php echo $ucmm_custom_css; ?>
	<?php endif; ?>
	</style>
<?php if ( ! empty( $ucmm_ga_tracking_code ) ) : ?>
<?php echo $ucmm_ga_tracking_code; ?>
<?php endif; ?>
</head>
<body>
	<div class="ucmm-logo">
		<?php echo $_ucmm_logo;?>
		<h1><?php if ( $ucmm_header ) {
			echo $ucmm_header;
		} else {
			echo __("UNDER CONSTRUCTION", 'ucmm-wpbrigade');
		} ?></h1>
		<h2> <?php if ( $ucmm_footer ) {
			echo $ucmm_footer;
		} else {
			echo __( 'We are working hard to bring you new experience', 'ucmm-wpbrigade' );
		} ?> </h2>

	</div>
	<?php if ( $ucmm_footer_love ) : ?>
		<div class="footer-love">
			<?php _e( 'Powered by:', 'ucmm-wpbrigade' ); ?> <a href="https://wordpress.org/plugins/under-construction-maintenance-mode/" target="_blank">WPBrigade</a>
		</div>
	<?php endif; ?>

</body>
</html>
