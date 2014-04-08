<div id="contact_section" class="section" data-section="<?php echo sanitize_title( get_theme_option('contact_label') ); ?>">

	<div id="contact_section_botm_bg">

		<div class="section_inn">

			<?php if ( get_theme_option('top') ) : ?>

			<a class="go_top" href="#home_section"></a>

			<?php endif; ?>

			<?php if ( get_theme_option('contact_label') || get_theme_option('contact_address_line') || get_theme_option('contact_phone_line') || get_theme_option('contact_email_line') ) : ?>

			<div id="contact_section_desc">

				<div id="contact_section_desc_left">

					<h3 class="section_label"><?php echo retro_filter( get_theme_option('contact_label') ); ?></h3>

				</div>
				<!-- end div #contact_section_desc_left -->

				<div id="contact_section_desc_right">

					<?php if ( get_theme_option('contact_address_line') ) : ?>

					<p><?php echo get_theme_option('contact_address_line'); ?></p>

					<?php endif; ?>

					<?php if ( get_theme_option('contact_phone_line') ) : ?>

					<p class="phon_no"><?php echo get_theme_option('contact_phone_line'); ?></p>

					<?php endif; ?>

					<?php if ( get_theme_option('contact_email_line') ) : ?>

					<p class="email"><?php echo get_theme_option('contact_email_line'); ?></p>

					<?php endif; ?>

					<div class="clr"></div>

				</div><!-- end div #contact_section_desc_right -->

				<div class="clr"></div>

			</div>
			<!-- end div #contact_section_desc -->

			<?php endif; ?>

			<?php if ( get_theme_option('contact_form' ) ) : ?>

			<!-- Contact Form -->
			<div id="contact_fields">

				<!-- Form -->
				<form action="<?php echo get_includes_dir('uri'); ?>/contact.php" method="post" id="contact_form">

					<fieldset id="contact_fields_left">

						<!-- Name field -->
						<input id="name" type="text" name="name" placeholder="<?php echo esc_attr( __('Your Name*', 'haku') ); ?>" />

						<!-- Email field -->
						<input id="email" type="text" name="email" placeholder="<?php echo esc_attr( __('Your e-mail address*', 'haku') ); ?>" />

						<!-- Subject field -->
						<textarea id="subject" name="subject" placeholder="<?php echo esc_attr( __('Subject', 'haku') ); ?>"></textarea>

					</fieldset>

					<fieldset id="contact_fields_right">

						<!-- Message field -->
						<textarea id="message" name="message" placeholder="<?php echo esc_attr( __('Type your message here..', 'haku') ); ?>"></textarea>

						<!-- Submit field -->
						<input type="submit" id="submit" value="<?php echo retro_filter( esc_attr( __('Send!', 'haku') ) ); ?>" data-str-load="<?php echo retro_filter( esc_attr( __('Sending..', 'haku') ) ); ?>" data-str-done="<?php echo retro_filter( esc_attr( __('Sent!', 'haku') ) ); ?>" />

					</fieldset>

					<!-- Name error -->
					<span id="contact_form_name_error"><?php _e('Please, write your name.', 'haku'); ?></span>

					<!-- Email error -->
					<span id="contact_form_email_error"><?php _e('Please, insert your e-mail address.', 'haku'); ?></span>

					<!-- Message error -->
					<span id="contact_form_message_error"><?php _e('Please, leave a message.', 'haku'); ?></span>

					<!-- Success message -->
					<div id="contact_form_success" style="display: none;">

						<div id="contact_form_success_message">
							<?php echo retro_filter( get_theme_option('contact_form_success') ); ?>
						</div>

					</div>

					<!-- security input -->
					<input type="hidden" name="address" value="abbey road 11" />

					<!-- security input -->
					<input type="text" class="hidden" name="phone" value="" />

				</form>
				<!-- end: Form -->

				<div class="clr"></div>

			</div>
			<!-- end: Contact Form -->

			<?php endif; ?>

			<div id="social_links">

				<ul>

					<?php if ( get_theme_option('social_myspace') ) : ?>

					<!-- Myspace -->
					<li class="social_myspace"><a href="<?php echo esc_url( get_theme_option('social_myspace') ); ?>"></a></li>

					<?php endif; ?>

					<?php if ( get_theme_option('social_flickr') ) : ?>

					<!-- Flickr -->
					<li class="social_flickr"><a href="<?php echo esc_url( get_theme_option('social_flickr') ); ?>"></a></li>

					<?php endif; ?>

					<?php if ( get_theme_option('social_linkedin') ) : ?>

					<!-- Linkedin -->
					<li class="social_linkedin"><a href="<?php echo esc_url( get_theme_option('social_linkedin') ); ?>"></a></li>

					<?php endif; ?>

					<?php if ( get_theme_option('social_twitter') ) : ?>

					<!-- Twitter -->
					<li class="social_twitter"><a href="<?php echo esc_url( get_theme_option('social_twitter') ); ?>"></a></li>

					<?php endif; ?>

					<?php if ( get_theme_option('social_facebook') ) : ?>

					<!-- Facebook -->
					<li class="social_facebook"><a href="<?php echo esc_url( get_theme_option('social_facebook') ); ?>"></a></li>

					<?php endif; ?>

					<?php if ( get_theme_option('social_vimeo') ) : ?>

					<!-- Vimeo -->
					<li class="social_vimeo"><a href="<?php echo esc_url( get_theme_option('social_vimeo') ); ?>"></a></li>

					<?php endif; ?>

					<?php if ( get_theme_option('social_tumblr') ) : ?>

					<!-- Tumblr -->
					<li class="social_tumblr"><a href="<?php echo esc_url( get_theme_option('social_tumblr') ); ?>"></a></li>

					<?php endif; ?>

					<?php if ( get_theme_option('social_custom_1_icon') ) : ?>

					<!-- Custom #1 -->
					<li><a href="<?php echo esc_url( get_theme_option('social_custom_1') ); ?>"><img src="<?php echo esc_url( get_theme_option('social_custom_1_icon') ); ?>" alt="" /></a></li>

					<?php endif; ?>

					<?php if ( get_theme_option('social_custom_2_icon') ) : ?>

					<!-- Custom #2 -->
					<li><a href="<?php echo esc_url( get_theme_option('social_custom_2') ); ?>"><img src="<?php echo esc_url( get_theme_option('social_custom_2_icon') ); ?>" alt="" /></a></li>

					<?php endif; ?>

					<?php if ( get_theme_option('social_custom_3_icon') ) : ?>

					<!-- Custom #3 -->
					<li><a href="<?php echo esc_url( get_theme_option('social_custom_3') ); ?>"><img src="<?php echo esc_url( get_theme_option('social_custom_3_icon') ); ?>" alt="" /></a></li>

					<?php endif; ?>

				</ul>

				<?php if ( get_theme_option('contact_rss_note') ) : ?>

				<p><?php echo get_theme_option('contact_rss_note'); ?></p>

				<?php endif; ?>

				<div class="clr"></div>

			</div><!-- end div #social_links -->

			<div class="clr"></div>

		</div><!-- end div .section_inn -->

		<div class="clr"></div>


	</div><!-- end div #contact_section_botm_bg -->

	<div class="clr"></div>

</div>

<div class="clr"></div>