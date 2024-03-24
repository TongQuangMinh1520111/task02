<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header();
?>
<div class="contents">
  <section class="block">
    <div class="flex flex01">
      <?php $block_content01 = get_field('block_content01');
      $box_image01 = $block_content01['box_image01'];
      $text_content01 = $block_content01['text_content01'];
      $class = $text_content01 ? 'box-left' : '';
      ?>
      <div class="<?php echo $class ?>">
        <figure class="photo01"><img src="<?php echo $box_image01; ?>" alt="banner"></figure>
      </div>
      <?php if (!empty ($text_content01)): ?>
        <div class="box-right">
          <?php echo $text_content01; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <section class="block">
    <?php require_once (get_stylesheet_directory() . '/module/block-list-button.php'); ?>
  </section>
  <section class="block banner-top">
    <?php $block_banner = get_field('block_banner');
    if (!empty ($block_banner)) {
      $class = (count($block_banner) > 1) ? 'img' : '';
      foreach ($block_banner as $img) { ?>
        <figure class="<?php echo $class; ?>"><img src="<?php echo $img; ?>" alt="banner"></figure>
      <?php }
    } ?>
  </section>
  <section class="block">
    <div class="block-content">
      <?php $block_content02 = get_field('block_content02');
      $box_image02 = $block_content02['box_image02'];
      $text_content02 = $block_content02['text_content02'];
      ?>
      <figure class="bg"><img src="<?php echo $box_image02 ?>" alt="banner"></figure>
      <?php if (!empty ($text_content02)) {
        echo $text_content02;
      }
      ?>
    </div>
  </section>
  <section class="block-slogan">
    <div class="inner">
      <h2><span>DESIGN</span><span>REFINE</span>&<span>REPEAT</span></h2>
      <p>There is mystery, romance, theatre and perfection.</p>
    </div>
  </section>
</div>
<?php get_footer();
