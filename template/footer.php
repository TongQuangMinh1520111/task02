<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package recruit
 */

?>
</main>
<!-- main end -->

<footer id="footer">
  <div class="inner">
    <?php
    wp_nav_menu(
      array(
        'menu' => 'MenuFooter',
        'menu_class' => 'footer_link',
      )
    );
    ?>
  </div>
  <address>&copy; 2024 Anouska Hempel Limited</address>
</footer>
</div>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/top.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/common.js"></script>
</body>

</html>