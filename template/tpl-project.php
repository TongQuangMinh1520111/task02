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
              <figure><img src="<?php echo $img ?>" alt="<?php echo $s_title ?>" loading="lazy"></figure>
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
      <figure><img src="<?php echo $banner_gallery ?>" alt="<?php the_title() ?>" loading="lazy"></figure>
    <?php } ?>
  </div>
  <?php require_once (get_stylesheet_directory() . '/module/block-gallery.php'); ?>
  <section class="block block--01">
    <div class="block-ttl01">
      <h2 class="ttl">PROJECTS</h2>
    </div>
    <?php require_once (get_stylesheet_directory() . '/module/block-list-button.php'); ?>
  </section>
  <div class="banner02">
    <?php $banner_footer = get_field('banner_footer');
    if (!empty ($banner_footer)) { ?>
      <div>
        <img src="<?php echo $banner_gallery ?>" alt="<?php the_title() ?>" loading="lazy">
    </div>
    <?php } ?>
  </div>
  <div class="btn-modal js-modal" aria-controls="modal-img"><a>條款及細則</a></div>
</div>

<div class="modal" id="modal-img" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="modal_overlay"></div>
  <div class="modal_container">
    <div class="modal-close">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/close.svg" alt="close">
    </div>
    <div class="modal_content">
      <ul class="list-social">
        <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/facebook.svg"
              alt="icon"></a></li>
        <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/twitter.svg"
              alt="icon"></a></li>
      </ul>
      <div class="box-link">
        <div class="txt">
          <p></p>
        </div>
        <div class="btn-copy"><i><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
              class="social-share-copylink-icon">
              <g fill="currentColor" fill-rule="evenodd">
                <g fill="#currentColor" fill-rule="nonzero">
                  <g>
                    <g>
                      <g>
                        <g>
                          <g>
                            <path
                              d="M4.5 1L15.571 0.929 15.571 12.071 12.5 12.071 12.5 13 16.5 13 16.5 0 3.5 0 3.5 4 4.5 4z"
                              transform="translate(-803 -400) translate(396 248) translate(133 93) translate(0 47) translate(258) rotate(180 16.75 14)">
                            </path>
                            <path d="M.5 3h13v13H.5V3zm1 1v11h11V4h-11z"
                              transform="translate(-803 -400) translate(396 248) translate(133 93) translate(0 47) translate(258) rotate(180 16.75 14)">
                            </path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </svg></i></div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();