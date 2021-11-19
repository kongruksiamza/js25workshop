<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="strength.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Password Security</h1>
    <form id="myform" action="" method="get" accept-charset="utf-8">
    <input id="myPassword" type="password" name="" value="">
    </form>
    <script type="text/javascript">
        $(function(){
              $('#myPassword').strength();
        });
    </script>
  </body>
</html>
