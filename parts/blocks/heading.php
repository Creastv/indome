<?php
	$className = null;
	$id = 'heading-'.$block['id'];
	if(!empty($block['anchor']))
	{
		$id = $block['anchor'];
	}
	if(!empty($block['className']))
	{
		$className = ' '.$block['className'];
	}
	$title = get_field('title');
	$txt = get_field('txt');
	$paragraph = get_field('paragraph');
	if(empty($paragraph))
	{
		$paragraph = 'p';
	}
?>
<div class="fade-up heading-content<?php echo $className; ?>" id="<?php echo $id; ?>">
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