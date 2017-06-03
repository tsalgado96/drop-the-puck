    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
      <?php if(is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>
    </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="text-center">
      <p> <?php bloginfo('name'); ?> &nbsp;&copy;&nbsp; <?php echo Date('Y'); ?></p>
    </footer>
    <?php wp_footer(); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <!-- Main JS File -->
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
  </body>
</html>
