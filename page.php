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
                    <div class="row teal">
                        <div class="row"></div>
                        <div class="row center">
                        <h3 style="text-transform: uppercase !important;"><a class="grey-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h3>
                      <h6>
                        @<?php the_author(); ?>
                      </h6>
                      </div>
                    </div>
                    
                    <div class="divider"></div>
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
      </div>
    </div>
  </div>
<?php get_footer("single"); ?>