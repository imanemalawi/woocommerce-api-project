<?php
require 'authontification.php';
$Nom = $_POST['nomclient'];
$Prenom = $_POST['prenomclient'];
$Contact = $_POST['contact'];
$data = [
    'billing' => [
        'first_name' => $Nom,
        'last_name' => $Prenom,
        'phone' => $Contact
    ]
];

$woocommerce->post('orders', $data);
header('Location: index.php');
?>