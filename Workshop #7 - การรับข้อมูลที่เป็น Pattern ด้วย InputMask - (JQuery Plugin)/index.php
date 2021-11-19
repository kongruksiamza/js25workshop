<html lang="en">
<head>
  <title>JQuery Input Pattern</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script type="text/javascript">
    jQuery(function ($) {
      $('#idpeople').mask("9-9999-99999-99-9");
      $('#student').mask("S-999");
      $('#emp').mask("EMP-999");
      $('#tel').mask("099-999-9999");
      $('#card').mask("9999 9999 9999 9999");
    });
</script>
</head>
<body>
<div class="container">
  <h2>กรุณาป้อนข้อมูลให้ครบ</h2>
  <form>
    <div class="form-group">
      <label for="id">เลขประจำตัวประชาชน</label>
      <input type="text" class="form-control" id="idpeople" name="id">
    </div>
    <div class="form-group">
      <label for="id">รหัสนักเรียน</label>
      <input type="text" class="form-control" id="student">
    </div>
    <div class="form-group">
      <label for="id">รหัสพนักงาน</label>
      <input type="text" class="form-control" id="emp">
    </div>
    <div class="form-group">
      <label for="id">เบอร์โทรศัพท์</label>
      <input type="text" class="form-control" id="tel">
    </div>
    <div class="form-group">
      <label for="id">Master Card</label>
      <input type="text" class="form-control" id="card">
    </div>
    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </form>
</div>
</body>
</html>
