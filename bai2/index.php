<?php
//    Sử Dụng dấu $ để đặt 1 tên biến trong php
//    $name = 'MYTOMGA';
//
//    $a =20;
//    $b =30;
//    $c = $a + $b;
//
//    echo $c;
//
//    $x = 'Hello World $c';
//    $y = "Hello World $c";
//
//    echo $x;
//    echo $y;

//if----------------------------------------
//    $x = 3;
//    $y = 2;
//
//    if($x ==$y){
//        echo 'x = y';
//    }
//
//    $y2 ='30';
//    if($x === $y2){
//        echo 'x = y2';
//    }

//    $a = true;
//    $b = false;
//
//    if($a){
//        echo 'A';
//    }else{
//        echo 'B';
//    }

//    if($x !== $y){
//        echo 'x khac y';
//    }else{
//        echo 'x bang y';
//    }
//
//    switch ($x){
//        case 1:
//            echo 'TH1';
//            break;
//        case 2:
//            echo 'TH2';
//            break;
//        case 3:
//            echo 'TH3';
//            break;
//        default:
//            echo 'ko Co';
//    }
//    $x = 4;
//    $y = 5;
//
//    if ($x == 4 && $y == 5){
//        echo 'ok';
//    }
//
//    if ($x == 4 || $y == 5){
//        echo 'ok';
//    }

// Array----------------------------------------
//    $arrProducts = array();
//    $arrProducts = [];
//
//    $arrNumber = [1, 2, 3, 4];
//
//    // hướng dẫn check lỗi
//    echo '<pre>'; // sử dụng echo '<pre>' khi in ra cho dễ nhìn
//    print_r($arrNumber); // có thể in ra chuỗi với mãng
//    var_dump($arrNumber); // giống thằng print_r như nó còn hiện thị kiểu dữ liệu.
//    die;

    $arrMobile = [
        [
            'id'    => 1,
            'name'  => 'Nokia',
            'price' =>200
        ],
        [
            'id'    => 2,
            'name'  => 'Iphone',
            'price' =>500
        ],
        [
            'id'    => 3,
            'name'  => 'Samsung',
            'price' =>350
        ]
    ];

//    echo '<pre>';
//    foreach ($arrMobile as $item){
//        print_r($item);
//    }


?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
        <title>Products</title>
    </head>
    <body>
        <h1>Danh Sách Mobile</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price ($)</th>
            </tr>

        <?php foreach ($arrMobile as $item): ?>
            <?php if($item['price'] >= 350): ?>
            <tr>
                <td><?= $item['id']?></td>
                <td><?php echo $item['name']?></td>
                <td><?= $item['price']?></td>
            </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </table>
    </body>
</html>