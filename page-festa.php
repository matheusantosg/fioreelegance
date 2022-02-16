<?php
// Template Name: Festas
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <div class="main">
            <section class="section__banner">
                <div class="content__banner home">
                    <div class="image__desk">
                        <img src="<?php the_field('banner_desktop'); ?>" alt="<?php the_title(); ?>">
                    </div>

                    <div class="image__mobile">
                        <img src="<?php the_field('banner_mobile'); ?>" alt="<?php the_title(); ?>">
                    </div>

                    <div class="bg__content">
                        <h1 class="title__bg"><?php the_field('titulo'); ?></h1>
                        <h3 class="description__banner"><?php the_field('texto_descricao_banner'); ?></h3>

                        <a href="" class="btn btn__outline__white"> Saiba mais</a>
                    </div>
                </div>
            </section>

            <section class="section__servicos home">
                <div class="shell">
                    <h2 class="title__blue"><?php the_field('titulo_servicos'); ?></h2>
                    
                    <div class="content__servicos home">
                        <?php include(TEMPLATEPATH . '/include/servicos.php'); ?>

                        <div class="row__button">
                            <a href="/servicos" class="btn btn__primary">
                                Saiba mais
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php } } ?>

<?php get_footer(); ?>