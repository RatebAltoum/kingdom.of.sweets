<?php require'conn.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Maneger</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3b1384a103.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section class="edit_p">
    <section class="edit_maneger">
        <h1>Add Most Popular</h1><hr>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="">Add Name The Product: </label>
            <input type="text" name="name_Most" id="" required>
            <label for="">Add Discription:</label>
            <input type="text" name="discription_Most" required>
            <label for="">Add Price:</label>
            <input type="text" name="price_Most" id="" required>
            <input type="file" value="Add Image" name="file_Most" required>
           <button type="submit" value="Add_Most" name="submit" class="btn w-100 mb-5">Add</button>
        </form>
    </section>
    <section class="edit_maneger">
        <h1>Add Our Menu</h1><hr>
        <form action="" method="post" enctype="multipart/form-data">
        <label for="">Add Name The Product: </label>
        <input type="text" name="name_our" id="" required>
        <label for="">Add Discription:</label>
        <input type="text" name="discription_our" required>
        <label for="">Add Price:</label>
        <input type="text" name="price_our" id="" required>
        <input type="file" value="Add Image" name="file_our" required>
        <button type="submit" value="add_our" name="submit" class="btn w-100 mb-5">Add</button>
    </form>
    </section>
    
</section>
<section class="select">
  <a href="select_maneger.php"> <input type="submit" value="Select" name="submit"></a>
</section>
</body>
</html>