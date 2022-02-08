<?php 
require 'authontification.php';
echo json_encode($woocommerce->get('orders')); ?>