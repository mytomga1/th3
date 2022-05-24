<?php
    setcookie('test_cookie', 'mytomga', time() +60);

    //cách xoá cookie ta set cho nó rỗng và set time - cũng là 1 cách
    //setcookie('test_cookie', '', time() -60);
?>

<html lang="">
    <head></head>
    <body>
        <h1>Cookie Page</h1>
        <?php if(isset($_COOKIE['test_cookie'])): ?>
        <h2><?= $_COOKIE['test_cookie']?></h2>
        <?php endif; ?>

    </body>
</html>