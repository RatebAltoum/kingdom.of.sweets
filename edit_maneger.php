<?php require'conn.php';
$id =$_GET["id"];
$user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM product WHERE id=$id"));
$user_our=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM product_our WHERE id=$id"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Maneger</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3b1384a103.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section class="edit_p">
    <section class="edit_maneger">
        <h1>Edit Most Popular</h1><hr>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="">Edit Name The Product: </label>
            <input type="text" name="name_Most" value="<?php echo $user['name'];?>" required>
            <label for="">Edit Discription:</label>
            <input type="text" name="discription_Most" value="<?php $user['discription'];?>" required>
            <label for="">Edit Price:</label>
            <input type="text" name="price_Most" value="<?php echo $user['price'];?>" required>
            <input type="file" value="Add Image" name="file_Most" required>
           <button type="submit" value="edit_most" name="submit" class="btn w-100 mb-5">Edit</button>
        </form>
    </section>
    <section class="edit_maneger">
        <h1>Edit Our Menu</h1><hr>
        <form action="" method="post" enctype="multipart/form-data">
        <label for="">Edit Name The Product: </label>
        <input type="text" name="name_our" value="<?php echo $user_our['name'];?>" required>
        <label for="">Edit Discription:</label>
        <input type="text" name="discription_our" value="<?php $user_our['discription'];?>" required>
        <label for="">Edit Price:</label>
        <input type="text" name="price_our" value="<?php echo $user_our['price'];?>" required>
        <input type="file" value="Add Image" name="file_our" required>
        <button type="submit" value="edit_our" name="submit" class="btn w-100 mb-5">Edit</button>
    </form>
    </section>
    
</section>
<section class="select">
<a href="select_maneger.php"> <input type="submit" value="Select" name="submit"></a>
</section>
</body>
</html>