<?php
require 'authontification.php';
$Nom = $_POST['name'];
$Prix = $_POST['regular_price'];
$data = [
    'name' => $Nom,
    'regular_price' => $Prix,
    'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
        ],
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
        ]
    ]
];

$woocommerce->post('products', $data);
header('Location: index.php');
?>