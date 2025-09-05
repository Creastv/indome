<?php
	/* Template name: Strona tekstowa */
	get_header(); 
	if(have_posts()): while(have_posts()): the_post();
?>
		<div class="page-wraper page-wraper-padding">
			<div class="container">
				<div class="heading-content" style="padding-top:0">
					<div class="grid-1">
						<div class="col">
							<h1 class="heading-title"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
				<?php the_content(); ?>
			</div>
		</div>
<?php 
	endwhile; endif;
	get_footer();
?>