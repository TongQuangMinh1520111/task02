<section class="block">
  <ul class="list-btn">
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
        <li class="c-btnlink">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              } else { ?>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/dummy_link.webp"
                  alt="<?php the_title() ?>">
              <?php } ?>
            </figure>
            <h3>
              <?php the_title() ?>
            </h3>
          </a>
        </li>
        <?php
      }
    }
    ?>
    <ul>
</section>