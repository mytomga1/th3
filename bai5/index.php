<?php
    session_start();

    // tạo 1 session user rồi gáng giá trị mytomga
    $_SESSION['user'] = 'mytomga';
    $_SESSION['email'] = 'mr.mytomga@gmail.com';


    unset($_SESSION['user']);

    if(isset($_SESSION['user'])){
        print_r($_SESSION['user']);
    }

    if(isset($_SESSION['number'])){
        // Nếu Kt thấy thằng session[number] tồn tại mỗi lần refresh tăng 1
        $_SESSION['number'] +=1;
        print_r($_SESSION['number']);
    }else $_SESSION['number'] = 1;
?>

<html lang="">
    <head></head>

    <body>
        <h1>Bài 5</h1>
        <a href="/bai5/page1.php">Trang1</a><br>
        <a href="/bai5/page2.php">Trang2</a><br>
        <a href="/bai5/cookie.php">Test Cookie</a><br>
        <a href="/bai5/file.php">Test File </a><br>
    </body>
</html>
