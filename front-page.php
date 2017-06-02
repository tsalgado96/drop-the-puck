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

    <!-- Start Main Post Loop -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">

          <!--<h1 class="text-center section-heading">Featured Posts</h1>-->
        <!-- Start Carousel -->
          <?php if(is_front_page()) {?>
          <?php query_posts('showposts=3&post_type=post'); ?>

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

              <?php if (have_posts() ) : while (have_posts() ) : the_post(); $i++; ?>

              <?php if ($i==1) { ?>
              <div class="item active">
              <?php } else { ?>
              <div class="item">
              <?php } ?>

              <?php if (has_post_thumbnail()) {
                $url = wp_get_attachment_url(get_post_thumbnail_id());
              ?>
                <a href="<?php the_permalink(); ?>" role="button"><img src="<?php echo $url; ?>" alt="<?php the_title(); ?>"></a>
              <?php } ?>
                <div class="carousel-caption">
                  <h1><?php the_title(); ?></h1>

                </div>
              </div>
            <?php endwhile; endif; ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <?php } wp_reset_query(); ?>
        <!-- ./ Carousel -->

          <!--<h1 class="text-center section-heading">Most Recent</h1>-->
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
          <h1 class="text-center section-heading">Latest Podcasts</h1>

          <div class="row">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.jpg" alt="Podcast Logo">
            <span class="podcast-heading">Episode #2</span>
            <br>
            <span class="podcast-title">Stanley Cup Final &amp; More!</span>
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
