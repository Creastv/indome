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
	$slider = get_field('gallery');
?>
<div class="fade-up slider-gallery<?php echo $className; ?>" id="<?php echo $id; ?>">
	<?php
		if(!empty($slider)):
	?>
	<div class="splide splide-gallery" role="group" aria-label="Splide slider gallery">
		<div class="splide__track">
			<ul class="splide__list">
				<?php
					foreach($slider as $item):
				?>
				<li class="splide__slide">
					<div class="img">
						<?php echo wp_get_attachment_image($item, 'medium'); ?>
					</div>
				</li>
				<?php
					endforeach;
				?>
			</ul>
		</div>
	</div>
	<?php
		endif;
	?>
</div>