          <div class="row">
                  <article>
                    <div class="row center">
                      <div class="col s12 l2">
                        <h3>
                          <?php echo get_avatar(get_the_author_meta('user_email'), apply_filters('','60')); ?>
                        </h3>
                      </div>
                      <div class="col s12 l7 center">
                        <h3 class="center">Author: <?php the_author(); ?></h3>
                      </div>
                      
                    </div>
                    <div class="row center">
                      <div class="col s12">
                        <p class="flow-text">
                          <!-- <?php printf( __('About %s', ''), get_the_author()); ?> -->
                          <?php the_author_meta('description'); ?>
                        </p>
                      </div>
                    </div>
                    
                  </article>
        </div>
