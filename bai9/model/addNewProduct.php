<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = 'webshop';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //require 'dbconn.php';
    $productname = $_POST['productname'];
    $productslug = $_POST['productslug'];
    $productstock = $_POST['productstock'];
    $proPrice = $_POST['proPrice'];
    $prosale = $_POST['prosale'];
    $proposition = $_POST['proposition'];
    $category = $_POST['category'];
    $proUrl = $_POST['proUrl'];
    $proBrand = $_POST['proBrand'];
    $proVendor = $_POST['proVendor'];
    $usercreate = $_POST['usercreate'];
    $date = date('Y-m-d H:i:s');

    $sql_add = "INSERT INTO products (name, slug, stock,price,sale,position,is_active,is_hot,views,category_id,url,brand_id,vendor_id,user_id,created_at) 
            VALUES ('$productname','$productslug',".$productstock.",".$proPrice.",".$prosale.",".$proposition.",1,1,0,".$category.",'.$proUrl.',".$proBrand.",".$proVendor.",".$usercreate.",'$date')";

    //echo $sql_add;
    //die;

    if (mysqli_query($conn, $sql_add)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_add . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>