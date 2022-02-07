<?php 
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;
$url = 'http://localhost/imaneShop/'; //$_POST['url'];
$ck = 'ck_52297d764035eda11d54b82651727791909ba750'; //$_POST['ck'];
$cs = 'cs_c95eadcd6e9eb5e637f599a82231ef63ee64bb67'; //$_POST['cs'];
$woocommerce = new Client($url,$ck,$cs,
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true
    ]
);
$id = $_GET['id'];
$name = $_POST['name'];
$regular_price = $_POST['regular_price'];
$data = [
    'name' => $name,
    'regular_price' => $regular_price
];
echo $id;
$woocommerce->put('products/'.$id, $data);
header('Location: product.php'); 
?>