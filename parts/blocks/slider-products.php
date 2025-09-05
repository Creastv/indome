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
	$slider = get_field('slider_products');
?>
</div>
<div class="fade-up slider-products<?php echo $className; ?>" id="<?php echo $id; ?>">
	<?php
		if(!empty($slider)):
	?>
	<div class="container">
		<div class="splide splide-products" role="group" aria-label="Splide slider products">
			<div class="splide__track">
				<ul class="splide__list">
					<?php
						foreach($slider as $item):
						if(!empty($item['img'])):
					?>
					<li class="splide__slide">
						<div class="item text-center">
							<div class="img">
								<?php echo wp_get_attachment_image($item['img'], 'medium'); ?>
							</div>
							<?php if(!empty($item['title'])): ?>
							<p class="name"><?php echo $item['title']; ?></p>
							<?php
								endif;
								if(!empty($item['btn'])):
							?>
							<p><a class="button" target="<?php echo $item['btn']['target']; ?>" href="<?php echo esc_url($item['btn']['url']); ?>"><?php echo $item['btn']['title']; ?></a></p>
							<?php
								endif;
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
		endif;
	?>
</div>
<div class="container">