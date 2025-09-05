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
	$slider = get_field('slider_offer');
?>
<div class="fade-up slider-offer<?php echo $className; ?>" id="<?php echo $id; ?>">
	<?php
		if(!empty($slider)):
	?>
	<div class="splide splide-offer" role="group" aria-label="Splide slider offer">
		<div class="splide__track">
			<ul class="splide__list">
				<?php
					foreach($slider as $item):
					if(!empty($item['img'])):
				?>
				<li class="splide__slide">
					<div class="item">
						<?php echo wp_get_attachment_image($item['img'], 'full'); ?>
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