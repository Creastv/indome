<?php
get_header();
if (have_posts()): while (have_posts()): the_post();
?>
		<div class="page-wraper">
			<div class="container">

				<div class="page-title-content">
					<?php if (!is_product()) : ?>
						<h1 class="page-title"><?php the_title(); ?></h1>
					<?php endif; ?>
					<?php echo woocommerce_breadcrumb(); ?>
				</div>

				<div class="page-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
<?php
	endwhile;
endif;
get_footer();
?>