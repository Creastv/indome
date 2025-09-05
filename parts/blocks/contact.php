<?php
	$className = null;
	$id = 'contact-'.$block['id'];
	if(!empty($block['anchor']))
	{
		$id = $block['anchor'];
	}
	if(!empty($block['className']))
	{
		$className = ' '.$block['className'];
	}
	$txt = get_field('txt');
	$contact_form_1 = get_field('contact_form_1');
	$contact_form_2 = get_field('contact_form_2');
	$contact_form_3 = get_field('contact_form_3');
?>
<div class="fade-up contact-content<?php echo $className; ?>" id="<?php echo $id; ?>">
	<div class="grid-2_md-1-middle">
		<div class="col">
			<div class="txt">
				<?php
					if(!empty($txt))
					{
						echo apply_filters('the_content', $txt);
					}
					if(!empty($contact_form_2) || !empty($contact_form_3))
					{
						echo '<p>';
							if(!empty($contact_form_2))
							{
								echo '<a href="#form" class="button outline open-form" data-name="request_presentation">'.__('Zamów prezentację', 'indome').'</a>';
							}
							if(!empty($contact_form_3))
							{
								echo '<a style="margin-left:12px;" href="#form" class="button outline open-form" data-name="request_quote">'.__('Poproś o wycenę', 'indome').'</a>';
							}
						echo '</p>';
					}
				?>
			</div>
		</div>
		<div class="col">
			<?php if(!empty($contact_form_1)): ?>
			<div class="form-content" id="contact_form">
				<?php echo apply_filters('the_content', $contact_form_1); ?>
			</div>
			<?php
				endif;
				if(!empty($contact_form_2)):
			?>
			<div class="form-content" id="request_presentation" style="display:none;">
				<?php echo apply_filters('the_content', $contact_form_2); ?>
			</div>
			<?php
				endif;
				if(!empty($contact_form_3)):
			?>
			<div class="form-content" id="request_quote" style="display:none;">
				<?php echo apply_filters('the_content', $contact_form_3); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>