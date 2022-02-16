<?php

// Template Name: Contato

get_header();

?>

<?php if (have_posts()) { while (have_posts()) { the_post(); ?>

    <div class="contato">

      <div class="container-center contato__wrapper">

        <div class="contato__maps">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.768942929228!2d-46.54120569997293!3d-23.71994389024968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4191461268e9%3A0x44634900b6553c86!2sR.%20Tiradentes%2C%20910%20-%20Ferraz%C3%B3polis%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009791-301!5e0!3m2!1spt-BR!2sbr!4v1634662871716!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

        <div class="contato__form">

          <h2 class="contato__title-form">Fale conosco</h2>

        <?php echo do_shortcode('[contact-form-7 id="10" title="Formulário de contato 1"]'); ?>

      </div>

      </div>

    </div>

<?php }

} ?>



<?php get_footer(); ?>