<?php
// Template Name: Home
get_header();
?>
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
    <article class="principal-slide">
      <figure class="principal-slide__wrapper">
      <?php if ( is_front_page() ) { wp_banner_principal(); }?>
      </figure>
    </article>

    <article class="container-center banners-middle">
      <?php if ( is_front_page() ) { wp_wp_banners_menores(); }?>
    </article>
<?php } } ?>
<?php get_footer(); ?>