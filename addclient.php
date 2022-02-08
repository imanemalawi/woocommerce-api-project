<?php
require 'authontification.php';
$Nom = $_POST['nom'];
$Prenom = $_POST['prenom'];
$email = $_POST['email'];
$data = [
    
    'email' => $email,
    'billing' => [
        'first_name' => $Nom,
        'last_name' => $Prenom,
        'email' => $email
    ]
];

$woocommerce->post('customers', $data);
header('Location: index.php');
?>