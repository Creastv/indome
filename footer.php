		<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$footer_txt = get_field('footer_txt', 'option')
		?>
		<footer class="fade-in">
			<div class="footer">
				<div class="container">
					<div class="grid-2_md-1">
						<div class="col">
							<div class="grid">
								<?php if(is_numeric($custom_logo_id)): ?>
								<div class="footer-logo">
									<p><?php echo wp_get_attachment_image($custom_logo_id, 'medium'); ?></p>
								</div>
								<?php endif; ?>
								<div class="footer-txt">
									<?php
										if(!empty($footer_txt))
										{
											echo apply_filters('the_content', $footer_txt);
										}
									?>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="grid-3_sm-2-right">
								<div class="col footer-menu">
									<p class="name"><?php echo wp_get_nav_menu_name('footer_menu_1'); ?></p>
									<?php
										if(has_nav_menu('footer_menu_1'))
										{
											wp_nav_menu(array('theme_location' => 'footer_menu_1', 'depth' => 1));
										}
									?>
								</div>
								<div class="col footer-menu">
									<p class="name"><?php echo wp_get_nav_menu_name('footer_menu_2'); ?></p>
									<?php
										if(has_nav_menu('footer_menu_2'))
										{
											wp_nav_menu(array('theme_location' => 'footer_menu_2', 'depth' => 1));
										}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-copyright">
						<div class="grid-2_sm-1">
							<div class="col">
								<p><?php printf(__('© %u Indome - Wszelkie prawa zastrzeżone.', 'indome'), date('Y')); ?></p>
							</div>
							<div class="col text-right">
								<p><?php echo get_the_privacy_policy_link(); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
