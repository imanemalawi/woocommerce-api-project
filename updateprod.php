<?php 
require 'authontification.php';

$id = $_GET['id'];
$name = $_POST['name'];
$regular_price = $_POST['regular_price'];
$data = [
    'name' => $name,
    'regular_price' => $regular_price
];
echo $id;
$woocommerce->put('products/'.$id, $data);
header('Location: index.php'); 
?>