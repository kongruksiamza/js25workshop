<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>International Telephone Input</title>
  <link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="build/css/demo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="build/js/intlTelInput.js"></script>
</head>
<body>
  <h1>International Telephone Input</h1>
  <form>
      <input id="phone" type="tel">
      <button type="submit">บันทึก</button>
  </form>
</body>
<script>
    $("#phone").intlTelInput({
      utilsScript: "build/js/utils.js"
    });
  </script>
</html>
