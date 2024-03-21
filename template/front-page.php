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
 <div class="block-mainv">
        <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/mainv.webp" alt="mainv"></figure>
      </div>
      <div class="contents">
        <section class="block">
          <div class="flex flex01">
            <div class="box-left">
              <figure class="photo01"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img03.png" alt=""></figure>
            </div>
            <div class="box-right">
              <div class="c-frame01">
                <h2 class="c-title01">
                  <span>DESIGN</span><span>FOLLOWS</span><span>WHERE</span><span>IMAGINATION</span><span>GOES</span>
                </h2>
                <p class="txt">- Anouska Hempel</p>
              </div>
            </div>
          </div>
        </section>
        <section class="block">
          <ul class="list-btn">
            <li class="c-btnlink">
              <a href="#">
                <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/btn_img.webp" alt=""></figure>
                <h3>GARDENS</h3>
              </a>
            </li>
            <li class="c-btnlink">
              <a href="#">
                <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/btn_img.webp" alt=""></figure>
                <h3>GARDENS</h3>
              </a>
            </li>
            <li class="c-btnlink">
              <a href="#">
                <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/btn_img.webp" alt=""></figure>
                <h3>GARDENS</h3>
              </a>
            </li>
            <li class="c-btnlink">
              <a href="#">
                <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/btn_img.webp" alt=""></figure>
                <h3>GARDENS</h3>
              </a>
            </li>
            <li class="c-btnlink">
              <a href="#">
                <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/btn_img.webp" alt=""></figure>
                <h3>GARDENS</h3>
              </a>
            </li>
          </ul>
        </section>
        <section class="block flex">
          <div class="box-left">
            <figure class="photo01"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img01.jpg" alt=""></figure>
          </div>
          <div class="box-right">
            <figure class="photo01"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img02.jpg" alt=""></figure>
          </div>
        </section>
        <section class="block">
          <div class="block-content">
            <figure class="bg"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/bg01.webp" alt=""></figure>
            <div class="card">
              <div class="frame">
                <h2 class="c-title02">
                  <span>ALL ELEMENTS OF</span>A LIFE<span>of</span>DESIGN
                </h2>
                <div class="sec">
                  <p>The savant of the visual, Anouska Hempel is revered across the world for her originality and for
                    her
                    influence. This is a designer who sees everything, and instinctively understands it. Wherever the
                    trade routes have passed or the trade winds have blown - that’s her territory and at once you are
                    thrown into a throng of creativity that is impelled to take every realm of design to more thrilling
                    and higher heights.
                  </p>
                  <p>There is mystery, romance, theatre and perfection; an utopian whirl of stories to be told and
                    worlds
                    to unfold. The stuff of dreams, a glimpse of beyond - from dignitary to vagabond - a corner for
                    every
                    inch of thought alongside beauty, delight and charm.</p>
                </div>
              </div>
            </div>
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
