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
	$img = get_field('img');
	$txt = get_field('txt');
	$item = get_field('item');
	$btn = get_field('btn');
?>
</div>
<div class="fade-up banner-txt-content<?php echo $className; ?>" id="<?php echo $id; ?>"<?php if(is_numeric($img)): ?> style="background-image:url(<?php echo wp_get_attachment_image_url($img, 'full'); ?>);background-position:center;background-size:cover;background-repeat:no-repeat;"<?php endif; ?>>
	<div class="container">
		<div class="txt text-center">
			<?php
				if(!empty($txt))
				{
					echo apply_filters('the_content', $txt);
				}
				if(isset($item))
				{
					echo '<ul class="check-list">';
					foreach($item as $it)
					{
						echo '<li>'.$it['txt'].'</li>';
					}
					echo '</ul>';
				}
				if(!empty($btn)):
			?>
			<p><a class="button" target="<?php echo $btn['target']; ?>" href="<?php echo esc_url($btn['url']); ?>"><?php echo $btn['title']; ?></a></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="container">