<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Super placeholder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <body>
    <br>
    <div class="container">
      <div class="form-group">
        <label for="usr">Name/E-mail:</label>
        <input type="email" class="form-control" id="usr" placeholder="ป้อนอีเมลของคุณ">
        </div>
        <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="ป้อนรหัสผ่าน">
      </div>
    </div>
    <script src="superplaceholder.js"></script>
    <script type="text/javascript">
      superplaceholder({
          el: document.getElementById('usr'),
          sentences: [ 'กรุณาป้อนอีเมลของท่าน', 'เพื่อลงทะเบียนเข้าใช้งาน'],
          options:{
            loop:true
          }
      });
    superplaceholder({
        el: document.getElementById('pwd'),
        sentences: [ 'กรุณาป้อนรหัสผ่านของคุณ', 'เพื่อลงทะเบียนเข้าใช้งาน','ป้อน 8-10 ตัวอักษร'],
        options:{
          loop:true
        }
    });
    </script>
  </body>
</html>
