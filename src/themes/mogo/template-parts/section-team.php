<?php
/**
 * Template part for displaying team section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mogo
 */

?>

<section class="section">
    <h2 class="section_title">
        <span class="title1"><?php echo esc_html(get_field('team_subtitle', 96)) ?>></span>
        <span class="title2"><?php echo esc_html(get_field('team_title', 96)) ?></span>
    </h2>

    <div class="section_descr">
	    <p><?php echo esc_html(get_field('team_description', 96)) ?></p>
    </div>

    <ul class="team_list">

	    <?php
	    $team_list = get_field('team_posts', 96);

	    if ($team_list && count($team_list) >= 3) {
	    foreach ($team_list as $worker) {
		    $position = get_field('worker_position', $worker -> ID);
            $thumbnail = get_the_post_thumbnail_url( $worker -> ID, 'full' );
            ?>

            <li class="team_l_item">
                <div class="teammate_block">
                    <figure class="image_wrap effect1_mod">
                        <img src="<?php echo $thumbnail; ?>"
                             alt="<?php echo $worker -> post_title; ?>"
                             title="<?php echo esc_html($worker -> post_title); ?>"
                             class="img"
                        />

                        <figcaption class="image_caption">
                            <ul class="teammate_socials">
	                            <?php
	                            $worker_social_items = get_field('worker_social_links', $worker -> ID);

	                            foreach ($worker_social_items as $social_items ) { ?>
                                    <li class="teammate_s_item">
                                        <a href="<?php echo $social_items['worker_social_link']; ?>" class="teammate_s_link <?php echo $social_items['worker_social_icon'];?>"></a>
                                    </li>
	                            <?php } ?>

                            </ul>
                        </figcaption>
                    </figure>

                    <span class="image_c_title"><?php echo esc_html($worker -> post_title); ?></span>
                    <span class="image_c_text"><?php echo $position ?></span>
                </div>
            </li>
	    <?php }} ?>

    </ul>
</section>