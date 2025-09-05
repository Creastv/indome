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
	$slider = get_field('slider');
?>
</div>
<div class="slider-content<?php echo $className; ?>" id="<?php echo $id; ?>">
	<?php
		if(!empty($slider)):
	?>
	<div class="splide splide-full" role="group" aria-label="Splide slider">
		<div class="splide__track">
			<ul class="splide__list">
				<?php
					foreach($slider as $item):
					if(!empty($item['img']) || !empty($item['video'])):
				?>
				<li class="splide__slide">
					<div class="item">
						<?php
							if(!empty($item['video']))
							{
								echo '<video muted loop autoplay><source src="'.wp_get_attachment_url($item['video']).'" type="video/mp4">Your browser does not support the video tag.</video';
							}
							elseif(!empty($item['img']))
							{
								echo wp_get_attachment_image($item['img'], 'full');
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
	<?php
		endif;
	?>
</div>
<div class="container">