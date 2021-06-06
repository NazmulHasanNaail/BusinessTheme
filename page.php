<?php get_header(); ?>
<?php if(have_posts()): ?>
           <?php while(have_posts()): the_post(); ?>

      <section class="row title-bar">
        <div class="container">
          <div class="col-md-12">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </section>

      <section class="row main">
        <div class="container">
        <?php if(is_active_sidebar('sidebar')): ?>
          <div class="col-md-8">
        <?php else: ?>
          <div class="col-md-12">
        <?php endif; ?>
   
           <article class="page">

            <div class="post-thumbnail">
            <?php 
            if(has_post_thumbnail()):
              the_post_thumbnail();
            endif;
            ?>
            </div>


                <?php the_content(); ?>

            </article><br>
            <div class="clr"></div>
           <?php endwhile; ?>

           <?php endif; ?>
        </div>

        <!--sidebar-->
        <?php if(is_active_sidebar('sidebar')): ?>
          <div class="col-md-4">
          <?php dynamic_sidebar('sidebar'); ?>
          </div>
          <?php endif; ?>
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
