  <footer class="page-footer blue-grey darken-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"><?php bloginfo(name) ?></h5>
          <p class="grey-text text-lighten-4"><?php bloginfo(description) ?></p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Footer Menu</h5>
          <?php 
          wp_nav_menu(
            array (
              'theme_location' => 'bottom-menu',
              )
            )
          ?>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2017 Feel free to edit and share!
        <a class="grey-text text-lighten-4 right" href="https://github.com/Jhonbeltran">@Jhonbeltran on Github</a>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>       
</body>
</html>