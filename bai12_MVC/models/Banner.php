<?php
include_once 'models/Utilities.php';

class  Banner extends Utilities
{
    public function __construct()
    {
        $this->conn();
    }

    public function store($params){

        $title = $params['title'];

        $slug = $this->slugify($params['title']);

        // xử lý upload ảnh
        $target_dir = "Uploads/Img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = $target_file;
        // end xử lý upload ảnh

        $url = $params['url'];
        $target = $params['target'];
        $description = $params['description'];
        $type = $params['type'];
        $position = $params['position'];
        $is_active = $params['is_active'];
        // $is_active = !empty($params['is_active'])? 1:0; // sử dụng khi sài checkbox

        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');


        $sql = "INSERT INTO banners (title,slug,image,url,target,description,type,position,is_active,created_at,updated_at) 
                VALUES ('$title','$slug','$image','$url',$target,'$description',$type,$position,$is_active,'$created_at','$updated_at')";

        $this->conn->query($sql);
    }
}
