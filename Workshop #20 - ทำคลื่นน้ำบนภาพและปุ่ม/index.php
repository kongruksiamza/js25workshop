<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ripple</title>
    <link rel="stylesheet" href="css/jquery.rippleria.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/jquery.rippleria.js"></script>
  </head>
  <body>
      <button type="button" name="button" data-rippleria>KONG RUKSIAM</button>
      <button type="button" name="button">OK</button><br><br>
      <a href="#" id="rippleria"><img src="n1.jpg" alt=""></a>

      <script type="text/javascript">
      $('#rippleria').rippleria({
          duration: 400,
          easing: 'ease-in',
      });
      </script>
  </body>
</html>
