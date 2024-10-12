<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $conn=mysqli_connect("localhost","root","","sweets");

     if(isset($_POST["submit"])){
        if($_POST["submit"]=="Add_Most"){
            add_most();
        }
        elseif($_POST["submit"]=="add_our"){
            add_our();
        }
        elseif($_POST["submit"]=="edit_most"){
            edit_most();
        }
        elseif($_POST["submit"]=="edit_our"){
            edit_our();
        }
        
     }
     
     function add_most(){
        global $conn;
        $name_most=$_POST["name_Most"];
        $discription_Most=$_POST["discription_Most"];
        $price_Most=$_POST["price_Most"];


        $filename=$_FILES["file_Most"]["name_Most"];
        $tmpname=$_FILES["file_Most"]["tmp_name"];
        $newfilename=uniqid()."." .$filename;
        move_uploaded_file($tmpname,'uploads/'.$newfilename);

        $query="insert into product values ('','$name_most','$discription_Most','$price_Most','$newfilename')";
        mysqli_query($conn,$query);
        echo "<script>alert('user added successfully');document.location.href='add_maneger.php';</script>";
     }
    function add_our(){
        global $conn;
        $name_our=$_POST["name_our"];
        $discription_our=$_POST["discription_our"];
        $price_our=$_POST["price_our"];


        $filename=$_FILES["file_our"]["name_our"];
        $tmpname=$_FILES["file_our"]["tmp_name"];
        $newfilename=uniqid()."." .$filename;
        move_uploaded_file($tmpname,'uploads/'.$newfilename);
        $query="insert into product_our values ('','$name_our','$discription_our','$price_our','$newfilename')";
        mysqli_query($conn,$query);

        echo "<script>alert('user added successfully');document.location.href='add_maneger.php';</script>";
    }
    
    function edit_most(){
        global $conn;
        $id=$_GET["id"];
        $name_most=$_POST["name_Most"];
        $discription_Most=$_POST["discription_Most"];
        $price_Most=$_POST["price_Most"];

        if($_FILES["file_Most"]["erorr"] !=4){ 
        $filename=$_FILES["file_Most"]["name_Most"];
        $tmpname=$_FILES["file_Most"]["tmp_name"];
        $newfilename=uniqid()."." .$filename;
        move_uploaded_file($tmpname,'uploads/'.$newfilename);
        $query_img="update product set image='$newfilename' where id=$id";
        mysqli_query($conn,$query_img);
        }
        $query_name="update product set name=' $name_most' where id=$id";
        mysqli_query($conn,$query_name);
        $query_dis="update product set discription='$discription_Most' where id=$id";
        mysqli_query($conn,$query_dis);
        $query_price="update product set price='$price_Most' where id=$id";
        mysqli_query($conn,$query_price);
        echo "<script>alert('user edited successfully');document.location.href='select_maneger.php';</script>";
    }
    function edit_our(){
        global $conn;
        $id=$_GET["id"];
        $name_our=$_POST["name_our"];
        $discription_our=$_POST["discription_our"];
        $price_our=$_POST["price_our"];

        if($_FILES["file_our"]["erorr"] !=4){ 
        $filename=$_FILES["file_our"]["name_our"];
        $tmpname=$_FILES["file_our"]["tmp_name"];
        $newfilename=uniqid()."." .$filename;
        move_uploaded_file($tmpname,'uploads/'.$newfilename);
        $query_img="update product_our set image='$newfilename' where id=$id";
        mysqli_query($conn,$query_img);
        }
        $query_name="update product_our set name=' $name_our' where id=$id";
        mysqli_query($conn,$query_name);
        $query_dis="update product_our set discription='$discription_our' where id=$id";
        mysqli_query($conn,$query_dis);
        $query_price="update product_our set price='$price_our' where id=$id";
        mysqli_query($conn,$query_price);
        echo "<script>alert('user edited successfully');document.location.href='select_maneger.php';</script>";
    }
    if(isset($_POST["delete_most"])){
        delete_most();
     }
    function  delete_most(){
        global $conn;
        $id=$_POST["delete_most"];
        $query="DELETE FROM product WHERE id =$id";
        mysqli_query($conn,$query);
        echo "<script>alert('user delete successfully');document.location.href='select_maneger.php';</script>";
    }
    if(isset($_POST["delete_our"])){
        delete_our();
     }
    function  delete_our(){
        global $conn;
        $id=$_POST["delete_our"];
        $query="DELETE FROM product_our WHERE id =$id";
        mysqli_query($conn,$query);
        echo "<script>alert('user delete successfully');document.location.href='select_maneger.php';</script>";
    }
    if(isset($_POST["delete_order"])){
        delete_order();
     }
    function  delete_order(){
        global $conn;
        $id=$_POST["delete_order"];
        $query="DELETE FROM add_request WHERE id =$id";
        mysqli_query($conn,$query);
        echo "<script>alert('user delete successfully');document.location.href='add_order.php';</script>";
    }
    ?> 
</body>
</html>