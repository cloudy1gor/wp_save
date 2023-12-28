<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mogo
 */

get_header();
?>

	<div class="wrapper">
		<div class="base">

			<section id="home" class="section intro_mod" style="background-image: url( '<?php echo get_field( 'hero_background', 96 ); ?>' )">
                <h2 class="section_title intro_mod">
                    <span class="title1 intro_mod"><?php echo esc_html( get_field( 'hero_subtitle', 96 ) ); ?></span>
                    <span class="title2 intro_mod"><?php echo esc_html( get_field( 'hero_title', 96 ) ); ?></span>
                </h2>
			</section>

            <?php get_template_part('template-parts/section', 'about'); ?>

            <?php get_template_part('template-parts/section', 'service'); ?>

            <?php get_template_part('template-parts/section', 'what'); ?>

			<?php get_template_part('template-parts/section', 'team'); ?>

			<?php get_template_part('template-parts/section', 'testimonials'); ?>

			<?php get_template_part('template-parts/section', 'blog'); ?>

		</div>
<?php
get_footer();
