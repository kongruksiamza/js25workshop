<html lang="en">
<head>
<title>Image Slider</title>
<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" /></head>
<link rel="stylesheet" href="style.css">
<body>
  <div class="slider-wrapper theme-default">
  <div id="slider" class="nivoSlider">
    <img src="images/n1.jpg" title="ตะวันตกดิน" />
    <img src="images/n2.jpg" title="ธรรมชาติอันสวยงาม" />
    <img src="images/n3.jpg" />
    <img src="images/n4.jpg"  />
    <img src="images/nemo.jpg"  />
  </div>
  </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.js"></script>
<script type="text/javascript">
      $(window).load(function() {
          $('#slider').nivoSlider();
      });
</script>
</body>
</html>
