<?php
    class ConNguoi{
        //khai báo property <=> đặc điểm của nhóm đối tượng
        public $name = 'T3H';
        protected $age = 15;
        private $address = 'Cầu giấy, Hà lội';

        // khai báo method <=> Hành động của nhóm đối tượng
        public function showName()
        {
            return 'Show Name';
        }

        protected function showAge()
        {
            return 'Show Age';
        }

        private function showAddress()
        {
            return 'Show Address';
        }
    }

    $object = new ConNguoi(); // khởi tạo 1 đối tượng
    echo $object->name;
    echo '<br>';
    echo $object->showName();