<?php get_header()?>

<section class="single-project">

    <?php if( get_field('project_title') ): ?>
        <h1><?php the_field('project_title') ?></h1>
    <?php endif;?>

    <?php if( get_field('project_img') ): ?>
        <img src="<?php the_field('project_img')?>" alt="">
    <?php endif;?>

    <?php if( get_field('project_focus') ): ?>
        <p><?php the_field('project_focus')?></p>
    <?php endif;?>

    <a href="<?php the_field('project_url')?>">Visit Site</a>

</section>

<?php get_footer()?>