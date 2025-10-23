<?php
// Wyłącz page title renderowany przez Woo/motyw na pojedynczym produkcie (jeśli motyw tego słucha)

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
