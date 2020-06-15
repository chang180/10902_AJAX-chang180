<?php

include "base.php";

$class=$_GET['class'];
$db= new DB("students");
$students=$db->q("SELECT name,class_num,dept,nat_id FROM students WHERE substring(`class_num`,1,3)='$class'");

foreach($students as $stu){
    echo "<div class='stu'>".$stu['name']."</div>";
}


?>