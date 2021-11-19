<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Youtube LightBox</title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="videoLightning.js"></script>
  </head>
  <body>
    <span class="video-link" data-video-id="wAT9kXxLTTo">Data Science</span>
  </body>
   <script>
     $(function() {
         $(".video-link").jqueryVideoLightning({
         autoplay: 0,
         backdrop_color: "#000",
         backdrop_opacity: 0.6,
         });
     });
   </script>
</html>
