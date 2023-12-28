<?php
/**
 * Template part for displaying what we do section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mogo
 */

?>

<section class="section">
	<h2 class="section_title">
        <span class="title1"><?php echo esc_html(get_field('what_subtitle', 96)) ?></span>
        <span class="title2"><?php echo esc_html(get_field('what_title', 96)) ?></span>
	</h2>

	<div class="section_descr">
		<p><?php echo esc_html(get_field('what_description', 96)) ?></p>
	</div>

	<div class="what">
		<figure class="image_wrap what_mod">
            <img src="<?php echo get_field('what_image', 96) ?>" class="img">
        </figure>

		<ul class="accordion">

            <?php
            $accordion = get_field('what_accordion', 96);

            if ($accordion) {
                foreach ($accordion as $group) {
                    foreach ($group as $item) { ?>

                        <li class="accordion_item">
                            <h3 class="accordion_title <?php echo $item['what_icon'] ?>">
                                <?php echo esc_html($item['what_name']) ?>
                            </h3>

                            <div class="accordion_content">
                                <p><?php echo esc_html($item['what_info']) ?></p>
                            </div>
                        </li>
            <?php
                    }
                }
            } ?>
		</ul>
	</div>
</section>