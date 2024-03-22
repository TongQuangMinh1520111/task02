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
<div class="contents">
  <?php require_once (get_stylesheet_directory() . '/module/block-list-button.php'); ?>
  <section class="block">
    <div class="block-content block-content--01">
      <figure class="bg"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/bg01.webp" alt="">
      </figure>
      <div class="card">
        <div class="frame">
          <h2 class="c-title03">
            <span class="txt01">FROM</span><span class="txt02">CONCEPT</span><span class="txt01">TO</span><span
              class="txt03">COMPLETION</span>
          </h2>
          <div class="sec">
            <p>Anouska Hempel's vision of a utopian world encompasses all elements of a life of design from
              landscapes, gardens, interiors and yachts to hotels, retail, couture and more.</p>
            <p>"I am influenced by art and travel, by how I'm pushed and pulled. I find inspiration in every
              corner - from museums to opera, from east to west and beyond.</p>
            <p>Each space holds a story of its own and dictates how that story should be told. I then create the
              backdrop for other people to live their glorious lives in. It’s like a play that keeps on going and
              I give them the stage and the steam to keep running."</p>
          </div>
        </div>
      </div>
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
                  <figure><img src="<?php echo $img; ?>" alt="<?php echo $s_title; ?>"></figure>
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
  ?>
  <section class="block-slogan01">
    <div class="inner">
      <h2 class="slogan01"><span class="txt01">CREATIVITY</span><span class="txt02">BUILDING,</span><span
          class="txt03">AND</span><span class="txt04">BEYOND</span></h2>
    </div>
  </section>
</div>
<?php
get_footer();
