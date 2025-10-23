<?php
get_header();
if (have_posts()): while (have_posts()): the_post();
?>
		<div class="page-wraper">
			<div class="container">
				<?php if (!is_front_page()) : ?>
					<div class="page-title-content">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</div>
				<?php endif; ?>
				<?php the_content(); ?>
			</div>
		</div>
<?php
	endwhile;
endif;
get_footer();
?>