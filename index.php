<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Template</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <center><h1 class="text-info">imaneShop</h1></center>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <h2 class="sub-header">Liste des Produits</h2>
            <div class='table-responsive'>
                <?php
                    require 'authontification.php';
                    $products = json_encode($woocommerce->get('products'));
                    $orders = json_encode($woocommerce->get('orders'));
                    $customers = json_encode($woocommerce->get('customers'));
                    $products = json_decode($products, true);
                    $orders = json_decode( $orders,true);
                    $customers = json_decode( $customers,true);
                ?>
                <table id='myTable' class='table table-hover'>
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Total Sales</th>
                            <th>Picture</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                foreach($products as $product){
                                    echo "<tr><td>" . $product["id"]."</td>
                                        <td>" . $product["name"]."</td>
                                        <td>" . $product["status"]."</td>
                                        <td>" . $product["price"]."</td>
                                        <td>" . $product["total_sales"]."</td>
                                        <td><img height='50px' width='50px' src='".$product["images"][0]["src"]."'></td>
                                        <td><a class='btn btn-info' href='modifierprod.php?id=".$product['id']."'>Update</a></td>
                                        <td><a class='btn btn-warning' href='deleteprod.php?id=".$product['id']."'>Delete</a></td></tr>";
                                }
                            ?>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="ajouterproduit.html">Ajouter un produit</a>
            </div>
        </div>
        <div class="container">
        <h2 class="sub-header">Liste des Commandes</h2>
        <div class='table-responsive'>
            <table id='myTable' class='table table-hover'>
                <thead class="thead-dark">
                    <tr>
                        <th>Commande</th>
                        <th>Client</th>
                        <th>Addresse</th>
                        <th>Contact</th>
                        <th>Date Commande</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
foreach($orders as $details){
echo "<tr><td>" . $details["id"]."</td>
    <td>" . $details["billing"]["first_name"]." ".$details["billing"]["last_name"]."</td>
    <td>" . $details["shipping"]["address_1"]."</td>
    <td>" . $details["billing"]["phone"]."</td>
    <td>" . $details["date_created"]."</td>
    <td>" . $details["status"]."</td>
    <td><a class='btn btn-info' href='modifiercmd.php?id=".$product['id']."'>Update</a></td>
    <td><a class='btn btn-warning' href='deletecmd.php?id=".$product['id']."'>Delete</a></td>
    </tr>";
}
?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="ajoutercommande.html">Ajouter une commande</a>
        </div>
        <h2 class="sub-header">Liste des Clients</h2>
        <div class='table-responsive'>
            <table id='myTable' class='table table-hover'>
                <thead class="thead-dark">
                    <tr>
                        <th>Username</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>email</th>
                        <th>Pays</th>
                        <th>Ville</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
foreach($customers as $details){
echo "<tr><td>" . $details["username"]."</td>
    <td>" .$details["billing"]["last_name"]."</td>
    <td>" . $details["billing"]["first_name"]."</td>
    <td>" . $details["billing"]["email"]."</td>
    <td>" . $details["billing"]["country"]."</td>
    <td>" . $details["billing"]["city"]."</td>
    <td><a class='btn btn-info' href='modifierclt.php?id=".$product['id']."'>Update</a></td>
    <td><a class='btn btn-warning' href='deleteclt.php?id=".$product['id']."'>Delete</a></td>
    </tr>";
}
?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="ajouterclient.html">Ajouter un client</a>
        </div>
    </div>