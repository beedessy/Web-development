<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LT Elegance Makeup |E-commerce Website</title>
    <link rel="shortcut icon" type="image/x-icon" href="Assets\favicon1.ico">
    
<!--Bootstrap CDN -->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/9ba144b9d8.js" crossorigin="anonymous"></script>
<!--slider-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="./JS/main.js"></script>
<!--Custom stylesheet -->
    <link rel="stylesheet" href="./CSS/style.css"/> 
</head>
<body>
    <!--header-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                  <div class="btn-group">
                     <button class="btn border dropdown-toggle my-md-4 my-2 text-white"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >USD</button>
                     <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">ERU</a>
                        <a href="#" class="dropdown-item">MRU</a>
                        <a href="#" class="dropdown-item">INR</a>
                        <a href="#" class="dropdown-item">CNY</a>
                     </div>
                  </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title text-white">LT Elegance Makeup</h2>
                </div>
                <div class="col-md-4 col-12 text-right">
                    <p class="my-md-4 header-links">
                        <a href="Sign in.php" class="px-2">Login</a>
                        <a href="logout.php" class="px-2">Logout</a>
              
                    </p>
                </div>
            </div>
        </div>
     <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="index.html"><span class="glyphicon glyphicon-home"></span>HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
             <div  class="nav-link">
  
    <div class="dropbtn" >SHOP
    <div class="fa fa-caret-down"></div>
    <div  class="dropdown-content">
      <a href="Face.php">FACE</a>
      <a href="Eyes.php">EYES</a>
      <a href="Lips.php">LIPS</a>
      <a href="MakeupBrush.html">MAKEUP BRUSH</a>
      <a href="Accessories.html">ACCESSORIES</a>
    </div>
           
            </li>
            <li class="nav-item">
            <a class="nav-link" href="FlashSales.php">FLASH SALES</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Tips.html">TIPS AND TRENDS</a>
            </li>
             <li class="nav-item">
            <a class="nav-link" href="ABOUT.html">ABOUT US</a>
            </li>
            </ul>
            </div>
            
             <a class="nav-link" href="cart.php" ><i class="fas fa-shopping-cart p-2"></i><span id="cart-item" class="label label-danger"></span></a>
            
            
            </nav>
     </div>
    </header>
    <!--/header-->
    

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
      <footer>
       <div class="footer-area footer-padding" style="background-color:#FFE4E1;">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="index.html"><img src="Assets\Website Logo2.png" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p></p>
                                </div>
                             </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                             <br>
                             <br>
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="index.html">Homepage</a></li>
                                    <li><a href="Tips.html"> Tips & Trends</a></li>
                                    <li><a href="FlashSales.html"> Flash Sales</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                             <br>
                             <br>
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href="#">Face</a></li>
                                    <li><a href="#">Eyes</a></li>
                                    <li><a href="#">Lips</a></li>
                                    <li><a href="#">Makeup Brush</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                             <br>
                             <br>
                                <h4>Support</h4>
                                <ul>
               
                                 <li><a href="#">Terms & Conditions</a></li>
                               
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                 <div class="col-xl-7 col-lg-7 col-md-7">
                     <div class="footer-copy-right">
                         <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                 </div>
                 </div>
          
                 </div>
             </div>
            </div>
        </div>
    </footer>
    <!-- Footer bottom -->
</body>

</html>