<?php
/**
 * Template part for displaying blog section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mogo
 */
?>

<section id="blog" class="section">
    <h2 class="section_title">
        <span class="title1"><?php echo esc_html( get_field( 'blog_subtitle', 96 ) ) ?></span>
        <span class="title2"><?php echo esc_html( get_field( 'blog_title', 96 ) ) ?></span>
    </h2>

    <ul class="recent_list">
	    <?php
	    $blog_posts = new WP_Query( [
            'category_name' => 'Blog',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date',
        ] ); ?>

	    <?php if ( $blog_posts -> have_posts() ) : ?>

	    <?php while ( $blog_posts -> have_posts() ) : $blog_posts -> the_post(); ?>
            <li class="recent_item">
                <article class="post">
                    <div class="image_wrap blog_mod">
                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>" class="img blog_mod"/>
                    </div>

                    <h2 class="post_title">
                        <a href="#" class="post_link"><?php esc_html( the_title() ); ?></a>
                    </h2>

                    <div class="post_text">
                        <p><?php esc_html( the_content() ); ?></p>
                    </div>

                    <a href="#" class="post_date">
                        <span class="post_d_day"><?php echo date_i18n('d', strtotime( get_the_date() )); ?></span>
                        <span class="post_d_month"><?php echo date_i18n('M', strtotime( get_the_date() )); ?></span>
                    </a>

                    <div class="post_stat_wrap">
                        <a href="#views" class="post_stat views_mod"><?php get_post_meta( get_the_ID(), 'views', true ); ?></a>
                        <a href="#comments" class="post_stat comm_mod"><?php echo get_comments_number(); ?></a>
                    </div>
                </article>
            </li>
	    <?php endwhile; ?>

	    <?php wp_reset_postdata(); ?>
    </ul>
    <?php endif ?>
</section>