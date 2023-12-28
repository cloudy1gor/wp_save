<?php
/**
 * Template part for displaying testimonials section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mogo
 */
?>

<?php
$testimonials_posts = new WP_Query([ 'post_type' => 'testimonials' ]);

if ( $testimonials_posts->have_posts() ) { ?>

    <section class="section what_mod" style="background-image: url( '<?php echo get_field( 'testimonials_background', 96 ); ?>' )">
        <h2 class="section_title">
            <span class="title1"><?php echo esc_html( get_field( 'testimonials_subtitle', 96 ) ) ?></span>
            <span class="title2"><?php echo esc_html( get_field( 'testimonials_title', 96 ) ) ?></span>
        </h2>
        <div class="clients">
            <?php
                while ( $testimonials_posts -> have_posts() ) {
                    $testimonials_posts -> the_post();
                    $client_position = get_field( 'testimonial_author_position', get_the_ID() );
                    $client_thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
                    ?>
                        <div class="client_block">
                            <div class="client_image"><img src="<?php echo $client_thumbnail; ?>" class="img"/></div>
                            <div class="text_wrap">
                                <div class="image_c_title"><?php esc_html( the_title() ); ?></div>
                                <div class="image_c_text"><?php echo $client_position; ?></div>
                                <div class="text">
                                    <p><?php esc_html( the_content() ); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                } ?>
        </div>
    </section>
<?php
    }
    wp_reset_postdata();
?>