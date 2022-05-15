<?php
    if(isset($_FILES['fileToUpload'])){
//        print_r($_FILES['fileToUpload']);
        echo '<pre>';
        $file_name = $_FILES['fileToUpload']['name'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_type = $_FILES['fileToUpload']['type'];

        // sử dụng hàm move_uploaded_file() để update 1 file lên server
        move_uploaded_file($file_tmp, "img/".$file_name);

    }else{
        echo 'no img';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <body>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

    </body>
</html>

