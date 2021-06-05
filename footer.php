
      <footer class="footer content-region-3 pt30 pb40">
        <div class="container">
        <?php
            if(is_active_sidebar('footer_1')):
              dynamic_sidebar('footer_1');
            endif;
             ?>
            <?php
            if(is_active_sidebar('footer_2')):
              dynamic_sidebar('footer_2');
            endif;
             ?>
            <?php
            if(is_active_sidebar('footer_3')):
              dynamic_sidebar('footer_3');
            endif;
             ?>
        </div>
      </footer>
<?php wp_footer(); ?>
  </body>
</html>