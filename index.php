<?php
<?php

class Student
{
    // gán giá trị mặc định cho thuộc tính $name
    public $name = 'họ tên';


    public static function demo1()
    {
        echo '<br>' . __METHOD__;
        // không được sử dụng $this trong phương thức tĩnh
        // nếu sử dụng thì bị lỗi
    }

    // phương thức bình thường
    public function demo2()
    {
        echo '<br>' . __METHOD__;
        echo '<br>' . $this->name;
    }
}
  // khởi tạo đối tượng từ class
$tuan = new Student();
$tuan -> demo2();
// ưu điểm có thể gọi đến màn không
// cần khởi tạo đối tượng
// cách gọi Tenclass::Tenphuongthuctinh
Student::demo1();
