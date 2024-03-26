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
              <div class="fr-img"><img src="<?php echo $img ?>" alt="<?php echo $s_title ?>" loading="lazy">
                <div class="icon-share btn-modal js-modal" aria-controls="modal-img"><i class="share-store"><svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M14.5,14 C14.628,14 14.752,14.049 14.845,14.138 C14.944,14.232 15,14.363 15,14.5 L15,17.293 L20.293,12 L15,6.707 L15,9.5 C15,9.633 14.947,9.761 14.853,9.854 C14.759,9.947 14.632,10 14.5,10 C14.494,9.998 14.491,10 14.486,10 C13.667,10 7.407,10.222 4.606,16.837 C7.276,14.751 10.496,13.795 14.188,13.989 C14.324,13.996 14.426,14.001 14.476,14.001 C14.484,14 14.492,14 14.5,14 M3.5,19 C3.414,19 3.328,18.979 3.25,18.933 C3.052,18.819 2.957,18.585 3.019,18.365 C5.304,10.189 11.981,9.145 14,9.017 L14,5.5 C14,5.298 14.122,5.115 14.309,5.038 C14.496,4.963 14.71,5.004 14.854,5.146 L21.354,11.646 C21.549,11.842 21.549,12.158 21.354,12.354 L14.854,18.854 C14.71,18.997 14.495,19.038 14.309,18.962 C14.122,18.885 14,18.702 14,18.5 L14,14.981 C9.957,14.791 6.545,16.102 3.857,18.85 C3.761,18.948 3.631,19 3.5,19" fill-rule="evenodd"></path></svg></i></div>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </section>
  <?php }
} ?>