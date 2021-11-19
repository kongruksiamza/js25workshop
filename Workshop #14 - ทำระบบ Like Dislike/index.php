<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Like Dislike</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/like-dislike.js"></script>
    <style>
      body {
        background-color: #222;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Like & Dislike System</h1>
      <div class="rating" id="rating">
        <button class="btn btn-success like">Like</button>
        <span class="likes">0</span>
        <button class="btn btn-danger dislike">Dislike</button>
        <span class="dislikes">0</span>
    </div>
</div>
  </body>
  <script type="text/javascript">
      $('#rating').likeDislike({
        click: function (value, l,d, event) {
            var likes = $(this.element).find('.likes');
            var dislikes =  $(this.element).find('.dislikes');
            likes.text(parseInt(likes.text()) + l);
            dislikes.text(parseInt(dislikes.text()) + d);
        }
    });
  </script>
</html>
