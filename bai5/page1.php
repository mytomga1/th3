<?php
session_start();
print_r($_SESSION);
?>

<html>
    <head></head>
    <body>
        <h1>Page 1</h1>
        <a href="/bai5/index.php">Home</a>
        <a href="/bai5/page2.php">Trang2</a>

        <?php if(isset($_COOKIE['test_cookie'])): ?>
            <h2><?= $_COOKIE['test_cookie']?></h2>
        <?php endif; ?>

    </body>
</html>