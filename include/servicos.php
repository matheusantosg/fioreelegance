<?php $servicos = get_page_by_title('Serviços'); ?>

<div class="grid">
    <div class="image">
        <img src="<?php the_field('imagem_servico_1', $servicos); ?>" alt="">
    </div>

    <h3 class="title__services"><?php the_field('titulo_servico_1', $servicos); ?></h3>
    
    <?php if (is_page('Serviços')) { ?>
    <div class="text">
        <?php the_field('texto_servico_1');?>
    </div>
    <?php } ?>
</div>

<div class="grid">
    <div class="image">
        <img src="<?php the_field('imagem_servico_2', $servicos); ?>" alt="">
    </div>

    <h3 class="title__services"><?php the_field('titulo_servico_2', $servicos); ?></h3>
    
     <?php if (is_page('Serviços')) { ?>
    <div class="text">
        <?php the_field('texto_servico_2');?>
    </div>
    <?php } ?>
</div>

<div class="grid">
    <div class="image">
        <img src="<?php the_field('imagem_servico_3', $servicos); ?>" alt="">
    </div>

    <h3 class="title__services"><?php the_field('titulo_servico_3', $servicos); ?></h3>
    
    <?php if (is_page('Serviços')) { ?>
    <div class="text">
        <?php the_field('texto_servico_3');?>
    </div>
    <?php } ?>
</div>

<div class="grid">
    <div class="image">
        <img src="<?php the_field('imagem_servico_4', $servicos); ?>" alt="">
    </div>

    <h3 class="title__services"><?php the_field('titulo_servico_4', $servicos); ?></h3>
    
    <?php if (is_page('Serviços')) { ?>
    <div class="text">
        <?php the_field('texto_servico_4');?>
    </div>
    <?php } ?>
</div>

<div class="grid">
    <div class="image">
        <img src="<?php the_field('imagem_servico_5', $servicos); ?>" alt="">
    </div>

    <h3 class="title__services"><?php the_field('titulo_servico_5', $servicos); ?></h3>
    
    <?php if (is_page('Serviços')) { ?>
    <div class="text">
        <?php the_field('texto_servico_5');?>
    </div>
    <?php } ?>
</div>

<div class="grid">
    <div class="image">
        <img src="<?php the_field('imagem_servico_6', $servicos); ?>" alt="">
    </div>

    <h3 class="title__services"><?php the_field('titulo_servico_6', $servicos); ?></h3>
    
    <?php if (is_page('Serviços')) { ?>
    <div class="text">
        <?php the_field('texto_servico_6');?>
    </div>
    <?php } ?>
</div>