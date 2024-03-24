<?php $group_gallery = get_field('group_gallery');
if (!empty ($group_gallery)) {
  foreach ($group_gallery as $val) {
    $s_title = $val['s_title'];
    $l_title = $val['large_title'];
    $gr_img = $val['group_image'];
    ?>
    <section class="block block--01">
      <div id="<?php echo sanitize_title($s_title); ?>" class="block-ttl01">
        <h2 class="ttl">
          <?php echo $l_title ?>
        </h2>
        <div class="box">
          <p class="left">
            <?php echo $s_title ?>
          </p>
          <p class="right">
            <?php the_title() ?>
          </p>
        </div>
      </div>
      <div class="block-gallery">

        <?php foreach ($gr_img as $val) {
          $images = $val['images']; ?>
          <div class="items">
            <?php
            foreach ($images as $img) {
              ?>
              <figure><img src="<?php echo $img ?>" alt="<?php echo $s_title ?>"></figure>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </section>
  <?php }
} ?>


