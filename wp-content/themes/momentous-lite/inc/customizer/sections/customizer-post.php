<?php
/**
 * Register Post Settings section, settings and controls for Theme Customizer
 *
 */

// Add Theme Colors section to Customizer
add_action( 'customize_register', 'momentous_customize_register_post_settings' );

function momentous_customize_register_post_settings( $wp_customize ) {

	// Add Sections for Post Settings
	$wp_customize->add_section( 'momentous_section_post', array(
        'title'    => __( 'Post Settings', 'momentous-lite' ),
        'priority' => 30,
		'panel' => 'momentous_options_panel' 
		)
	);
	
	// Add Settings and Controls for Post Layout
	$wp_customize->add_setting( 'momentous_theme_options[post_layout]', array(
        'default'           => 'index',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_post_layout'
		)
	);
    $wp_customize->add_control( 'momentous_control_post_layout', array(
        'label'    => __( 'Post Layout', 'momentous-lite' ),
        'section'  => 'momentous_section_post',
        'settings' => 'momentous_theme_options[post_layout]',
        'type'     => 'radio',
		'priority' => 1,
        'choices'  => array(
            'one-column' => __( 'One Column', 'momentous-lite' ),
			'index' => __( 'Two Columns', 'momentous-lite' )
			)
		)
	);
	
	// Add Post Images Headline
	$wp_customize->add_setting( 'momentous_theme_options[post_images]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_attr'
        )
    );
    $wp_customize->add_control( new Momentous_Customize_Header_Control(
        $wp_customize, 'momentous_control_post_images', array(
            'label' => __( 'Post Images', 'momentous-lite' ),
            'section' => 'momentous_section_post',
            'settings' => 'momentous_theme_options[post_images]',
            'priority' => 2
            )
        )
    );
	$wp_customize->add_setting( 'momentous_theme_options[post_thumbnails_index]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'momentous_control_posts_thumbnails_index', array(
        'label'    => __( 'Display featured images on archive pages', 'momentous-lite' ),
        'section'  => 'momentous_section_post',
        'settings' => 'momentous_theme_options[post_thumbnails_index]',
        'type'     => 'checkbox',
		'priority' => 3
		)
	);

	$wp_customize->add_setting( 'momentous_theme_options[post_thumbnails_single]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'momentous_control_posts_thumbnails_single', array(
        'label'    => __( 'Display featured images on single posts', 'momentous-lite' ),
        'section'  => 'momentous_section_post',
        'settings' => 'momentous_theme_options[post_thumbnails_single]',
        'type'     => 'checkbox',
		'priority' => 4
		)
	);
	
	// Add Excerpt Text setting
	$wp_customize->add_setting( 'momentous_theme_options[excerpt_text_headline]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_attr'
        )
    );
    $wp_customize->add_control( new Momentous_Customize_Header_Control(
        $wp_customize, 'momentous_control_excerpt_text_headline', array(
            'label' => __( 'Text after Excerpts', 'momentous-lite' ),
            'section' => 'momentous_section_post',
            'settings' => 'momentous_theme_options[excerpt_text_headline]',
            'priority' => 5
            )
        )
    );
	$wp_customize->add_setting( 'momentous_theme_options[excerpt_text]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'momentous_control_excerpt_text', array(
        'label'    => __( 'Display [...] after excerpts', 'momentous-lite' ),
        'section'  => 'momentous_section_post',
        'settings' => 'momentous_theme_options[excerpt_text]',
        'type'     => 'checkbox',
		'priority' => 6
		)
	);
	
	// Add Post Meta Settings
	$wp_customize->add_setting( 'momentous_theme_options[postmeta_headline]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_attr'
        )
    );
    $wp_customize->add_control( new Momentous_Customize_Header_Control(
        $wp_customize, 'momentous_control_postmeta_headline', array(
            'label' => __( 'Post Meta', 'momentous-lite' ),
            'section' => 'momentous_section_post',
            'settings' => 'momentous_theme_options[postmeta_headline]',
            'priority' => 7
            )
        )
    );
	$wp_customize->add_setting( 'momentous_theme_options[meta_date]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'momentous_control_meta_date', array(
        'label'    => __( 'Display post date', 'momentous-lite' ),
        'section'  => 'momentous_section_post',
        'settings' => 'momentous_theme_options[meta_date]',
        'type'     => 'checkbox',
		'priority' => 8
		)
	);
	$wp_customize->add_setting( 'momentous_theme_options[meta_author]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'momentous_control_meta_author', array(
        'label'    => __( 'Display post author', 'momentous-lite' ),
        'section'  => 'momentous_section_post',
        'settings' => 'momentous_theme_options[meta_author]',
        'type'     => 'checkbox',
		'priority' => 9
		)
	);
	$wp_customize->add_setting( 'momentous_theme_options[meta_category]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'momentous_control_meta_category', array(
        'label'    => __( 'Display post categories', 'momentous-lite' ),
        'section'  => 'momentous_section_post',
        'settings' => 'momentous_theme_options[meta_category]',
        'type'     => 'checkbox',
		'priority' => 10
		)
	);
	$wp_customize->add_setting( 'momentous_theme_options[meta_tags]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'momentous_control_meta_tags', array(
        'label'    => __( 'Display post tags', 'momentous-lite' ),
        'section'  => 'momentous_section_post',
        'settings' => 'momentous_theme_options[meta_tags]',
        'type'     => 'checkbox',
		'priority' => 11
		)
	);

}

?>