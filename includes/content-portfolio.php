<section class="layout layout-portfolio">
    <div class="container">
        <div class="row portfolio-grid d-flex justify-content-between">
             <?php 
                $args = array(
                    "post_type" => "portfolio",
                    "category_name" => get_field('portfolio_display_category'),
                    "posts_per_page" => -1,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                
                <!-- <a href="<?php the_permalink() ?>"><?php the_title() ?></a> -->

                <a href="<?php the_permalink() ?>" class="single-project" data-tilt >
                <div class="col-xs-12 inner" style="background:url(<?php the_field('project_img')?>) no-repeat center center; background-size: 110px;">
                    <div class="img-overlay"></div>
                    <div class="text-container">
                        <h4 class="text-white"><?php the_field('project_title') ?></h4>
                        <span class="text-white project-subtitle"><?php the_field('project_focus') ?></span>
                    </div>
                    </div> 
                </a>
                    
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>