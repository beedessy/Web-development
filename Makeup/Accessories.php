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
    <header style="background-color:#f07384;">
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
    
    <!--Main Section-->
    <main>
  <div class="container">
  <div id="message"></div>
   <br>
  <video id="video1" width=100% height="450" controls  controls autoplay style="object-fit:cover;">
  <source src="Accessoriesvideo.mp4" type="video/mp4">
  </video>
  <br>
  <br>
  <h1 style="text-align:center" > Makeup Accessories </h1>
  <h2 style="text-align:center" > Bags & Box  </h2>
  <br>

<div class="row">
   <?php
   include 'config.php';
   $stmt = $conn->prepare("SELECT * FROM accessoriesproduct where id BETWEEN 1 and 8");
   $stmt->execute();
   $result=$stmt->get_result();
   while($row =$result->fetch_assoc()):
   ?>
      <div class="col-sm-6 col-md-2 col-lg-3 mb-4">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><span>Rs</span>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn" style="background-color:#F08080"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

<br>
<br>
<h2 style="text-align:center" > Mirrors  </h2>
  <br>

 <div class="container">
  <div id="message"></div>
  <div class="row">
   <?php
   include 'config.php';
   $stmt = $conn->prepare("SELECT * FROM accessoriesproduct where id BETWEEN 9 and 16");
   $stmt->execute();
   $result=$stmt->get_result();
   while($row =$result->fetch_assoc()):
   ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><span>Rs</span>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn" style="background-color:#F08080"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
 </div>
  
    </main>
    
    <!--/Main Section-->
    <footer>
       <div class="footer-area footer-padding" style="background-color:#f0a5af;">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  </script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
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

</body>

</html>