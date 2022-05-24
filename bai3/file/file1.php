<?php

echo 'FILE 1';
// dùng require để triệu tập 1 file php
require 'file2.php';

// cũng có sử dụng include triệu tập 1 file php.
// Tuy nhiên thằng require khi gặp trường hợp lỗi hay ko tìm dc file nó sẽ hiện thị lỗi và dừng các đoạn code ở phía dưới
//include 'file3.php';
//include 'file3.php';

//Chúng ta có thể sử dụng include_once trong trường hợp vô tình khi khai báo trùng lặp
include_once 'file3.php';
include_once 'file3.php';

echo 'test error';
