<?php
session_start();
print_r($_SESSION);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Page 1</h1>
        <a href="/bai5/index.php">Home</a>
        <a href="/bai5/page2.php">Trang2</a>

        <?php if(isset($_COOKIE['test_cookie'])): ?>
            <h2><?= $_COOKIE['test_cookie']?></h2>
        <?php endif; ?>

    </body>
</html>