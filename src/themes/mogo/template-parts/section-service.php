<?php
/**
 * Template part for displaying service section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mogo
 */

?>

<section id="service" class="section">
    <h2 class="section_title"><span class="title1">
                        <?php echo esc_html(get_field('service_subtitle', 96)) ?></span>
        <span class="title2"><?php echo esc_html(get_field('service_title', 96)) ?></span>
    </h2>
    <ul class="services_list">

		<?php
		$service_list = get_field('service_list', 96);
		if ($service_list) {
			foreach ($service_list as $service) {
//                        var_dump($service);
				?>

                <li class="services_l_item">
                    <div class="service_block <?php echo esc_html($service['service_icon']) ?>">
                        <h3 class="service_title"><?php echo esc_html($service['service_name']) ?></h3>
                        <div class="service_text">
                            <p><?php echo esc_html($service['service_description']) ?></p>
                        </div>
                    </div>
                </li>

			<?php }
		}?>



    </ul>
</section>