<?php

/**
 * Page Template loader for this plugin
 *
 * @link       https://www.agora.io
 * @since      1.1.0
 *
 * @package    WP_Agora
 * @subpackage WP_Agora/public
 */
class WP_Agora_PageTemplate {

  // array of templates to track.
  protected $templates;

  protected $agora;

  public function __construct($agora) {
    $this->agora = $agora;
    $this->templates = array();

    // Add a filter to the attributes metabox
    add_filter( 'theme_page_templates', array( $this, 'add_new_template' ) );

    // Add a filter to the save post to inject out template into the page cache
    add_filter( 'wp_insert_post_data', array( $this, 'register_project_templates' ) );

    // Add a filter to the template include to determine if the page has our 
    // template assigned and return it's path
    add_filter( 'template_include', array( $this, 'view_project_template') );

    // Add your templates to this array.
    $this->templates = array( 'agora-fullscreen-template.php' => 'Agora.io FullScreen');
  }

  public function add_new_template( $posts_templates ) {
    $posts_templates = array_merge( $posts_templates, $this->templates );
    return $posts_templates;
  }


  public function register_project_templates( $atts ) {
    // Create the key used for the themes cache
    $cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

    // Retrieve the cache list. 
    // If it doesn't exist, or it's empty prepare an array
    $templates = wp_get_theme()->get_page_templates();
    if ( empty( $templates ) ) {
      $templates = array();
    } 

    // New cache, therefore remove the old one
    wp_cache_delete( $cache_key , 'themes');

    // Now add our template to the list of templates by merging our templates
    // with the existing templates array from the cache.
    $templates = array_merge( $templates, $this->templates );

    // Add the modified cache to allow WordPress to pick it up for listing
    // available templates
    wp_cache_add( $cache_key, $templates, 'themes', 1800 );

    return $atts;
  }


  public function view_project_template( $template ) {
    // Get global post
    global $post;

    // Return template if post is empty
    if ( !$post ) {
      return $template;
    }
    
    $matches = [];
    $found = preg_match('/channel_id="(.*?)"/m', $post->post_content, $matches);

    if ($found) {
      global $instance;
      global $channel;
      global $agora;

      $channel_id = $matches[1];
      $instance = $this->agora->getShortcodeAttrs('agora-communication', []);
      $channel = WP_Agora_Channel::get_instance($channel_id);
      $agora = $this->agora;

      wp_enqueue_script( 'AgoraSDK', 'https://cdn.agora.io/sdk/web/AgoraRTCSDK-2.8.0.js', array('jquery'), null );

      $slickURL = plugin_dir_url( __FILE__ ) . 'js/slick-1.8.1/';
      wp_enqueue_script( 'jquery.slick', $slickURL . 'slick.min.js', array('jquery'), null );
      wp_enqueue_style( 'jquery.slick.css', $slickURL . 'slick.css', null, null );
      wp_enqueue_style( 'jquery.slick.theme', $slickURL . 'slick-theme.css', null, null );


      // Return default template if we don't have a custom one defined
      $template_in_use = get_post_meta( $post->ID, '_wp_page_template', true );
      if ( !isset( $this->templates[$template_in_use] ) ) {
        return $template;
      } 

      $file = plugin_dir_path(__FILE__) . 'views/' . get_post_meta($post->ID, '_wp_page_template', true);

      // Just to be safe, we check if the file exist first
      if ( file_exists( $file ) ) {
        return $file;
      }
    }

    // Return template
    return $template;
  }
}