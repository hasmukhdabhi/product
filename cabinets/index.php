<!DOCTYPE html>
<html lang="en">

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
  <?php
  // session_start(); // Start the session

  // // Add the selected product to the cart
  // $_SESSION['cart'][] = array(
  //   'id' => $_POST['id'],
  //   'name' => $_POST['name'],
  //   'price' => $_POST['price'],
  //   'img' => $_POST['img'],
  //   'quantity' => $_POST['quantity'],
  //   'total' => $_POST['total']
  // );

  // // Redirect the user to the cart page
  // header('Location: cart.php');
  // exit();


  session_start();

  // check if product is already in the cart, if not add to cart
  if (isset($_SESSION['cart'][$_POST['name']])) {
    $_SESSION['cart'][$_POST['name']]['quantity'] += $_POST['quantity'];
  } else {
    $_SESSION['cart'][$_POST['name']] = array(
      'name' => $_POST['name'],
      'price' => $_POST['price'],
      'image' => $_POST['image'],
      'quantity' => $_POST['quantity'],
      'total' => $_POST['price'] * $_POST['quantity']
    );
  }

  // redirect to cart page
  header("Location: cart.php");
  exit();
  ?>




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
    <div class="row">
      <div class="col-sm-6">
        <img width="500" height="500" src="/product/cabinets/img/1-5.png" class="attachment-woocommerce_single size-woocommerce_single" alt="1-5" loading="lazy" />
      </div>
      <div class="col-sm-6">
        <h2>W930 – Shaker II Maple Natural Wall Cabinet</h2>
        <div class="product-rating">
          <div class="star-rating">
            <span class="heading">User Rating</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </div>
        </div>
        <p class="price"><span class="product-Price-amount amount">
            <bdi><span class="product-Price-currencySymbol">$</span>100.00</bdi></span> –
          <span class="product-Price-amount amount"><bdi>
              <span class="product-Price-currencySymbol">$</span>3,000.00</bdi></span>
        </p>
        <div class="woocommerce-product-details__short-description">
          <div class="product attribute overview">
            <div class="value">9″ wide, 30.125″ high, 12″ deep (2 shelves)</div>
          </div>
          <div class="product attribute sku">
            <div class="value">DSMN100-W930-II</div>
          </div>
        </div>

        <form class="variations_form cart wvs-loaded" action="cart.php" method="post" enctype="multipart/form-data" id="AddToCartForm">
          <!-- <input type="hidden" name="product_id" value="1"> -->
          <div>
            <label>
              <input type="radio" name="alignment" value="left" id="left-radio">
              Left
            </label>
            <label>
              <input type="radio" name="alignment" value="right" id="right-radio">
              Right
            </label>
          </div>
          <button type="button" id="show-price-btn">Show Price</button>
          <button id="clear-price-btn" style="display: none;">Clear Price</button>
          <div class="woocommerce-variation-price" style="display: none;">
            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>100.00</bdi></span></span>
          </div>

          <p id="message"></p>

          <div class="quantity">
            <div class="number-input">
              <button type="button" onclick="decreaseValue()">-</button>
              <input type="text" id="number" value="0">
              <button type="button" onclick="increaseValue()">+</button>
            </div>

            <button type="button" class="button add-to-cart" name="add_to_cart">
              <span>Add to cart</span>
              <div class="cart">
                <svg viewBox="0 0 36 26">
                  <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"></polyline>
                  <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
              </div>
            </button>

            <button type="button" class="button buy-now">
              <span>Buy now</span>
              <div class="cart">
                <svg viewBox="0 0 36 26">
                  <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5"></polyline>
                  <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                </svg>
              </div>
            </button>
            <input type="hidden" name="add-to-cart" value="1">
            <input type="hidden" name="product_id" value="1">
            <input type="hidden" name="variation_id" class="variation_id" value="1">
          </div>
        </form>


        <div class="product-meta">
          <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>
        </div>
        <div class="posted_in">

          <span class="posted_in">Categories: <a href="#" rel="tag">Base Cabinets</a>,
            <a href="#" rel="tag">Tall Cabinets</a>,
            <a href="#" rel="tag">Trim &amp;
              Details</a>,
            <a href="#" rel="tag">Vanity Cabinets</a>, <a href="#" rel="tag">Wall Cabinets</a>
          </span>
        </div>
        <div class="tagged_as">

          <span class="tagged_as">Tags: <a href="#" rel="tag">Blind Walls</a>, <a href="#" rel="tag">Bookcase Walls</a>,
            <a href="#" rel="tag">Corner Walls</a>, <a href="#" rel="tag">Microwave Walls</a>, <a href="#" rel="tag">Open
              Shelf Walls</a>,
            <a href="#" rel="tag">Peninsula Walls</a>,
            <a href="#" rel="tag">Refrigerator
              Walls</a>, <a href="#" rel="tag">Specialty
              Walls</a>, <a href="#" rel="tag">Standard Walls 12″- 27″ High</a>, <a href="#" rel="tag">Standard
              Walls
              30"- 42" High</a>, <a href="#" rel="tag">Tower Drawer Walls</a>, <a href="#" rel="tag">Wine Walls</a>, <a href="#" rel="tag">Wood Hoods</a></span>
        </div>

        <div class="urna-social-links"><a class="share-facebook urna-facebook" title="W930 – Shaker II Maple Natural Wall Cabinet" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="share-twitter urna-twitter" href="#" title="W930+%26%238211%3B+Shaker+II+Maple+Natural+Wall+Cabinet" target="_blank"><i class="fa fa-twitter"></i></a><a class="share-linkedin urna-linkedin" href="#" title="W930+%26%238211%3B+Shaker+II+Maple+Natural+Wall+Cabinet" target="_blank"><i class="fa fa-linkedin"></i></a><a class="share-email urna-email" href="#" title="W930 – Shaker II Maple Natural Wall Cabinet" target="_blank"><i class="fa fa-envelope-o"></i></a>
        </div>
      </div>
    </div>
    <ul class="tabs wc-tabs nav nav-tabs" role="tablist">
      <li class="additional_information_tab active" id="tbay-wc-tab-additional_information" role="tab" aria-controls="tab-additional_information">
        <a href="#">Additional information</a>
      </li>
      <li class="reviews_tab" id="tbay-wc-tab-reviews" role="tab" aria-controls="tab-reviews">
        <a href="#">Reviews (0)</a>
      </li>
      <li class="custom_tab_tab" id="tbay-wc-tab-custom_tab" role="tab" aria-controls="tab-custom_tab">
        <a href="#">Shipping</a>
      </li>
    </ul>


  </div>

