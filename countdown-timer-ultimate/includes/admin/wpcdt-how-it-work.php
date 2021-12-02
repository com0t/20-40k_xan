<?php
/**
 * Pro Designs and Plugins Feed
 *
 * @package Countdown Timer Ultimate
 * @since 1.1.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div class="wrap wpcdt-wrap">
<h2><?php _e( 'How It Works', 'countdown-timer-ultimate' ); ?></h2>
	<style type="text/css">
		.wpos-pro-box .hndle{background-color:#0073AA; color:#fff;}
		.wpos-pro-box .postbox{background:#dbf0fa none repeat scroll 0 0; border:1px solid #0073aa; color:#191e23;}
		.postbox-container .wpos-list li:before{font-family: dashicons; content: "\f139"; font-size:20px; color: #0073aa; vertical-align: middle;}
		.wpcdt-wrap .wpos-button-full{display:block; text-align:center; box-shadow:none; border-radius:0;}
		.wpcdt-shortcode-preview{background-color: #e7e7e7; font-weight: bold; padding: 2px 5px; display: inline-block; margin:0 0 2px 0;}
		.upgrade-to-pro{font-size:18px; text-align:center; margin-bottom:15px;}
		.wpos-copy-clipboard{-webkit-touch-callout: all; -webkit-user-select: all; -khtml-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all;}
		.button-orange{background: #ff2700 !important;border-color: #ff2700 !important; font-weight: 600;}
	</style>

	<div class="post-box-container">
		<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">

				<!--How it workd HTML -->
				<div id="post-body-content">
					<div class="metabox-holder">
						<div class="meta-box-sortables ui-sortable">
							<div class="postbox">
								<div class="postbox-header">
									<h2 class="hndle">
										<span><?php _e( 'How It Works - Display and shortcode', 'countdown-timer-ultimate' ); ?></span>
									</h2>
								</div>
								<div class="inside">
									<table class="form-table">
										<tbody>
											<tr>
												<th>
													<label><?php _e('Getting Started', 'countdown-timer-ultimate'); ?></label>
												</th>
												<td>
													<ul>
														<li><?php _e('Step-1: This plugin creates a Countdown Timer tab in WordPress menu section', 'countdown-timer-ultimate'); ?></li>
														<li><?php _e('Step-2: Add Timer.', 'countdown-timer-ultimate'); ?></li>
														<li><?php _e('Step-3: Display timer on any POST OR PAGE of your website.', 'countdown-timer-ultimate'); ?></li>
													</ul>
												</td>
											</tr>

											<tr>
												<th>
													<label><?php _e('Plugin Shortcodes', 'countdown-timer-ultimate'); ?></label>
												</th>
												<td>
													<span class="wpos-copy-clipboard wpcdt-shortcode-preview">[wpcdt-countdown id="1"]</span> – <?php _e('Countdown Timer', 'countdown-timer-ultimate'); ?> <br/>
												</td>
											</tr>
											<tr>
										<th>
											<label><?php _e('Documentation', 'countdown-timer-ultimate'); ?>:</label>
										</th>
										<td>
											<a class="button button-primary" href="https://docs.essentialplugin.com/countdown-timer-ultimate/" target="_blank"><?php _e('Check Documentation', 'countdown-timer-ultimate'); ?></a>
										</td>
									</tr>
										</tbody>
									</table>
								</div><!-- .inside -->
							</div><!-- #general -->

							<div class="postbox">
								<div class="postbox-header">
									<h2 class="hndle">
										<span><?php _e( 'Need Support & Solutions?', 'countdown-timer-ultimate' ); ?></span>
									</h2>
								</div>
								<div class="inside">
									<table class="form-table">
										<tbody>											
											<tr>
												<td>
													<p><?php _e('Boost design and best solution for your website.', 'countdown-timer-ultimate'); ?></p><br/>
													<a class="button button-primary button-orange" href="<?php echo WPCDT_SITE_LINK; ?>/essential-bundle/?utm_source=WP&utm_medium=Countdown-Timer&utm_campaign=Check-Designs-Solutions" target="_blank"><?php _e('Boost Design', 'countdown-timer-ultimate'); ?></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div><!-- .inside -->
							</div><!-- #general -->

							<!-- Help to improve this plugin! -->
							<div class="postbox">
								<div class="postbox-header">
									<h2 class="hndle">
										<span><?php _e( 'Help to improve this plugin!', 'countdown-timer-ultimate' ); ?></span>
									</h2>
								</div>
								<div class="inside">
									<p><?php _e('Enjoyed this plugin? You can help by rate this plugin', 'countdown-timer-ultimate'); ?> <a href="https://wordpress.org/support/plugin/countdown-timer-ultimate/reviews/" target="_blank">5 stars!</a></p>
								</div><!-- .inside -->
							</div><!-- #general -->
						</div><!-- .meta-box-sortables ui-sortable -->
					</div><!-- .metabox-holder -->
				</div><!-- #post-body-content -->

				<!--Upgrad to Pro HTML -->
				<div id="postbox-container-1" class="postbox-container">
					<div class="metabox-holder wpos-pro-box">
						<div class="meta-box-sortables ui-sortable">
							<div class="postbox" style="">
								<h3 class="hndle">
									<span><?php _e( 'Upgrate to Pro', 'countdown-timer-ultimate' ); ?></span>
								</h3>
								<div class="inside">
									<ul class="wpos-list">
										<li>12+ stunning cool designs for clock and timer.</li>
										<li>Fully customized clock.</li>
										<li>Schedule Timer</li>
										<li>Recurring Timer</li>
										<li>Simple Timer Shortcode</li>
										<li>Pre Text Timer Shortcode</li>
										<li>Manage Completion Text</li>
										<li>Create unlimited Countdowns Timer</li>
										<li>Create Countdown in pages/posts</li>
										<li>Custom css</li>
										<li>Templating Feature Support</li>
										<li>Easy to integrate with e-commerce coupons like WooCommerce and Easy Digital Downloads.</li>
										<li>Various parameters for clock like background color, text color and etc.</li>
										<li>Option to show/hide Days, hours, minutes and seconds.</li>
										<li>Clock expiration event. Display your desired text on complition of timer.</li>
										<li>Light weight and fast.</li>
										<li>Fully responsive</li>
										<li>100% Multi language</li>
									</ul>
									<div class="upgrade-to-pro">Gain access to <strong>Countdown Timer Ultimate</strong> included in <br /><strong>Essential Plugin Bundle</div>
									<a class="button button-primary wpos-button-full button-orange" href="<?php echo WPCDT_SITE_LINK; ?>/pricing/?utm_source=WP&utm_medium=Countdown-Timer&utm_campaign=How-It-Work" target="_blank"><?php _e('Go Premium ', 'countdown-timer-ultimate'); ?></a>
									<p><a class="button button-primary wpos-button-full" href="https://demo.wponlinesupport.com/prodemo/countdown-timer-ultimate-pro/circle-countdown-timer/" target="_blank"><?php _e('View PRO Demo ', 'countdown-timer-ultimate'); ?></a>	</p>
								</div><!-- .inside -->
							</div><!-- #general -->
						</div><!-- .meta-box-sortables ui-sortable -->
					</div><!-- .metabox-holder -->
				</div><!-- #post-container-1 -->
			</div><!-- #post-body -->
		</div><!-- #poststuff -->
	</div><!-- #post-box-container -->
</div>