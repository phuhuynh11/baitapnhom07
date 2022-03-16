<?php
// gan bien cho mang a va b , c la tong cua 2 mang
$a = array (344,224,223,7737,9922,-828);
$b = array (-344,-324,123,773,-9922,828);
$c = array ();
$i = 0;

// dem so luong cua a va b
 $sla = count($a);
 $slb = count($b);
 // neu bang thi tien thanh cong 2 mang, khong bang thi bao loi
 if($sla == $slb){
    for($i=0;$i<$sla;$i++){
    $c[$i]=$a[$i]+$b[$i];
    }
 }
 else{
     echo "2 mang khong cung do dai";
 }
 // dung lenh foreach de in ra sau khi cong 2 mang
 foreach ($c as $value){
     echo "$value <br>";
 }
?>