<?php

    //Mở file chế dô đọc ghi w+
    $file = fopen('hello', 'w+');

    // dùng hàm fwrite dùng để ghi nội dung vào file
    fwrite($file, 'Test ghi nội dung vào file ');
    //sau khi ghi nội dung xong thì dùng hàm fclose để đóng file
    fclose($file);

    // đọc nội dung file
    $file2 =fopen('readme.txt', 'r+');

    while ((!feof($file2))){ // sự dụng !feof ở đây có nghĩa là kt
        echo fgets($file2).'<br>';
    }

    fclose($file2);

    // đọc từng ký tự với hàm file
    if(file_exists('readme')){
        $file2 =fopen('readme.txt', 'r+');

        while (!feof($file2)){
            echo fgetc($file2).'<br>';
        }

        fclose($file2);
    }