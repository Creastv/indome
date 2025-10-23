<?php


// Wypisz sidebar tylko na listach produktów
add_action('woocommerce_sidebar', function () {
    if (is_shop() || is_product_category() || is_product_tag()) {
        echo '<aside class="shop-sidebar" role="complementary" aria-label="Filtry sklepu">';
        if (is_active_sidebar('shop-sidebar')) {
            dynamic_sidebar('shop-sidebar');
        } else {
            echo '<p>Dodaj widgety do „Sklep – Sidebar” w Wygląd → Widgety.</p>';
        }
        echo '</aside>';
    }
}, 10);
// Przenieś tytuł produktu nad cenę i odczep domyślne miejsce
add_action('init', function () {
    // nowe miejsce: tuż nad ceną (przed price na priorytecie 10)
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 9);
}, 99);


function my_is_woo_context()
{
    return function_exists('is_woocommerce') && (
        is_woocommerce()           // sklep, produkt, kategorie/tagi produktów (w wielu motywach)
        || is_cart()               // koszyk
        || is_checkout()           // kasa
        || is_account_page()       // moje konto
        || is_shop()               // strona sklepu
        || is_product()            // pojedynczy produkt
        || is_product_category()   // kategoria produktu
        || is_product_tag()        // tag produktu
        || is_wc_endpoint_url()    // każdy endpoint Woocommerce (np. /order-received, /edit-account)
    );
}


add_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
