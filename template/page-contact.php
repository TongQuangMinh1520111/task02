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
  <div class="contact-cont">

    <?php
    $button_contact = get_field('gr_contact')['button_contact'];
    if (!empty ($button_contact)) { ?>
      <ul class="list-btn01">
        <?php foreach ($button_contact as $val) {
          $href = $val['link_contact'];
          $img = $val['image_button'];
          $text = $val['text_button']; ?>
          <li class="c-btnlink01">
            <a href="<?php echo $href ?>">
              <figure>
                <img src="<?php echo $img ?>" alt="<?php echo $text ?>" loading="lazy">
                <figcaption>
                  <?php echo $text ?>
                </figcaption>
              </figure>
            </a>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>

    <div class="contact-info">
      <?php $contact_info = get_field('contact_info');
      if (!empty ($contact_info)) {
        echo $contact_info;
      }
      ?>
    </div>
    <?php $contact_banner = get_field('contact_banner');
    if (!empty ($contact_banner)): ?>
      <div class="banner01">
        <img src="<?php echo $contact_banner; ?>" alt="Contact" loading="lazy">
      </div>
    <?php endif ?>
  </div>
</div>
<?php
get_footer();
