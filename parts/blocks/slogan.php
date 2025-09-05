<?php
	$className = null;
	$id = 'slogan-'.$block['id'];
	if(!empty($block['anchor']))
	{
		$id = $block['anchor'];
	}
	if(!empty($block['className']))
	{
		$className = ' '.$block['className'];
	}
	$slogan = get_field('slogan');
?>
<div class="fade-up slogan-content<?php echo $className; ?>" id="<?php echo $id; ?>">
	<?php
		if(isset($slogan[0]))
		{
			echo implode(' <span class="separator"></span> ', array_column($slogan, 'item'));
		}
	?>
</div>