<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package recruit
 */

get_header();
?>
<div id="pos-contents" class="contents">
  <section class="block">
    <?php require_once (get_stylesheet_directory() . '/module/block-list-button.php'); ?>
  </section>
  <section class="block">
    <div class="block-content block-content--01">
      <?php $block_content = get_field('block_content03');
      $box_bg = $block_content['box_backgound'];
      $box_text = $block_content['box_text'];
      ?>
      <figure class="bg"><img src="<?php echo $box_bg ?>" alt="project" loading="lazy"></figure>
      <?php if (!empty ($box_text)) { ?>
        <?php echo $box_text ?>
      <?php } ?>
    </div>
  </section>
  <?php
  $the_query = new WP_Query(
    array(
      'post_type' => 'page',
      'meta_key' => '_wp_page_template',
      'meta_value' => 'tpl-project.php'
    )
  );
  if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
      $the_query->the_post();
      ?>


      <section class="block block--01">
        <h2 class="c-title04">
          <?php the_title() ?>
        </h2>
        <?php $group_gallery = get_field('group_gallery'); ?>
        <ul class="list-btn">
          <?php if (!empty ($group_gallery)) {
            foreach ($group_gallery as $val) {
              $s_title = $val['s_title'];
              $img = $val['button_image'];
              ?>
              <li class="c-btnlink">
                <a href="<?php the_permalink(); ?>/#<?php echo sanitize_title($s_title); ?> ">
                  <figure><img src="<?php echo $img; ?>" alt="<?php echo $s_title; ?>" loading="lazy"></figure>
                  <h3>
                    <?php echo $s_title; ?>
                  </h3>
                </a>
              </li>
            <?php }
          }
          ?>
        </ul>
      </section>
      <?php
    }
  }
  wp_reset_postdata();
  ?>
  <?php $block_slogan = get_field('block_slogan01');
  if (!empty($block_slogan)) { ?>
    <section class="block-slogan01">
      <div class="inner">
        <?php echo $block_slogan ?>
      </div>
    </section>
  <?php } ?>
</div>
<?php
get_footer();