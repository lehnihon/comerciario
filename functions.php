<?php
/**
 * Jorgewp functions and definitions
 *
 * @package site
 */

if ( ! function_exists( 'site_setup' ) ) :

function site_setup() {

  add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

  register_sidebar( array(
    'name'          => __( 'Barra Lateral Principal', 'sinpsi' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<div class="row-margin">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
	add_image_size('home-thumb',620,300,true);
  add_image_size('single-post',1140,450,true);
}
endif; // site_setup
add_action( 'after_setup_theme', 'site_setup' );

function register_post_type_video(){
  $singular = 'Video';
  $plural = 'Videos';
  $labels = array(
      'name' => $plural,
      'singular_name' => $singular,
      'add_new_item' => 'Adicionar novo '.$singular,
      );
  $args = array(
      'labels' => $labels,
      'public' => true,
          'supports' => array('title'),
          'menu_position' => 5
      );

  register_post_type('video',$args);
}
add_action( 'init','register_post_type_video');

function register_taxonomy_categoria(){
  $labels = array(
      'name'              => _x( 'Categoria', 'taxonomy general name' ),
      'singular_name'     => _x( 'Categoria', 'taxonomy singular name' ),
      'search_items'      => __( 'Procurar Categoria' ),
      'all_items'         => __( 'Todas Categorias' ),
      'parent_item'       => __( 'Categoria Pai' ),
      'parent_item_colon' => __( 'Categoria Pai:' ),
      'edit_item'         => __( 'Editar Categoria' ),
      'update_item'       => __( 'Atualizar Categoria' ),
      'add_new_item'      => __( 'Adicionar Categoria' ),
      'new_item_name'     => __( 'Nome Nova Categoria' ),
      'menu_name'         => __( 'Categoria' ),
  );

  $args = array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite' => array( 'slug' => 'categoria' )
  );
register_taxonomy( 'categoria', 'video', $args );
}
add_action('init','register_taxonomy_categoria');

function wporg_add_custom_box()
{
    add_meta_box(
        'wporg_box_id',           // Unique ID
        'Extras',  // Box title
        'wporg_custom_box_html',  // Content callback, must be of type callable
        'video'                   // Post type
    );
}
add_action('add_meta_boxes', 'wporg_add_custom_box');

function wporg_custom_box_html($post)
{
	$link = get_post_meta($post->ID, 'link', true);
    ?>
	    <p>
	    	<label>Url Vídeo: </label>
		    <input style="width: 100%" type="text" name="link" value="<?php echo  esc_html($link) ?>">
	    </p>
    <?php
}
function wporg_save_postdata($post_id)
{
	if (array_key_exists('link', $_POST)) {
        update_post_meta(
            $post_id,
            'link',
            sanitize_text_field($_POST['link'])
        );
    }
}
add_action('save_post', 'wporg_save_postdata');

function max_title_length( $title ) { 
  $max = 60;
  if( strlen( $title ) > $max ) {
    return substr( $title, 0, $max ). " &hellip;";
  } else {
    return $title;
  }
}
add_filter( 'the_title', 'max_title_length');

/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
  wp_enqueue_style( 'site-style-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
  wp_enqueue_style( 'site-style-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
  wp_enqueue_style( 'site-style', get_stylesheet_uri() );

	wp_enqueue_script( 'site-script-jquery', get_template_directory_uri() ."/assets/js/jquery-3.3.1.min.js");
	wp_enqueue_script( 'site-script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array(),false,true);
  wp_enqueue_script( 'site-script-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array(),false,true);
	wp_enqueue_script( 'site-script', get_template_directory_uri() . '/assets/js/script.js',array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );


require get_template_directory() . '/inc/util.php';