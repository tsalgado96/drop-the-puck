<?php get_header(); ?>
   <!-- Start Hero Landing -->
    <section class="hero">
      <div class="gradient-bg">
        <div class="hero-text container">
          <h1 class="hero-heading"><i class="fa fa-podcast blue"></i> Drop The <span class="">Puck</span></h1>
          <p>New Episode Every Week</p>
          <div class="hero-description">
            <p>Pedro Rodrigues and Justin Starr talk about the latest news in the NHL. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <a class="btn btn-primary" type="button" href="https://soundcloud.com/user-207633303/tracks" target="_blank">Listen Now</a>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <h1 class="text-center">Most Recent</h1>
          <?php $args = array("posts_per_page" => 5); ?>
          <?php $wp_query = new WP_Query($args); ?>
          <?php
            if($wp_query->have_posts()):
              while($wp_query->have_posts()):
                $wp_query->the_post();
            ?>
          <div class="post">
            <div class="post-thumb">
              <?php the_post_thumbnail(); ?>
            </div>
            <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h4 class="text-center"><?php the_date(); ?> | <?php the_author(); ?></h4>
            <p class="text-center"><?php the_excerpt(); ?></p>
          </div>

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div><!-- /.blog-main -->
        <div class="col-sm-3 podcasts text-center">
          <h1 class="text-center">Podcasts</h1>

          <div class="row">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.jpg" alt="Podcast Logo">
            <span class="podcast-heading blue">Episode #2</span>
            <br>
            <span class="podcast-title">Stanley Cup Playoffs</span>
          </div>

          <div class="row">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.jpg" alt="Podcast Logo">
            <span class="podcast-heading">Episode #1</span>
            <br>
            <span class="podcast-title">The Pilot</span>
          </div>

        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->


<?php get_footer(); ?>
