<?php 
require_once get_template_directory() . '/libs/wp-bootstrap4-navwalker/wp-bootstrap-navwalker.php';

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

// Twitter
function setting_twitter() { ?>
<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" size="50" />
<?php }
// Facebook
function setting_facebook() { ?>
<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" size="50" />
<?php }

function custom_theme_settings_page_setup() {
    add_settings_section('section', 'All Settings', null, 'theme-options');
    add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
    add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
    
    register_setting('section', 'twitter');
    register_setting('section', 'facebook');
  }
  add_action( 'admin_init', 'custom_theme_settings_page_setup' );

?>