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
	$slider = get_field('slider_txt');
?>
<div class="fade-up slider-txt<?php echo $className; ?>" id="<?php echo $id; ?>">
	<?php
		if(!empty($slider)):
	?>
	<div class="splide splide-txt" role="group" aria-label="Splide slider box">
		<div class="splide__track">
			<ul class="splide__list">
				<?php
					foreach($slider as $item):
					if(!empty($item['txt'])):
				?>
				<li class="splide__slide">
					<div class="item">
						<div class="grid-2_md-1-middle">
							<div class="col">
								<div class="img">
									<?php
										if($item['img'])
										{
											echo wp_get_attachment_image($item['img'], 'medium');
										}
										if($item['cover'])
										{
											echo '<div class="cover">'.wp_get_attachment_image($item['cover'], 'medium').'</div>';
										}
									?>
								</div>
							</div>
							<div class="col">
								<div class="txt">
									<?php echo apply_filters('the_content', $item['txt']); ?>
								</div>
							</div>
						</div>
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