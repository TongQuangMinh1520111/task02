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
<div class="block-mainv">
  <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/mainv.webp" alt="mainv"></figure>
  <div class="sec">
    <h2>Contact</h2>
    <a href="#" class="scroll-down">
      <svg preserveAspectRatio="none" data-bbox="19.999 58 160.001 84" viewBox="19.999 58 160.001 84" height="15"
        width="25" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true">
        <g>
          <path
            d="M172.5 142a7.485 7.485 0 0 1-5.185-2.073L100 75.808l-67.315 64.12c-2.998 2.846-7.74 2.744-10.606-.234a7.454 7.454 0 0 1 .235-10.565l72.5-69.057a7.524 7.524 0 0 1 10.371 0l72.5 69.057a7.455 7.455 0 0 1 .235 10.565A7.503 7.503 0 0 1 172.5 142z">
          </path>
        </g>
      </svg>
    </a>
  </div>
</div>
<div class="contents">
  <div class="contact-cont">
    <ul class="list-btn01">
      <li class="c-btnlink01">
        <a href="#">
          <figure>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/btn01_img01.webp" alt="">
            <figcaption>Press</figcaption>
          </figure>
        </a>
      </li>
      <li class="c-btnlink01">
        <a href="#">
          <figure>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/btn01_img01.webp" alt="">
            <figcaption>Press</figcaption>
          </figure>
        </a>
      </li>
      <li class="c-btnlink01">
        <a href="#">
          <figure>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/btn01_img01.webp" alt="">
            <figcaption>Press</figcaption>
          </figure>
        </a>
      </li>
    </ul>
    <div class="contact-info">
      <p>27 Adam and Eve Mews<br>Kensington<br>London W8 6UG</p>
      <p><a href="mailto:studio@anouskahempel.com">Email: studio@anouskahempel.com</a><br>Tel: <a
          href="tel:+44 (0)207 938 1515">+44 (0)207 938 1515</a></p>
      <p>Anouska Hempel is always on the look out for unique individuals for various roles.<br>Please enquire for
        more information.</p>
    </div>
    <div class="banner01">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/contact/banner01.jpg" alt="">
    </div>
  </div>
</div>
<?php
get_footer();
