<?php

/**
 * Select array of strings to be used in labels and defalut text.
 *
 * @param  string $index Index string
 * @param  string $sub   Sub strings
 * @since 0.0.2
 * @version 1.0.0
 * @return array Returns array of selected strings
 */
function onepage_parallax_default_strings ( $index = '', $sub = '' ) {

  $default_array = array(
    'footer' => array(
      'socialmedia_class' => array(
        'facebook fa fa-facebook',
        'twitter fa fa-twitter',
        'gplus fa fa-google-plus',
        'rss fa fa-rss',
        'pintrest fa fa-pinterest',
        'vimeo fa fa-vimeo-square' ),
        'socialmedia_link' => array(
        'https://www.facebook.com/#',
        'https://www.twitter.com/#',
        'https://www.gmail.com/#',
        'https://www.rss.com/#',
        'https://www.pinterest.com/#',
        'https://www.vimeo.com/#' ),
      'string' => array(
        sprintf( esc_html__( '&copy; %1$s %2$s', 'onepage-parallax' ), date_i18n( __( 'Y', 'onepage-parallax' ) ), get_bloginfo( 'name' ) ) ),
      'string_left' => array(
        sprintf( __( 'Powerd by %1$s | Made with &#10084; by %2$s', 'onepage-parallax' ), '<a href="'. esc_url(  'https://wordpress.org/' ) .'">WordPress</a>', '<a href="'. esc_url( "https://wpbrigade.com/?utm_source=footer-link&utm_campaign=onepage-parallax&utm_medium=free-theme" ) .'">WPBrigade</a>' ) )
    ),
    'customizer' => array(
      'sec_footer_label' => array(
        esc_html__( 'Facebook Link :', 'onepage-parallax' ),
        esc_html__( 'Twitter Link :', 'onepage-parallax' ),
        esc_html__( 'Gmail Link :', 'onepage-parallax' ),
        esc_html__( 'RSS Link :', 'onepage-parallax' ),
        esc_html__( 'Pinterest Link :', 'onepage-parallax' ),
        esc_html__( 'Vimeo Link :', 'onepage-parallax' ) ),
      'sec_footer_link' => array(
        esc_url( 'https://www.facebook.com/#' ),
        esc_url( 'https://www.twitter.com/#' ),
        esc_url( 'https://www.gmail.com/#' ),
        esc_url( 'https://www.rss.com/#' ),
        esc_url( 'https://www.pinterest.com/#' ),
        esc_url( 'https://www.vimeo.com/#' ) ),
      'sec_blog_post_label' => array(
        esc_html__( 'Enable Author Short Bio under post', 'onepage-parallax' ),
        esc_html__( 'Enable Publish date of the post', 'onepage-parallax' ),
        esc_html__( 'Enable Modifying date of the post', 'onepage-parallax' ),
        esc_html__( 'Enable Categories of the post', 'onepage-parallax' ),
        esc_html__( 'Enable Comment Counter of the post', 'onepage-parallax' ),
        esc_html__( 'Enable Read More Button of the post', 'onepage-parallax' ) ),
      'sec_blog_post_control' => array(
        'BPAuthor',
        'BPPDate',
        'BPMDate',
        'BPCategoies',
        'BPCCount',
        'BPRMore' ),
      'sec_single_post_label' => array(
        esc_html__( 'Enable Publish date of the post', 'onepage-parallax' ),
        esc_html__( 'Enable Modifying date of the post', 'onepage-parallax' ),
        esc_html__( 'Enable Categories of the post', 'onepage-parallax' ),
        esc_html__( 'Enable Author Section under post', 'onepage-parallax' ),
        esc_html__( 'Enable Tags of the post', 'onepage-parallax' ),
        esc_html__( 'Enable Next Previous Post Button on the post', 'onepage-parallax' ) ),
      'sec_single_post_control' => array(
        'SPPDate',
        'SPMDate',
        'SPCategoies',
        'SPAuthor',
        'SPTags',
        'SPNPLink' ),
      'sec_subscriber_label' => array(
        esc_html__( 'Heading Keyword', 'onepage-parallax' ),
        esc_html__( 'Bold Note', 'onepage-parallax' ),
        esc_html__( 'Short Note', 'onepage-parallax' ),
        esc_html__( 'Name', 'onepage-parallax' ),
        esc_html__( 'Email', 'onepage-parallax' ),
        esc_html__( 'Subscribe', 'onepage-parallax' ) ),
      'sec_blog_label' => array(
    		esc_html__( 'Title', 'onepage-parallax' ),
    		esc_html__( 'Subtitle', 'onepage-parallax' ),
    		esc_html__( 'Number of post to Show', 'onepage-parallax' ),
    		esc_html__( 'Character length to show under a post', 'onepage-parallax' ) ),
      'sec_blog_default' => array(
        'Blog',
        'Our random ramblings',
        '4',
        '300' ),
      'sec_touch_label' => array(
        esc_html__( 'Heading Keyword', 'onepage-parallax' ),
        esc_html__( 'Short Note', 'onepage-parallax' ),
        esc_html__( 'Call us Text', 'onepage-parallax' ),
        esc_html__( 'Number', 'onepage-parallax' ),
        esc_html__( 'Button Text', 'onepage-parallax' ),
        esc_html__( 'Call Us', 'onepage-parallax' ) ),
      'sec_blog_desc' => array(
        '', '',
        esc_html__( 'Provide number in digits only', 'onepage-parallax' ),
        esc_html__( 'Provide length in digits only', 'onepage-parallax' ) ),
    ),
    'repeater' => array(
      'button_promo_text' => array(
    		esc_html__( 'Buy pro version to add more.', 'onepage-parallax' ),
    		esc_html__( 'Buy pro version to add more about us section.', 'onepage-parallax' ),
    		esc_html__( 'Buy pro version to add more success section.', 'onepage-parallax' ),
    		esc_html__( 'Buy pro version to add more services section.', 'onepage-parallax' ),
    		esc_html__( 'Buy pro version to add more team members.', 'onepage-parallax' ),
    		esc_html__( 'Buy pro version to add more offering section.', 'onepage-parallax' ) ),
      'button_text' => array(
        esc_html__( 'Add New Item', 'onepage-parallax' ),
        esc_html__( 'Add New Item', 'onepage-parallax' ),
        esc_html__( 'Add New Item', 'onepage-parallax' ),
        esc_html__( 'Add New Item', 'onepage-parallax' ),
        esc_html__( 'Add New Team Member', 'onepage-parallax' ),
        esc_html__( 'Add New Offer', 'onepage-parallax' ) ),
      'button_class' => array(
        'default',
        'button_about',
        'button_success',
        'button_service',
        'button_member',
        'button_offer' ),
      'label_title' => array(
    		esc_html__( 'Title', 'onepage-parallax' ),
    		esc_html__( 'Title', 'onepage-parallax' ),
    		esc_html__( 'Number of Success', 'onepage-parallax' ), //
    		esc_html__( 'Title', 'onepage-parallax' ),
    		esc_html__( 'Name', 'onepage-parallax' ),
    		esc_html__( 'Title', 'onepage-parallax' ) ),
      'label_subtitle' => array(
    		esc_html__( 'Subtitle', 'onepage-parallax' ),
    		esc_html__( 'Subtitle', 'onepage-parallax' ),
    		esc_html__( 'Subtitle', 'onepage-parallax' ),
    		esc_html__( 'Subtitle', 'onepage-parallax' ),
    		esc_html__( 'Designation', 'onepage-parallax' ),
    		esc_html__( 'Price', 'onepage-parallax' ) ),
      'label_textfield' => array(
    		esc_html__( 'Text', 'onepage-parallax' ),
    		esc_html__( 'Description', 'onepage-parallax' ),
    		esc_html__( 'Subtitle', 'onepage-parallax' ), //Heading
    		esc_html__( 'Description', 'onepage-parallax' ),
    		esc_html__( 'Description', 'onepage-parallax' ),
    		esc_html__( 'Discription', 'onepage-parallax' ) ),
      'label_link' => array(
    		esc_html__( 'Link', 'onepage-parallax' ),
    		esc_html__( 'Link', 'onepage-parallax' ),
    		esc_html__( 'Link', 'onepage-parallax' ),
    		esc_html__( 'Link', 'onepage-parallax' ),
    		esc_html__( 'Link', 'onepage-parallax' ),
    		esc_html__( 'Link', 'onepage-parallax' ) ),
      'label_shortcode' => array(
    		esc_html__( 'Shortcode', 'onepage-parallax' ),
    		esc_html__( 'Shortcode', 'onepage-parallax' ),
    		esc_html__( 'Shortcode', 'onepage-parallax' ),
    		esc_html__( 'Shortcode', 'onepage-parallax' ),
    		esc_html__( 'Shortcode', 'onepage-parallax' ),
    		esc_html__( 'Shortcode', 'onepage-parallax' ) )
    ),
    'home_temp' =>array(
      'section' => array(
        'about',
        'success',
        'service',
        'touch',
        'team',
        'portfolio',
        'subscribe',
        'pricing',
        'blog' ),
      'get_in_touch' => array(
        esc_html__( 'Get in touch', 'onepage-parallax' ),
        esc_html__( 'now', 'onepage-parallax' ),
        esc_html__( 'Call us', 'onepage-parallax' ),
        esc_html__( '0044 0569 852 369', 'onepage-parallax' ),
        esc_html__( 'send us a message', 'onepage-parallax' ) ),
      'subscribe' => array(
        esc_html__( 'Get our free', 'onepage-parallax' ),
        esc_html__( 'updates', 'onepage-parallax' ),
        esc_html__( 'Subscribe to our newsletter to receive cool stuff from us:', 'onepage-parallax' ),
        esc_html__( 'Name', 'onepage-parallax' ),
        esc_html__( 'Email', 'onepage-parallax' ),
        esc_html__( 'subscribe', 'onepage-parallax' ) ),
      'service_class' => array(
        'network fa fa-object-ungroup',
        'design fa fa-wordpress',
        'photos fa fa-object-group',
        'pictures fa fa-film',
        'custom_design fa fa-pencil-square-o',
        'browser fa fa-window-maximize' ),
      'service_trans' => array(
        'slide-left',
        'helix',
        'slide-right',
        'slide-left',
        'helix',
        'slide-right' ),
      'success_class' => array(
        'iconBox design fa-mobile fa',
        'iconBox hours fa fa-clock-o',
        'iconBox webs fa fa-television',
        'iconBox clients fa fa-smile-o' ),
      'success_image' => array(
        ONEPAGE_PARALLAX_DIR_URI . '/assets/images/phone.svg',
        ONEPAGE_PARALLAX_DIR_URI . '/assets/images/stopwatch.svg',
        ONEPAGE_PARALLAX_DIR_URI . '/assets/images/mac.svg',
        ONEPAGE_PARALLAX_DIR_URI . '/assets/images/user.svg' ),
      // 'success_class_data' => array(
      //   'design',
      //   'hours',
      //   'webs',
      //   'clients' ),
      // 'success_speed' => array(
      //   '1000',
      //   '2000',
      //   '1500',
      //   '1000' ),
      // 'success_trans' => array(
      //   'slide-left',
      //   'slide-bottom',
      //   'slide-bottom',
      //   'slide-right' ),
      // 'success_tr_class' => array(
      //   'g-medium--half g-wide--1',
      //   'g-medium--half g-medium--last  g-wide--1',
      //   'g-medium--half g-medium-last g-wide--1',
      //   'g-medium--half g-wide--1 g--last' ),
      'about_class' => array(
    	  'innerSec award',
    	  'innerSec friendly',
    	  'innerSec time',
    	  'innerSec cost' ),
      'about_class_data' => array(
    	  'award',
    	  'friendly',
    	  'time',
    	  'cost' ),
      // 'about_trans' => array(
    	//   'slide-left',
    	//   'slide-bottom',
    	//   'slide-bottom',
    	//   'slide-right' ),
      // 'about_tr_class_4' => array(
      //   'col-sm-6 col-lg-3',
      //   'col-sm-6 col-lg-3',
      //   'col-sm-6 col-lg-3',
      //   'col-sm-6 col-lg-3' ),
      // 'about_tr_class_3' => array(
      //   'g--third',
      //   'g--third',
      //   'g--third g--last',
      //   'g--third' ),
      // 'about_tr_class_2' => array(
      //   'g-medium--half g-wide--2',
      //   'g-medium--half g-medium--last  g-wide--2 g-wide--last',
      //   'g-medium--half g-wide--2',
      //   'g-medium--half g-medium--last g-wide--2 g-wide--last' )
      )
  );
  return $default_array["$index"]["$sub"];
}

?>
