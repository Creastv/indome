<?php
// Sidebar wyświetlany przez WooCommerce (get_sidebar('shop'))
if (is_active_sidebar('shop-sidebar')) : ?>
    <aside class="shop-sidebar" role="complementary" aria-label="Filtry sklepu">
        <?php dynamic_sidebar('shop-sidebar'); ?>
    </aside>
<?php endif;
