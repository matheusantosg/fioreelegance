<?php

// Função para registrar os Scripts e o CSS

function fiore_scripts()

{

  // Desregistra o jQuery do Wordpress

  wp_deregister_script('jquery');



  // Registra o jQuery Novo

  wp_register_script('jquery', get_template_directory_uri() . '/js/libs/jquery.js', [], "3.4.1", true);

  // Rigistra o plugin do slider

  wp_register_script('plugins-script', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', ['jquery'], false, true);



  // Registrar Main

  wp_register_script('main-script', get_template_directory_uri() . '/js/main.js', ['jquery', 'plugins-script'], false, true);



  // Carrega o Script	wp_enqueue_script( 'main-script' );

  wp_enqueue_script('main-script');

}

add_action('wp_enqueue_scripts', 'fiore_scripts');



function fiore_css()

{

  wp_register_style('fiore-style', get_template_directory_uri() . '/style.css', [], false, false);



  wp_register_style('owl-carousel', get_template_directory_uri() . '/js/plugins/owl.carousel.min.css', [], false, false);



  wp_enqueue_style('owl-carousel');

  wp_enqueue_style('fiore-style');

}

add_action('wp_enqueue_scripts', 'fiore_css');



// Funções para Limpar o Header

remove_action('wp_head', 'rsd_link');

remove_action('wp_head', 'wlwmanifest_link');

remove_action('wp_head', 'start_post_rel_link', 10, 0);

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

remove_action('wp_head', 'feed_links_extra', 3);

remove_action('wp_head', 'wp_generator');

remove_action('wp_head', 'print_emoji_detection_script', 7);

remove_action('admin_print_scripts', 'print_emoji_detection_script');

remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_styles', 'print_emoji_styles');



// Habilitar Menus

add_theme_support('menus');



// Registrar Menu

function register_my_menu()

{

  register_nav_menu('menu-principal', __('Menu Principal'));

}

add_action('init', 'register_my_menu');



// BANNER

function wp_banner_slider_principal()

{

  $labels = array(

    'name' => __('Banners'),

    'singular_name' => __('banner'),

    'add_new' => __('Novo banner'),

    'add_new_item' => __('Add New banner'),

    'edit_item' => __('Editar banner'),

    'new_item' => __('Novo banner'),

    'view_item' => __('Ver banner'),

    'search_items' => __('Search banners'),

    'not_found' =>  __('No banners Found'),

    'not_found_in_trash' => __('No banners found in Trash'),

  );

  $args = array(

    'labels' => $labels,

    'has_archive' => true,

    'public' => true,

    'hierarchical' => false,

    'supports' => array(

      'title',

      'editor',

      'excerpt',

      'custom-fields',

      'thumbnail',

      'page-attributes'

    ),

    'taxonomies' => array('post_tag', 'category'),

  );

  register_post_type('banner', $args);

}



add_action('init', 'wp_banner_slider_principal');



// Puxar banners

function wp_banner_principal()

{

  $args = array(

    'post_type' => 'banner',

  );

  $the_query = new WP_Query($args);



  if ($the_query->have_posts()) { ?>

    <div class="principal-slide__item slider">

      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div>

          <img src="<?php the_field('imagem_desktop'); ?>" alt="<?php the_field('descricao_imagem'); ?>">

        </div>

      <?php endwhile; ?>

    </div>

  <?php }



  wp_reset_postdata();

}



// BANNER

function wp_banners_menores_middle()

{

  $labels = array(

    'name' => __('Mini-Banners'),

    'singular_name' => __('mini-banners'),

    'add_new' => __('Novo banner'),

    'add_new_item' => __('Add New banner'),

    'edit_item' => __('Editar banner'),

    'new_item' => __('Novo banner'),

    'view_item' => __('Ver banner'),

    'search_items' => __('Search banners'),

    'not_found' =>  __('No banners Found'),

    'not_found_in_trash' => __('No banners found in Trash'),

  );

  $args = array(

    'labels' => $labels,

    'has_archive' => true,

    'public' => true,

    'hierarchical' => false,

    'supports' => array(

      'title',

      'editor',

      'excerpt',

      'custom-fields',

      'thumbnail',

      'page-attributes'

    ),

    'taxonomies' => array('post_tag', 'category'),

  );

  register_post_type('mini-banners', $args);

}



add_action('init', 'wp_banners_menores_middle');



// Puxar banners

function wp_wp_banners_menores()

{

  $args = array(

    'order' => 'ASC',

    'post_type' => 'mini-banners',

  );

  $the_query = new WP_Query($args);



  if ($the_query->have_posts()) { ?>

    <div class="banners-middle__wrapper">

      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="banners-middle__item">

          <div class="banners-middle__image">

            <img src="<?php the_field('banner_middle'); ?>" alt="<?php the_field('descricao_imagem'); ?>">

          </div>

          <h2 class="banners-middle__title"><?php the_field('titulo_banner'); ?></h2>

          <p class="banners-middle__subtitle"><?php the_field('descricao_banner'); ?></p>

          <a href="<?php the_field('link_colecao'); ?>">veja a coleção</a>

        </div>

      <?php endwhile; ?>

    </div>

<?php }



  wp_reset_postdata();

}
add_filter( 'wpcf7_validate_configuration', '__return_false' );

?>