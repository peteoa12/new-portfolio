<section class="layout layout-project mt-5">
    <div class="super-hero" style="background:url(<?php the_field('project_img')?>)no-repeat center center; background-size:cover;)"></div>
    <div class="container d-flex flex-column">
      <div class="row mb-5">
          <div class="col text-center">
              <h1><?php the_title()?></h1>
          </div>
      </div>
      <div class="row project-content">
          <div class="col col-md-8 offset-md-2">
              <h3 class="mb-3 ">Technology</h3>
              <p>
                  <?php the_field('project_focus') ?>
              </p>
          </div>
      </div>
      <div class="row project-content">
          <div class="col col-md-8 offset-md-2">
              <h3 class="mb-3 ">Project Overview</h3>
              <p><?php the_field('project_blurb')?></p>
              <h6><?php the_field('contributer_1')?></h6>
              <h6><?php the_field('contributer_2')?></h6>
              <h6><?php the_field('contributer_3')?></h6>
              <p><?php the_field('agency_verbiage')?> <a href="<?php the_field('agency_url')?>" target="_blank"><?php the_field('agency_name')?></a></p>
          </div>
      </div>
      <div class="row">
          <a href="<?php the_field('project_url') ?>" class="btn-default-2" style="display:inline-block;" target="_blank">
            <div class="copy-2">View Project</div>
            <div class="arrow-container-2">
                <div class="arrow-2 main"></div>
                <div class="arrow-2 left arrow-head"></div>
                <div class="arrow-2 right arrow-head"></div>
            </div>
          </a>
      </div>
</section>