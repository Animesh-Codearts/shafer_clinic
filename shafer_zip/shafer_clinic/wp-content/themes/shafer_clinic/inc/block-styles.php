<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage shaferclinic

 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	
	 *
	 * @return void
	 */
	function shaferclinic_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'shaferclinic-columns-overlap',
				'label' => esc_html__( 'Overlap', 'shaferclinic' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'shaferclinic-border',
				'label' => esc_html__( 'Borders', 'shaferclinic' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'shaferclinic-border',
				'label' => esc_html__( 'Borders', 'shaferclinic' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'shaferclinic-border',
				'label' => esc_html__( 'Borders', 'shaferclinic' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'shaferclinic-image-frame',
				'label' => esc_html__( 'Frame', 'shaferclinic' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'shaferclinic-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'shaferclinic' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'shaferclinic-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'shaferclinic' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'shaferclinic-border',
				'label' => esc_html__( 'Borders', 'shaferclinic' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'shaferclinic-separator-thick',
				'label' => esc_html__( 'Thick', 'shaferclinic' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'shaferclinic-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'shaferclinic' ),
			)
		);
	}
	add_action( 'init', 'shaferclinic_register_block_styles' );
}
