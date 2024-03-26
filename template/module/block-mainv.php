<div class="block-mainv">
    <figure>
        <figure><img src="<?php echo get_field('main_image'); ?>" alt="mainv" loading="lazy"></figure>
    </figure>
    <?php if (!(is_front_page())) { ?>
        <div class="sec">
        <h2>
            <?php the_title(); ?>
        </h2>
        <a href="#pos-contents" class="scroll-down">
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
    <?php } ?>
</div>