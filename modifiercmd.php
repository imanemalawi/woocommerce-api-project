<?php 
require  'authontification.php';

    $id = $_GET['id'];
    $order = json_encode($woocommerce->get('orders/'.$id));
    $order = json_decode($order, true);
?>
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
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <h1>Modifier une commands</h1>
            <br>

        <form action="updatecmd.php?id=<?php echo $id ?>" method="POST">
            <div class="form-group">
                <label for="name">Nom de client</label>
                <input type="text" class="form-control" name="nomclient" placeholder="nomclient" value="<?php echo $order["billing"]["last_name"]; ?>">
            </div>
            <div class="form-group">
                <label for="name">Prenom de client</label>
                <input type="text" class="form-control" name="prenomclient" placeholder="prenomclient" value="<?php echo $order["billing"]["first_name"]; ?>">
            </div>
            <div class="form-group">
                <label for="regular_price">contact</label>
                <input type="text" class="form-control" name="contact" placeholder="contact" value="<?php echo $order["billing"]["phone"]; ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>