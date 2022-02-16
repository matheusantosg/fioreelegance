<?php
// Template Name: Sobre
get_header();
?>
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
    <article class="container-center sobre">
      <div class="sobre__wrapper">
        <div class="sobre__content-text">
          <?php the_field('texto_esquerda'); ?>
        </div>
        <div class="sobre__content-image">
          <img src="<?php the_field('imagem_direita'); ?>" alt="<?php the_field('descricao_imagem_direita'); ?>">
        </div>
      </div>
      <div class="sobre__wrapper">
        <div class="sobre__content-image">
          <img src="<?php the_field('imagem_esquerda'); ?>" alt="<?php the_field('descricao_imagem_esquerda'); ?>">
        </div>
        <div class="sobre__content-text">
          <?php the_field('texto_direita'); ?>
        </div>
      </div>
    </article>
<?php }
} ?>

<?php get_footer(); ?>