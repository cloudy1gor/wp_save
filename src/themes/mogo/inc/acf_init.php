<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'hero_section',
    'title' => 'Hero section',
    'fields' => array (
        array (
            'key' => 'hero_subtitle',
            'label' => 'Hero subtitle',
            'name' => 'hero_subtitle',
            'type' => 'text',
            'required' => 0,
        )
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ),
        ),
    ),
    'menu_order' => 0,
));

endif;
