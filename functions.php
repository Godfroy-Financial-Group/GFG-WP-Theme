<?php 
require_once get_template_directory() . '/libs/wp-bootstrap4-navwalker/wp-bootstrap-navwalker.php';

// Setup Menus
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Main Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

// Next/Previous Posts
function show_prev_posts_nav() {
  global $paged;
  return $paged > 0;
}
function show_next_posts_nav() {
  global $wp_query;
  global $paged;
  $maxPages = $wp_query->max_num_pages;
  if ($paged == $maxPages) return false;
	return $maxPages > 1;
}

// Prevent the AdminBar from Breaking the header Styles
function prefix_move_theme_down() {
  if ( is_admin_bar_showing() ) {
    ?>
    <style type="text/css">
    .site-header { top: 28px; }
    </style>
    <?php
  }
}
add_action( 'wp_head', 'prefix_move_theme_down' );

// Custom settings
function custom_theme_settings_add_menu() {
    add_menu_page( 'Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', 'custom_theme_settings_page', null, 99 );
  }
  add_action( 'admin_menu', 'custom_theme_settings_add_menu' );

// Create Custom Global Settings
function custom_theme_settings_page() { ?>
<div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
        <?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>
    </form>
</div>
<?php }

// Enable Testimonials
function setting_enableTestimonials() { ?>
  <input type="checkbox" name="enableTestimonials" id="enableTestimonials" value="<?php echo get_option('enableTestimonials'); ?>" size="75" />
  <?php }
// Enable Comments
function setting_enableComments() { ?>
  <input type="checkbox" name="enableComments" id="enableComments" value="<?php echo get_option('enableComments'); ?>" size="75" />
  <?php }
// Twitter
function setting_twitter() { ?>
<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" size="75" />
<?php }
// Facebook
function setting_facebook() { ?>
<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" size="75" />
<?php }

function custom_theme_settings_page_setup() {
    add_settings_section('section', 'All Settings', null, 'theme-options');
    add_settings_field('enableTestimonials', 'Enable Testimonials', 'setting_enableTestimonials', 'theme-options', 'section');
    add_settings_field('enableComments', 'Enable Comments', 'setting_enableComments', 'theme-options', 'section');
    add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
    add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
    
    register_setting('section', 'enableTestimonial');
    register_setting('section', 'enableComments');
    register_setting('section', 'twitter');
    register_setting('section', 'facebook');
  }
  add_action( 'admin_init', 'custom_theme_settings_page_setup' );

?>