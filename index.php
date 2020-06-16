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
    public function $name(){
       echo $name => $this;
}

}
