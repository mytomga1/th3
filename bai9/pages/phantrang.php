<?php

    include('dbconn.php');

    $sosanphamhienthi = 20; // tạo 1 biến số sản phẩm hiển thị trong 1 trang bằng 20

    $trang = $_GET["trang"];
    settype($trang, "int"); // ép biến trang về kiểu int. mục đích tránh hack xâm nhập system thông qua sql sql injection qua _get.

    $phantrang = ($trang - 1) * $sosanphamhienthi;

    $qr = "SELECT * FROM products ORDER BY ID DESC LIMIT $phantrang, $sosanphamhienthi";

    echo $qr; //test

?>