</body>


<script>
  // left and right button
  const leftRadio = document.getElementById('left-radio');
  const rightRadio = document.getElementById('right-radio');
  const showPriceBtn = document.getElementById('show-price-btn');
  const clearPriceBtn = document.getElementById('clear-price-btn');
  const message = document.getElementById('message');
  const price = document.querySelector('.woocommerce-variation-price');

  leftRadio.addEventListener('click', () => {
    price.style.float = "left";
  });

  rightRadio.addEventListener('click', () => {
    price.style.float = "right";
  });

  showPriceBtn.addEventListener('click', () => {
    // price.style.display = "block";
    message.textContent = "The price is $100.00";
    showPriceBtn.style.display = "none";
    clearPriceBtn.style.display = "block";
  });

  clearPriceBtn.addEventListener('click', () => {
    price.style.display = "none";
    message.textContent = "";
    showPriceBtn.style.display = "block";
    clearPriceBtn.style.display = "none";
  });

  // Get the "Add to cart" and "Buy now" buttons
  const addToCartButton = document.querySelector('.add-to-cart');
  const buyNowButton = document.querySelector('.button.buy-now');

  // Add click event listeners to the buttons
  addToCartButton.addEventListener('click', () => {
    // Navigate to the cart page
    window.location.href = 'cart.php';
  });

  buyNowButton.addEventListener('click', () => {
    // Navigate to the checkout page
    window.location.href = 'checkout.php';
  });

  // click button +,-
  function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById('number').value = value < 0 ? 0 : value;
  }

  function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
  }
</script>



</html>