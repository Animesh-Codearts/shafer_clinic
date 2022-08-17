<?php
/**
 * Customize API: shaferclinic_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage shaferclinic

 */

/**
 * Customize Notice Control class.
 *

 *
 * @see WP_Customize_Control
 */
class shaferclinic_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	
	 *
	 * @var string
	 */
	public $type = 'shaferclinic-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'shaferclinic' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/shaferclinic/#dark-mode-support', 'shaferclinic' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'shaferclinic' ); ?>
			</a></p>
		</div>
		<?php
	}
}
