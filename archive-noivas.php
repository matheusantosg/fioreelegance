<?php get_header(); ?>

<div class="main">

  <section class="page-noivas">

    <h1 class="page-noivas__title">Vestidos de Noiva</h1>

      <div class="page-noivas__description"><?php the_content(); ?></div>

      <div class="container-center page-noivas__wrapper">

        <div class="page-noivas__shelve-template">

          <?php if (have_posts()) { while (have_posts()) { the_post(); ?>

            <div class="page-noivas__item">

              <a class="page-noivas__link" href="<?php the_permalink(); ?>">

                <img src="<?php the_field('imagem_1'); ?>" alt="<?php the_field('descricao_vestido'); ?>">

              </a>

              <span class="page-noivas__name-product"><?php the_field('nome_vestido'); ?></span>
              
            </div>

          <?php }

          } ?>

        </div>

      </div>

  </section>

</div>

<?php get_footer(); ?>