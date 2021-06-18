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
      <a href="MakeupBrush.php">MAKEUP BRUSH</a>
      <a href="Accessories.php">ACCESSORIES</a>
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
      <div class="col-lg-10">

        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h2 class="text-center text-info m-0">Products in your cart!</h2>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
               <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'config.php';
                $stmt = $conn->prepare('SELECT * FROM cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                <td><?= $row['product_name'] ?></td>
                <td>
                  <span>Rs</span>&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <td>
                  <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                </td>
                <td><span>Rs</span>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                <td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="index.html" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><span>Rs</span>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                <td>
                  <a  href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
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
       <div class="footer-area footer-padding" style="background-color:#ffa89e;">
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
                                    <li><a href="FlashSales.php"> Flash Sales</a></li>
                                    
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
                                    <li><a href="Face.php">Face</a></li>
                                    <li><a href="Eyes.php">Eyes</a></li>
                                    <li><a href="Lips.php">Lips</a></li>
                                    <li><a href="MakeupBrush.php">Makeup Brush</a></li>
                                    <li><a href="Accessories.php">Accessories</a></li>
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
                             
                                 <li><a href="https://www.nibusinessinfo.co.uk/content/sample-website-terms-and-conditions-use">Terms & Conditions</a></li>
                                 
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                     <div class="footer-copy-left">
                         <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                 </div>
             </div>
            </div>
        </div>
    </footer>
      <!-- Footer bottom -->
</body>

</html>