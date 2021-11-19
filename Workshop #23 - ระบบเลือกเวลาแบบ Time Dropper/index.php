<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Time Dropper</title>
    <link href="timedropper.css" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="timedropper.js"></script>
  </head>
  <body>
    <h1>Time Dropper</h1>
    <input type="text" id="alarm"/>
    <script>
          $("#alarm").timeDropper();
    </script>
  </body>
</html>
