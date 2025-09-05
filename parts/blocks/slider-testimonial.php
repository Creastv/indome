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
	$slider = get_field('slider_testimonial');
	$title = get_field('title');
	$txt = get_field('txt');
	$paragraph = get_field('paragraph');
	if(empty($paragraph))
	{
		$paragraph = 'p';
	}
?>
</div>
<div class="slider-testimonial<?php echo $className; ?>" id="<?php echo $id; ?>">
	<div class="container">
		<div class="fade-up heading-content">
			<?php if(!empty($txt)): ?>
			<div class="grid-2_md-1-middle">
				<div class="col">
					<<?php echo $paragraph; ?> class="heading-title"><?php echo $title; ?></<?php echo $paragraph; ?>>
				</div>
				<div class="col">
					<div class="txt">
						<?php echo apply_filters('the_content', $txt); ?>
					</div>
				</div>
			</div>
			<?php else: ?>
			<p class="heading-title"><?php echo $title; ?></p>
			<?php endif; ?>
		</div>
		<?php
			if(!empty($slider)):
		?>
		<div class="fade-up splide splide-testimonial" role="group" aria-label="Splide slider testimonial">
			<div class="splide__track">
				<ul class="splide__list">
					<?php
						foreach($slider as $item):
						if(!empty($item['txt']) && $item['name']):
					?>
					<li class="splide__slide">
						<div class="testimonials-item">
							<div class="testimonials-entry">
								<?php
									if(is_numeric($item['img']))
									{
										echo wp_get_attachment_image($item['img'], 'medium');
									}
									else
									{
										echo '<img width="60" height="60" src="'.get_template_directory_uri().'/img/user_blank.webp" alt="">';
									}
									echo '<p><strong>'.$item['name'].'</strong></p>';
									if(!empty($item['type']))
									{
										echo '<p class="type">'.$item['type'].'</p>';
									}
								?>
							</div>	
							<div class="testimonials-txt">
								<?php
									if(is_numeric($item['count']))
									{
										echo '<p style="margin-bottom:8px;">';
											for($i = 0; $i < $item['count']; $i++)
											{
												echo '<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.81929 2.34025L10.9926 4.68692C11.1526 5.01359 11.5793 5.32692 11.9393 5.38692L14.066 5.74025C15.426 5.96692 15.746 6.95359 14.766 7.92692L13.1126 9.58025C12.8326 9.86025 12.6793 10.4003 12.766 10.7869L13.2393 12.8336C13.6126 14.4536 12.7526 15.0803 11.3193 14.2336L9.32596 13.0536C8.96596 12.8403 8.37262 12.8403 8.00596 13.0536L6.01262 14.2336C4.58596 15.0803 3.71929 14.4469 4.09262 12.8336L4.56596 10.7869C4.65262 10.4003 4.49929 9.86025 4.21929 9.58025L2.56595 7.92692C1.59262 6.95359 1.90596 5.96692 3.26596 5.74025L5.39262 5.38692C5.74595 5.32692 6.17262 5.01359 6.33262 4.68692L7.50596 2.34025C8.14596 1.06692 9.18596 1.06692 9.81929 2.34025Z" fill="#F9B700"/> </svg>';
											}
										echo '</p>';
									}
									echo apply_filters('the_content', $item['txt']);
								?>
							</div>
							<p class="testimonials-bottom">
								<?php
									if(is_numeric($item['logo']))
									{
										echo wp_get_attachment_image($item['logo'], 'medium');
									}
									if(!empty($item['date']))
									{
										echo '<span class="date">'.$item['date'].'</span>';
									}
								?>
							</p>
						</div>
					</li>
					<?php
						endif;
						endforeach;
					?>
				</ul>
			</div>
		</div>
		<?php
			endif;
		?>
	</div>
</div>
<div class="container">