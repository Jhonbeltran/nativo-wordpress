<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col s12 l9">
        <div class="row"></div>
          <div class="row">
            <?php
              if(have_posts()):
                while(have_posts()):
                  the_post();
            ?>
                  <article>
                    <div class="row center">
                      <h3 style="text-transform: uppercase !important;">
                        <?php the_title(); ?>
                    </h3>
                    <h6 class="teal-text">
                      @<?php the_author_posts_link(); ?>
                    </h6>
                    <div class="divider"></div>
                    </div>
                    <div class="flow-text"><?php the_content(); ?></div>
                    <blockquote>
                      <?php the_tags(); ?>
                    </blockquote>
                  </article>
            <?php 
                endwhile;
              else:
            ?>
                <div class="row"></div>
                <p class="flow-text">
                  No encontramos entradas 😱
                </p>
                <div class="row"></div>
                <div class="row"></div>
                

            <?php 
              endif;
            ?>
        </div>
        <?php include_once('authorsingle.php') ?>
      </div>
    </div>
  </div>
<?php get_footer("single"); ?>