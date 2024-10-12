<?php
 require'conn.php';
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3b1384a103.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section  class="show_table container my-5">
        <h1> Most Popular:</h1>
        <table class="table table-striped table-bordered mb-2" >
             <tr>
                <th>id</th>
               <th>Name</th>
               <th>Discription</th>
               <th>Price</th>
               <th>Image</th>
               <th>Event</th>
             </tr>
             <?php
             $sql="SELECT * FROM product";
             $users=mysqli_query($conn,$sql);
             $counter=1;
             foreach($users as $user):
                ?>
             <tr>
                <td><?php echo $counter++ ;?></td>
                <td><?php echo $user["name"];?></td>
                <td><?php echo $user["discription"];?> </td>
                <td><?php echo $user["price"];?> </td>
                <td><img src="uploads/<?php echo $user["image"];?>" width="100" height="100"></td>
                <td>
                    <form action="" method="post">
                    <a href="edit_maneger.php?id=<?php echo $user['id'];?>"> <input type="button" value="Edit" name="submit" class="btn w-50"
                    ></a>
            
                    <button type="submit" name="delete_most"  value=<?php echo $user['id'];?> class="btn " >Delete</button>
                    </form>
                    
                </td>
             </tr>
             <?php endforeach?>

        </table>
        <form>
        <a href="add_maneger.php"><input type="button"  value="Add Product" class="btn mb-5"></a></form>
        <h1 class="mx-atuo">Our Menu:</h1>
        <table class="table table-striped table-bordered" >
            <tr>
               <th>id</th>
              <th>Name</th>
              <th>Discription</th>
              <th>Price</th>
              <th>Image</th>
              <th>Event</th>
            </tr>
            <?php
             $sql="SELECT * FROM product_our";
             $users=mysqli_query($conn,$sql);
             $counter=1;
             foreach($users as $user):
                ?>
             <tr>
                <td><?php echo $counter++ ;?></td>
                <td><?php echo $user["name"];?></td>
                <td><?php echo $user["discription"];?> </td>
                <td><?php echo $user["price"];?> </td>
                <td><img src="uploads/<?php echo $user["image"];?>" width="100" height="100"></td>
                <td>
                    <form action="" method="post">
                      <a href="edit_maneger.php?id=<?php echo $user['id'];?>"> <input type="button" value="Edit" name="submit" class="btn w-50"></a>
                      <button type="submit" name="delete_our"  value=<?php echo $user['id'];?>  class="btn " >Delete</button>
                    </form>
                </td>
             </tr>
             <?php endforeach?>
       </table>
       <form>
        <a href="add_maneger.php"><input type="buttom"  value="Add Product" class="btn mb-5"></a></form>
    </section>
</body>
</html>