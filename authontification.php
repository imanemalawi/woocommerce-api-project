<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/imaneShop/',
    'ck_e2e5793a007bdab15e7b05ee8d344b3fc1818dfe',
    'cs_5104e0849d73d3db1432208a348f3e2a4a9ca286',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
?>