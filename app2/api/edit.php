<!-- 編輯資料用的表單 -->
<?php
include_once "base.php";
$db = new DB("students");

$id = $_GET['id'];

$row = $db->find($id);
// var_dump($row);

?>

<div id="editBlock">
    <h3>編輯學生資料</h3>
    <form id="edit">
        <ul class="form-group">

            <li class="form-group col">
                <label for="name" class="col-6">姓名</label>
                <input type="text" name="name" id="name" value="<?= $row['name']; ?>" class="col-6"></li>
            <li class="form-group">
                <label for="class_num">班級座號</label>
                <input type="text" name="class_num" id="class_num" value="<?= $row['class_num']; ?>"></li>
            <li class="form-group">
                <label for="uni_id">學號</label>
                <input type="text" name="uni_id" id="uni_id" value="<?= $row['uni_id']; ?>"></li>
            <li class="form-group">
                <label for="birthday">生日</label>
                <input type="text" name="birthday" id="birthday" value="<?= $row['birthday']; ?>"></li>
            <li class="form-group">
                <label for="nat_id">身份證字號</label>
                <input type="text" name="nat_id" id="nat_id" value="<?= $row['nat_id']; ?>"></li>
            <li class="form-group">
                <label for="addr">住址</label>
                <input type="text" name="addr" id="addr" value="<?= $row['addr']; ?>"></li>
            <li class="form-group">
                <label for="parent">父母</label>
                <input type="text" name="parent" id="parent" value="<?= $row['parent']; ?>"></li>
            <li class="form-group">
                <label for="tel">電話</label>
                <input type="text" name="tel" id="tel" value="<?= $row['tel']; ?>"></li>
            <li class="form-group">
                <label for="dept">科別</label>
                <input type="text" name="dept" id="dept" value="<?= $row['dept']; ?>"></li>
            <li class="form-group">
                <label for="grad_at">畢業國中</label>
                <input type="text" name="grad_at" id="grad_at" value="<?= $row['grad_at']; ?>"></li>
                <input type="hidden" name="id" id="id" value="<?= $row['id']; ?>"></li>
        </ul>
        <div class="btn-group">
        	<input type="button" value="確定修改" class="btn btn-secondary" onclick="update()">
        	<input type="button" value="取消操作" class="btn btn-secondary" onclick="cancel()">
        </div>
    </form>
</div>

<?php

?>