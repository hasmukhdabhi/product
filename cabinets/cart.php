<!DOCTYPE html>
<html lang="en">
<?php
include('db.php');
session_start();
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
            <div class="txt-heading">Shopping Cart</div>

            <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
            <?php
            if (isset($_SESSION["cart"])) {
                $total_quantity = 0;
                $total_price = 0;
            ?>
                <table class="tbl-cart" cellpadding="10" cellspacing="1">
                    <tbody>
                        <tr>
                            <th style="text-align:left;">Name</th>
                            <th style="text-align:left;">Price</th>
                            <th style="text-align:right;" width="5%">Image</th>
                            <th style="text-align:right;" width="10%">Quantity/th>
                            <th style="text-align:right;" width="10%">Total</th>
                            <!-- <th style="text-align:center;" width="5%">Remove</th> -->
                        </tr>
                        <?php
                        foreach ($_SESSION["cart"] as $item) {
                            $item_price = $item["quantity"] * $item["price"];
                        ?>
                            <tr>
                                <td><img src="<?php echo $item["img"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                                <td><?php echo $item["code"]; ?></td>
                                <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                                <td style="text-align:right;"><?php echo "$ " . $item["price"]; ?></td>
                                <td style="text-align:right;"><?php echo "$ " . number_format($item_price, 2); ?></td>
                                <td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
                            </tr>
                        <?php
                            $total_quantity += $item["quantity"];
                            $total_price += ($item["price"] * $item["quantity"]);





                            
                        }
                        ?>

                        <tr>
                            <td colspan="2" align="right">Total:</td>
                            <td align="right"><?php echo $total_quantity; ?></td>
                            <td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            <?php
            } else {
            ?>
                <div class="no-records">Your Cart is Empty</div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>