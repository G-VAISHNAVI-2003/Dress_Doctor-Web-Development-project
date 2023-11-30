<!---connect file-->
<?php   
include('includes/connect.php');
include('functions/common_function.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ECOMMERCE </title>
        <!---Bootstrap css link---->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
        crossorigin="anonymous">
        <!----Font awesome link---->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
         integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!---css file-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15630.230621558929!2d78.17743953736236!3d11.65483668226559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babf1efbd93651d%3A0xfcae63b6e7eeb6!2sAmmapet%2C%20Salem%2C%20Tamil%20Nadu%20636003!5e0!3m2!1sen!2sin!4v1670062614165!5m2!1sen!2sin" 
      width="600" height="450" 
      style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
       <!--navbar-->
       <div class="container-fluid p-0" >
        <!--first child--->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo2.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="1index.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup>
            <?php
          cart_item();
          ?>
          </sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:
            <?php
            total_cart_price();
            ?> /-
          </a>
        </li>
        
      <form class="d-flex"  action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!---<button class="btn btn-outline-light" type="submit">Search</button>-->
        <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
<!--calling cart function-->
<?php 
cart();
?>

<!--second child-->
<nav class="navbar navbar-expand-lg  navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
  <li class="nav-item">
    <a  class="nav-link" href="#">welcome Guest</a>
  </li>
  <li class="nav-item">
    <a  class="nav-link" href="#">Login</a>
  </li>
</ul>
</nav>
<!--third child--->
<div class="bg-light">
  <h3 class="text-center">TAILORS WORLD</h3>
  <p class="text-center">More designs,more Products to explore!</p>
</div>

<!---fourth child-->
<div class="row px-3">
  <div class="col-md-10">
    <!--products--->
    <div class="row">
      <!--fetching products-->
      <?php
      //calling functions
      getproducts();
      get_uniquecategories();
      get_uniquebrands();
  //    $ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  
      ?>
     
      <!---row end-->
    </div>
    <!---col end--->
  </div>
    <!---sidenav--->
    <div class="col-md-2 bg-secondary p-0 ">
      <!----Brands to be dispalyed-->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h4>DELIVERY BRANDS</h4></a>
        </li>

        <?php 

getbrands();
       // $select_brands="Select * from brands";
       // $result_brands=mysqli_query($con,$select_brands); 
        //$row_data=mysqli_fetch_assoc($result_brands);
        //echo $row_data['brand_title'];
      //  while($row_data=mysqli_fetch_assoc($result_brands)){
      //    $brand_title=$row_data['brand_title'];
        //  $brand_id=$row_data['brand_id'];
        //  echo "  <li class='nav-item'>
        //  <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
       // </li>";
       // }
        
        ?>
        
      </ul>
      <!--Categories to be displayed-->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h4>CATEGORIES</h4></a>
        </li>
        <?php 
        getcategories();
     //   $select_categories="Select * from categories";
     //   $result_categories=mysqli_query($con,$select_categories); 
        //$row_data=mysqli_fetch_assoc($result_brands);
        //echo $row_data['brand_title'];
    //    while($row_data=mysqli_fetch_assoc($result_categories)){
     //     $category_title=$row_data['category_title'];
    //      $category_id=$row_data['category_id'];
   //       echo "  <li class='nav-item'>
   //       <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
   //     </li>";
     //
    //   }
        
        ?>
        
      </ul>
    
  </div>
</div>

<!---last child-->
<!--include footer-->
<?php 
include("./includes/footer.php")
?>


       </div>
        





    <!---Bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>
  </body>
        </body>
    </html>