<?php
	$className = null;
	$id = 'slider-'.$block['id'];
	if(!empty($block['anchor']))
	{
		$id = $block['anchor'];
	}
	if(!empty($block['className']))
	{
		$className = ' '.$block['className'];
	}
	$slider = get_field('slider_box');
?>
</div>
<div class="slider-box<?php echo $className; ?>" id="<?php echo $id; ?>">
	<div class="container">
		<?php
			if(!empty($slider)):
		?>
		<div class="fade-up">
			<div class="splide splide-box" role="group" aria-label="Splide slider box">
				<div class="splide__track">
					<ul class="splide__list">
						<?php
							foreach($slider as $item):
							if(!empty($item['txt']) && !empty($item['title'])):
						?>
						<li class="splide__slide">
							<div class="item">
								<?php
									if(!empty($item['icon']))
									{
										echo '<div class="icon">'.wp_get_attachment_image($item['icon'], 'medium').'</div>';
									}
									echo '<p class="name">'.$item['title'].'</p>';
									echo apply_filters('the_content', $item['txt']);
									if(!empty($item['long_txt']))
									{
										echo '<p onclick="openModal(\'modal-box-'.sanitize_title($item['title']).'\')" class="open-modal"><svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="37" height="38" rx="18.5" fill="white"/> <path d="M14.25 19H18.5M18.5 19H22.75M18.5 19V23.25M18.5 19V14.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></p>';
									}
								?>
							</div>
						</li>
						<?php
							endif;
							endforeach;
						?>
					</ul>
				</div>
			</div>
		</div>
		<?php
			foreach($slider as $item):
			if(!empty($item['title']) && !empty($item['long_txt'])):
		?>
		<div id="modal-box-<?php echo sanitize_title($item['title']); ?>" class="jw-modal">
			<div class="jw-modal-body">
				<?php echo apply_filters('the_content', $item['long_txt']); ?>
			</div>
		</div>
		<?php
			endif;
			endforeach;
			endif;
		?>
	</div>
</div>
<div class="container">