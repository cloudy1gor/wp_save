<?php
/**
 * Template part for displaying about section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mogo
 */

?>

<section id="about" class="section">
    <h2 class="section_title">
        <span class="title1"><?php echo esc_html(get_field('about_subtitle', 96)) ?></span>
        <span class="title2"><?php echo esc_html(get_field('about_title', 96)) ?></span>
    </h2>
    <div class="section_descr">
        <p><?php echo esc_html(get_field('about_description', 96)) ?></p>
    </div>

	<?php
	$about_posts = get_field('about_posts',96);
	//                var_dump($about_posts);

	if ($about_posts) { ?>
        <ul class="stories_list">
			<?php foreach ($about_posts as $post) { ?>
				<?php if ($i < 3) { ?>

                    <li class="stories_l_item">
                        <a href="<?php echo $post -> guid; ?>" class="image_link">
                            <figure class="image_wrap effect1_mod">
                                <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($post -> ID), 'full'); ?>" class="img"/>
                                <figcaption class="image_caption story_mod">
									<?php echo $post -> post_title; ?>
                                </figcaption>
                            </figure>
                        </a>
                    </li>

				<?php } $i++; ?>
			<?php } ?>
        </ul>
	<?php } ?>


	<?php
	$about_facts = get_field('about_facts', 96);

	if ($about_facts) { ?>
        <ul class="facts_list">
			<?php foreach ($about_facts as $facts) { ?>

                <li class="facts_l_item">
                    <dl class="fact_block">

						<?php $count = 0; ?>
						<?php foreach ($facts as $fact) { ?>
							<?php if ($count < 2) { ?>
								<?php if ($count == 0) { ?>
                                    <dt class="fact_text"><?php echo $fact; ?></dt>
								<?php } else { ?>
                                    <dd class="fact_num"><?php echo $fact; ?></dd>
								<?php } ?>
								<?php $count++; ?>
							<?php } ?>
						<?php } ?>

                    </dl>
                </li>

			<?php } ?>
        </ul>
	<?php } ?>
</section>
