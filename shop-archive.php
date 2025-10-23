<?php
get_header();
if (have_posts()): while (have_posts()): the_post();
?>

        <div class="page-wraper">
            <div class="container">
                <?php if (!is_front_page()) : ?>
                    <div class="page-title-content">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                        <?php echo woocommerce_breadcrumb(); ?>

                    </div>
                <?php endif; ?>
                <div class="shop-wraper">
                    <aside class="shop-sidebar" role="complementary" aria-label="Filtry sklepu">
                        <div class="shop-sidebar-wraper">
                            <?php if (is_active_sidebar('shop-sidebar')) {
                                dynamic_sidebar('shop-sidebar');
                            } else {
                                echo '<p>Dodaj widgety do „Sklep – Sidebar” w Wygląd → Widgety.</p>';
                            } ?>
                        </div>
                    </aside>
                    <div class="shop-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;
get_footer();
?>