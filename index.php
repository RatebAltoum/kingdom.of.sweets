<?php require'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kingdom of Sweets</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3b1384a103.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section class="header">
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
        <section class="order"> 
          <div class="search1">
            <form action="">
                <input type="text" name="input"  id="showsearch" placeholder="Search products"   >
            </form> 
                <img src="image/index.jpg" onmouseenter="onse()" onclick="offse()">
          </div>
         <a href="add_order.php"> <img src="image/chobenk.jpg" alt=""></a>
        </section>
        <div class="text">
            <h1>Kingdom of Sweets</h1>
            <p>We believe that all desserts are a cultural story worth celebrating Come on this dining adventure to experience the magic of the East with every bite</p>  
        </div>
    </section>
    <section class="most_Popular_Products" >
        <h1 >Most Popular Products</h1>
        <div class="card-p">
        <?php
             $sql="SELECT * FROM product";
             $users=mysqli_query($conn,$sql);
             foreach($users as $user):
        ?>
        <div class="card">
           <a href="#ii" id="ii"><img src="uploads/<?php echo $user["image"];?>" name="file_add_cart" style="width:100%"></a> 
            <div class="container">
             <br> <h4><b name="name_add_cart"><?php echo $user["name"];?></b></h4><br>
             <a href="#iii" id="iii"> <p><?php echo $user["discription"];?></p></a>
             <h5 name="price_add_cart"><?php echo $user["price"]." "."L.S";?> </h5>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i><br><br>
              <button name="submit" type="submit" value="add_cart"  class="btn btn-outline-light w-100 mb-1">Add Cart</button>
            </div>
          </div>
          <?php endforeach?>
             </div>
    </section>
    <section class="our-menu">
        <h1>Our Menu</h1>
          <div class="sweets" >
          <div class="card-p">
          <?php
             $sqli="SELECT * FROM product_our";
             $products_our=mysqli_query($conn,$sqli);
             foreach($products_our as $product_our):
           ?>
            <div class="card ">
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
    <section class="about_us">
      <div class="about_img"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
      <div class="about_text">
        <h1>Welcome to <span> Kingdom of Sweets</h1>
        <p>At The Kingdom of Sweets , we offer you a world of authentic Arabic sweets, meticulously prepared with the finest ingredients.

          We believe that Arabic sweets are not just sweet dishes, but a rich cultural heritage that reflects the authentic art of Arabic cuisine.
          
          We offer you a wide variety of Arabic sweets, from knafeh and baklava to maamoul and ghraybeh, all prepared using traditional methods, with a modern touch that gives them a unique flavor.
          
          We believe that Arabic sweets are a symbol of Arabic hospitality, and we want to share this wonderful experience with you.
          
          Discover the world of Arabic sweets with us!</p>
      </div>
    </section>
    <section class="team_header">
      <h1>Our Team Sweet Baker</h1>
     </section>
     <section class="team">
      <div class="img_team">
        <img src="image/team/team-1.jpg" alt="">
        <div class="img_team_text">
          <div class="img_team_text_c">
          <h3>Ebrahim Saleh</h3>
          <div class="social_team">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
        </div>
      </div>
        </div>
      </div>
      <div class="img_team">
        <img src="image/team/team-2.jpg" alt="">
        <div class="img_team_text">
          <div class="img_team_text_c">
          <h3>Shahed Hasan</h3>
          <div class="social_team">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
        </div>
          </div>
        </div>
      </div>
      <div class="img_team">
        <img src="image/team/team-3.jpg" alt="">
        <div class="img_team_text">
          <div class="img_team_text_c">
          <h3>Anwar Daka</h3>
          <div class="social_team">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
        </div>
      </div>
        </div>
      </div>
      <div class="img_team">
        <img src="image/team/team-4.jpg" alt="">
        <div class="img_team_text">
          <div class="img_team_text_c">
          <h3>Rateb Altoum</h3>
          <div class="social_team">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
        </div>
      </div>
        </div>
      </div>
     </section>
    <section class="contactus">
      <div class="row">
         <div class="information">
             <div> <i class="fa fa-home"></i>
             <span><h5>SYRIA </h5></span>
             <SPan><p>SYRIA,DAMASCUS ALHALBONY </p></SPan>
             </div>
             <div><i class="fa fa-phone"></i>
                 <span><h5>(+963)0992086261 </h5></span>
                 <SPan><p>Monday To Saturday,10AM TO 6PM</p></SPan></div>
             <div><i class="fa fa-envelope"></i>
                 <span><h5>ratebaltoum@gmail.com</h5></span>
                 <SPan><p>Email Us To Help You</p></SPan></div>
         </div>
      </div>
      <div class="commant-blogs">
         <h3>Write Your Comment</h3>
         <form action="">
             <input type="text " placeholder="Enter Your Name">
             <input type="email" name="" id="" placeholder="Enter Your Email">
             <textarea  rows="5"></textarea>
             <button class="btn mt-4">Post Comment</button>
         </form>
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
</htmle