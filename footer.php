<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

  <footer>
      <p>
        <?php bloginfo('name'); ?> is proudly powered by
        <a href="http://wordpress.org/">WordPress</a>, and built using the <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.
        <br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
        and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
        <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
      </p>
  </footer>
</div> <!--! end of #container -->

  <!-- Javascript that is non-plugin related at the bottom for fast page loading -->
  <?php versioned_javascript(get_bloginfo('template_url')."/js/plugins.js") ?>
  <?php versioned_javascript(get_bloginfo('template_url')."/js/script.js") ?>


  <!--[if lt IE 7 ]>
    <?php versioned_javascript(get_bloginfo('template_url')."/js/libs/dd_belatedpng.js") ?>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->

  <?php wp_footer(); ?>

</body>
</html>
