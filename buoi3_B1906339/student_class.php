<?php
class student_class{
    public $name;
    public $mssv;
    public $birthday;
    public function __construct($name, $mssv, $birthday){
        $this->$mssv=$mssv;
        $this->name=$name;
        $this->birthday=$birthday;
    }
    public function __destruct(){
        echo "<br/>Huy sinh vien ";

    }
}
class student extends student_class{
    public $age;
    public function __construct($name, $mssv, $birthday, $age){
        parent::__construct($name, $mssv, $birthday);
        $this->age=$age;
    }
}
$sv=new student("Huynh Ngoc Phu","B1906339","01/08/2001", "21");
echo ("Name: {$sv->name}.<br/> Age:{$sv->age}.");
?>