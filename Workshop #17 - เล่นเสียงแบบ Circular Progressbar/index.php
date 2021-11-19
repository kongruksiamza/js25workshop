<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sound Progressbar</title>
    <link rel="stylesheet" href="progres-bar.css">
    <style>
        .mediPlayer { float:left; margin:20px;}
    </style>
  </head>
  <body>
    <h1>Circular Audio Player</h1>
    <div class="mediPlayer">
    <audio class="listen" src="sounds/piano.mp3"></audio>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="player.js"></script>
    <script>
        $(document).ready(function () {
            $('.mediPlayer').mediaPlayer();
        });
    </script>
  </body>
</html>
