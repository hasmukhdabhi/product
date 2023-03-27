<!DOCTYPE html>
<html lang="en">
<?php
// include('db.php');
session_start();
include('db.php');
?>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/product/cabinets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/scss/_reboot.scss"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' id='woo-variation-swatches-css' href='/product/cabinets/css/frontend.min.css?ver=1673543920' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-general-css' href='/product/cabinets/assets/css/woocommerce.css?ver=7.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='urna-template-css' href='/product/cabinets/urna/css/template.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='/product/cabinets/urna/css/bootstrap.css?ver=3.3.7' type='text/css' media='all' />

</head>

<body>
    <div class="container mt-5">
        <!-- navbar menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../cabinets/index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">View Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkout.php">Check Out</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- navbar menu -->
        <div id="shopping-cart">

            <h1>Shopping Cart</h1>
            <?php
            // $sql = "INSERT INTO products (name, price, quantity) VALUES ($name,$price,$quantity)";

            // // Execute the query
            // if (mysqli_query($conn, $sql)) {
            //     echo "New record inserted successfully";
            // } else {
            //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            // }

            // // Close the database connection
            // mysqli_close($conn);
            ?>
            <?php if (empty($_SESSION['cart'])) : ?>
                <p>Your cart is empty</p>
            <?php else : ?>
                <table>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove Item</th>

                    </tr>
                    <?php foreach ($_SESSION['cart'] as $product) : ?>
                        <tr>
                            <td><img src="/product/cabinets/img/1-5.png" alt="<?php echo $product['name'] ?? ''; ?>" height="50"></td>
                            <td><?php echo $product['name'] ?? ''; ?></td>
                            <td><?php echo '$' . ($product['price'] ?? ''); ?></td>
                            <td><?php echo $product['quantity'] ?? ''; ?></td>
                            <td><?php echo '$' .  ($product['price'] ? (int)$product['price'] : 0) * ($product['quantity'] ? (int)$product['quantity'] : 0); ?></td>
                            <td><a href="index.php?action=deleted&id=<?php echo $product['product_id'] ?? ''; ?>"><span class="text-danger">Remove Item</span></a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <!-- <p>Total: <?php echo '$' . array_sum(array_column($_SESSION['cart'], 'total')); ?></p> -->
            <?php endif; ?>

            <p><a href="index.php">Continue Shopping</a></p>
        </div>
    </div>
</body>

</html>