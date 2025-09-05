<?php
	$className = null;
	$id = 'banner-'.$block['id'];
	if(!empty($block['anchor']))
	{
		$id = $block['anchor'];
	}
	if(!empty($block['className']))
	{
		$className = ' '.$block['className'];
	}
	$txt = get_field('txt');
	$img = get_field('img');
	$btn = get_field('btn');
?>
</div>
<div class="fade-up banner-content<?php echo $className; ?>" id="<?php echo $id; ?>">
	<div class="container">
		<?php if(!empty($txt)): ?>
		<div class="grid-middle">
			<div class="col-5_lg-6_md-12">
				<div class="txt">
					<?php
						echo apply_filters('the_content', $txt);
						if(!empty($btn)):
					?>
					<p><a class="button" target="<?php echo $btn['target']; ?>" href="<?php echo esc_url($btn['url']); ?>"><?php echo $btn['title']; ?></a></p>
					<?php endif; ?>
				</div>
			</div>
			<?php if(!empty($img)): ?>
			<div class="col-7_lg-6_md-12">
				<div class="img">
					<?php echo wp_get_attachment_image($img, 'medium'); ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<div class="container">