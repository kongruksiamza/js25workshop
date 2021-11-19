<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Date Dropper</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="datedropper.css" rel="stylesheet" type="text/css" />
    <script src="datedropper.js"></script>
  </head>
  <body>
    <br>
    <div class="container">
      <label>Select Date :<label>
      <input type="text" class="form-control" data-format="d-m-Y" data-theme="mytheme" class: 'pick-lg'/>
    </div>
    <script type="text/javascript">
        $('input').dateDropper();
    </script>
  </body>
</html>
