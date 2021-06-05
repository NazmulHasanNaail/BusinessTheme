<?php get_header(); ?>

      <div class="jumbotron">
        <div class="container">
          <h1><?php echo get_theme_mod('banner_heading'); ?></h1>
          <p class="lead"><?php echo get_theme_mod('banner_text'); ?></p>
          <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('banner_btn_url'); ?>" role="button"><?php echo get_theme_mod('banner_btn_text'); ?></a></p>
        </div>
      </div>

      <section class="row marketing">
        <div class="container">
          <div class="col-lg-4">
            <div class="block">
              <i class="fa fa-<?php echo get_theme_mod('service1_icon'); ?> fa-3"></i>
              <h3><?php echo get_theme_mod('service1_heading'); ?></h3>
              <p><?php echo get_theme_mod('service1_text'); ?></p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="block">
            <i class="fa fa-<?php echo get_theme_mod('service2_icon'); ?> fa-3"></i>
              <h3><?php echo get_theme_mod('service2_heading'); ?></h3>
              <p><?php echo get_theme_mod('service2_text'); ?></p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="block">
            <i class="fa fa-<?php echo get_theme_mod('service3_icon'); ?>  fa-3"></i>
              <h3><?php echo get_theme_mod('service3_heading'); ?></h3>
              <p><?php echo get_theme_mod('service3_text'); ?></p>
            </div>
          </div>
        </div>
      </section>

            <?php
            if(is_active_sidebar('content_region_1')):
              dynamic_sidebar('content_region_1');
            endif;
             ?>
            <?php
            if(is_active_sidebar('content_region_2')):
              dynamic_sidebar('content_region_2');
            endif;
             ?>
<?php get_footer(); ?>
