<?php
// Template Name: Single Noivas
get_header();
?>
    <?php if (have_posts()) { while (have_posts()) { the_post(); ?>
      <article class="main single-noivas">
        <h1 class="single-noivas__title"><?php the_title(); ?></h1>
        <div class="single-noivas__wrapper container-center slider">
          <img class="single-noivas__image" src="<?php the_field('imagem_1'); ?>" alt="">
          <img class="single-noivas__image" src="<?php the_field('imagem_2'); ?>" alt="">
          <img class="single-noivas__image" src="<?php the_field('imagem_3'); ?>" alt="">
          <img class="single-noivas__image" src="<?php the_field('imagem_4'); ?>" alt="">
          <img class="single-noivas__image" src="<?php the_field('imagem_5'); ?>" alt="">
        </div>
        <div class="single-noivas__description">
          <?php the_field('caracteristica_vestido'); ?>
        </div>
      </article>
    <?php } } ?>

<?php get_footer(); ?>