<?php
//處理查詢資料的請求
include_once "base.php";

$str=$_GET['str'];

$db=new DB('students');
$query=$db->all([]," where name like '%$str%'");
// foreach($query as $v){
//     echo "<div>結果一：".$v['name']."-".$v['class_num']."-".$v['dept']."</div>";
// }
$data=[];

foreach($query as $q){
    $data[]=[
        '_id'=>$q['id'],
        '學號'=>$q['uni_id'],
        '班級座號'=>mb_substr($q['class_num'],3,2),
        '班級'=>mb_substr($q['class_num'],0,3),
        '姓名'=>$q['name'],
        '畢業國中'=>mb_substr($q['grad_at'],0,-2),
        '科別'=>$q['dept']
    ];
}

echo json_encode($data);
?>