<?php /* Template Name: template-project*/

get_header();
?>

<div class="contents">
  <div class="block">
    <ul class="list-btn">
      <?php $group_gallery = get_field('group_gallery');
      if (!empty ($group_gallery)) {
        foreach ($group_gallery as $val) {
          $img = $val['button_image'];
          $s_title = $val['s_title']; ?>
          <li class="c-btnlink">
            <a href="#<?php echo sanitize_title($s_title); ?>">
              <figure><img src="<?php echo $img ?>" alt="<?php echo $s_title ?>"></figure>
              <h3>
                <?php echo $s_title ?>
              </h3>
            </a>
          </li>
        <?php }
      } ?>
    </ul>
  </div>
  <div class="block banner02">
    <?php $banner_gallery = get_field('banner_gallery');
    if (!empty ($banner_gallery)) { ?>
      <figure><img src="<?php echo $banner_gallery ?>" alt="<?php the_title() ?>"></figure>
    <?php } ?>
  </div>
  <?php require_once (get_stylesheet_directory() . '/module/block-gallery.php'); ?>
  <section class="block">
    <div class="block-ttl01">
      <h2 class="ttl">COLE PARK </h2>
    </div>
    <?php require_once (get_stylesheet_directory() . '/module/block-list-button.php'); ?>
  </section>
  <div class="banner02">
    <?php $banner_footer = get_field('banner_footer');
    if (!empty ($banner_footer)) { ?>
      <figure><img src="<?php echo $banner_gallery ?>" alt="<?php the_title() ?>"></figure>
    <?php } ?>
  </div>
</div>
<?php
get_footer();