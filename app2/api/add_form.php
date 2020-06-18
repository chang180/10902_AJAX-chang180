<div id="insertBlock">
    <h3>新增學生資料</h3>
    <form id="create">
      <ul class="form-group">

        <li class="form-group col">
          <label for="name" class="col-6">姓名</label>
          <input type="text" name="name" id="name" class="col-6"></li>
        <li class="form-group">
          <label for="class_num">班級座號</label>
          <input type="text" name="class_num" id="class_num"></li>
        <li class="form-group">
          <label for="uni_id">學號</label>
          <input type="text" name="uni_id" id="uni_id"></li>
        <li class="form-group">
          <label for="birthday">生日</label>
          <input type="text" name="birthday" id="birthday"></li>
        <li class="form-group">
          <label for="nat_id">身份證字號</label>
          <input type="text" name="nat_id" id="nat_id"></li>
        <li class="form-group">
          <label for="addr">住址</label>
          <input type="text" name="addr" id="addr"></li>
        <li class="form-group">
          <label for="parent">父母</label>
          <input type="text" name="parent" id="parent"></li>
        <li class="form-group">
          <label for="tel">電話</label>
          <input type="text" name="tel" id="tel"></li>
        <li class="form-group">
          <label for="dept">科別</label>
          <input type="text" name="dept" id="dept"></li>
        <li class="form-group">
          <label for="grad_at">畢業國中</label>
          <input type="text" name="grad_at" id="grad_at"></li>
      </ul>
      <input type="button" value="確定新增" class="btn btn-secondary" onclick="create()">
      <input type="button" value="取消操作" class="btn btn-danger" onclick="cancel()">
    </form>
  </div>