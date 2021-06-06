<?php get_header(); ?>

      <section class="row title-bar">
        <div class="container">
          <div class="col-md-12">
            <h1><?php echo __('Blog'); ?></h1>
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
           <?php if(have_posts()): ?>
           <?php while(have_posts()): the_post(); ?>
           <article class="post">
            <div class="col-md-5">
            <div class="post-thumbnail">
            <?php 
            if(has_post_thumbnail()):
              the_post_thumbnail();
            endif;
            ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">
              <?php echo __('Read More'); ?>
            </a>
            </div>
            <div class="col-md-7">
            <ul class="meta">
              <li>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author() ?></a></li>
              <li><?php the_time('F j, Y g:i a'); ?></li>
              <li>
              <?php 
              $categories = get_the_category();
              $separator = ", ";
              $output  = '';

              if($categories){
                foreach($categories as $category){
                  $output.='<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
                }
              }
              echo trim($output, $separator);
              ?>
              </li>
            </ul>
              <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
            </div>
            </article>
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
