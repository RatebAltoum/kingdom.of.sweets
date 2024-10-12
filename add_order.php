<?php require'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3b1384a103.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<section >
        <nav>
         <a href="#">   <img src="image/index.jpg" alt=""></a>
         <div class="nav-link" id="nav-link" >
        <i class="fa-solid fa-xmark" onclick="showmenu()" style="color: white;cursor: pointer;"></i>
               <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html" >ABOUT</a></li>
                    <li><a href="add_order.php">ORDER</a></li>
                    <li><a href="contact_as.html">CONTANC AS</a></li>
                    <li><a href="sign_in.php">ADMINISTRATOR LOGIN</a></li>
                </ul>
         </div>
           <i class="fa-solid fa-bars" onclick="hidemenu()" style="color:white;cursor: pointer;"></i> 
        </nav>
            
        </section>
    <section class="order_p">
        <div class="add_order">
            <form action="">
                <input type="text" name="input" id="search-item" placeholder="Search products" onkeyup="search()">
            </form> 
            <div class="order">
            <?php
             $sql="SELECT * FROM add_request";
             $users=mysqli_query($conn,$sql);
             foreach($users as $user):
                ?>
                <div class="porduct_order">
                    <img src="uploads/<?php echo $user["image"];?>"  alt="">
                    <div class="text_order">
                        <h2 ><?php echo $user["name"];?></h2>
                        <h3><?php echo $user["price"];?></h3>
                    </div>
                    <div class="delete" >
                      <form action="" method="post">
                        <button type="submit" class="btn btn-outline-dark " name="delete_order" value=<?php echo $user['id'];?> >Delete</button>
                        </form>
                        
                    </div>
                </div>
                <?php endforeach?>
                <form action=""><a href="#add_order" style="text-decoration: none;" class="btn w-100 mt-2 ">
                Add Product
                </a></form>
                <form action="" method="post">
               <button class="btn w-100 mt-2 " >Buy</button>
                </form>
            </div>
        </div>
    </section>
    <section class="our-menu">
        <h1>OUR MENU</h1>
          <div class="sweets" >
          <div class="card-p">
          <?php
             $sqli="SELECT * FROM product_our";
             $products_our=mysqli_query($conn,$sqli);
             foreach($products_our as $product_our):
           ?>
            <div class="card" id="add_order">
               <a href="#i" id="i"> <img src="uploads/<?php echo $product_our["image"];?>" name="file_add_cart" style="width:100%"></a>
                <div class="container">
                 <br> <h4><b name="name_add_cart"><?php echo $product_our["name"];?></b></h4><br>
                 <a href="#iiii" id="iiii"> <p><?php echo $product_our["discription"];?></p></a>
                 <h5 name="price_add_cart"><?php echo $product_our["price"]." "."L.S";?> </h5>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i><br><br>
                  <button name="submit" type="submit" value="add_cart"  class="btn btn-outline-light w-100 mb-1">Add Cart</button>
                </div>
              </div>
              <?php endforeach?>
             </div>
        </div>
    </section>
    <section class="footer">
      
      <div class="footer_working_hours">
       <h3>WORKING HOURS</h3>
       <p>Monday - Friday: 08:00 am – 08:30 pm</p>
       <p>Saturday: 10:00 am – 16:30 pm</p>
       <p>Sunday: 10:00 am – 16:30 pm</p>
      </div>
      <div class="footer_about_us">
       <a href=""><img src="image/index.jpg" alt=""></a>
       <P>"Arabic sweets: A journey through time, reminding us of the beauty of heritage, and delighting us with the sweetness of memories"</P>
       <p>FOLLOW US Sweet moments are saved as memories.</p>
       <div class="social">
         <h3><i class="fa fa-facebook"></i></h3>
         <h3><i class="fa fa-linkedin"></i></h3>
         <h3><i class="fa fa-twitter"></i></h3>
         <h3><i class="fa fa-youtube"></i></h3>
     </div>
      </div>
     <div class="footer_email">
       <h3>SUBSCRIBE</h3>
       <p>Get latest updates and offers</p>
       <form action="">
         <input type="text" placeholder="Email">
         <input type="submit" value="send" style="border: 1px solid white;">
       </form>
     </div>
     
     
    </section>
    <section class="copyright">
       <h6>Copyright ©2024 All rights reserved |This website is made  <i class="fa fa-heart-o" style="color:#e99002;"></i>  by Rateb Altoum</h6>
    </section>
   
     <script src="programming.js"></script>
</body>
</html