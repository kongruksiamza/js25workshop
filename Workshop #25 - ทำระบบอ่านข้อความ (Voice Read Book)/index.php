<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Voice Read Book</title>
  </head>
  <body>
    <div class="articulate-area">
      <button onclick="speak('article')">Speak All</button>
      <button onclick="pause()">Pause</button>
      <button onclick="resume()">Resume</button>
      <button onclick="stop()">Stop</button>
    </div>
    <br>
    <article>
          My friend , Hello World Tutorial JavaScript Workshop
    </article>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" charset="utf-8"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/915932/articulate.min.js" charset="utf-8"></script>
  <script type="text/javascript">
      function speak(obj) {
          $(obj).articulate('speak');
      };
      function pause() {
          $().articulate('pause');
      };

      function resume() {
          $().articulate('resume');
      };

      function stop() {
          $().articulate('stop');
      };
  </script>
</html>
