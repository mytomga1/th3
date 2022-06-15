<?php

    #region [VD tính chất đóng gói]

    class ConNguoi{
        //khai báo property <=> đặc điểm của nhóm đối tượng
        public $name;
        protected $age = 15;
        private $address = 'Cầu giấy, Hà lội';

        // khai báo method <=> Hành động của nhóm đối tượng
        public function showName($name)
        {
            return '[ConNguoi] Show Name : '.$name;
        }

        // sử dụng 1 hàm trung gian để có thể truy suất từ hàm showAge có phạm vi protected
        public function showAgePublic()
        {
            $result = $this->showAge().' = '.$this->age;
            return $result;
        }

        protected function showAge()
        {
            return '[ConNguoi] Show Age';
        }

        private function showAddress()
        {
            return '[ConNguoi] Show Address';
        }

        // Dây là 1 hàm khơi tạo
        // mục đích chính của hàm khởi tạo sử dụng tạo khai báo và set mặc định các giá trị ban đầu khi khởi chạy chương trình.
        public function __construct($name = '')
        {
            $this->name = $name;
            echo 'Dây là 1 hàm khơi tạo'.'<br>';

        }

        // Dây là 1 hàm huỷ
        public function __destruct()
        {
            // TODO: Implement __destruct() method.
            echo 'Dây là 1 hàm huỷ'.'<br>';
        }

//        public function __get($key)
//        {
//            //kiểm tra xem trong class có tồn tại thuộc tính không
//            if (property_exists($this, $key)) {
//                //tiến hành lấy giá trị
//                return $this->$key;
//            } else {
//                die('Không tồn tại thuộc tính');
//            }
//        }

//        public function __set($key, $value)
//        {
//            die('Phương thức __set() được gọi');
//        }


    }

      $objectA = new ConNguoi('objNameT3H'); // khởi tạo 1 đối tượng
      echo $objectA->name.'<br>';
//    echo $objectA->showName().'<br>';
//    // ko thể gọi dc method showAge() vì method này đang để phạm vi là protected
//    // $object->showAge();
//
//    // để có thể gọi tới thuộc tính/ phương thức protected và private bằng cách khai báo sử dụng 1 hàm trung gian để có thể gọi đến hàm có phạm vì protected và private
//    echo $objectA->showAgePublic().'<br>';

    #endregion

    #region [VD Kế Thừa]

    class SinhVien extends ConNguoi
    {
        public function showStudent()
        {
            return '[SinhVien] Hiển Thị Sinh Viên'.'<br>';
        }

        public function showAgeStudent()
        {
           return $this->showAge().'<br>';
        }

//        public function showName($name)
//        {
//            return 'hiện thị tên từ lớp con'.'<br>';
//        }
    }

    $objectB = new SinhVien();
    echo $objectB->showStudent().'[SinhVien]';
    echo $objectB->showAgeStudent().'[SinhVien]';
    echo $objectB->showName('trung').'<br>';
//    echo $objectB->test;
    #endregion
