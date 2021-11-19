<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Summernote</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
  </head>
  <body>
    <br>
    <div class="container">
        <div id="summernote">Hello KongRuksiam Studio</div>
        <input type="button" class="btn btn-success" value="แสดงความคิดเห็น">
        <div id="content"></div>
    </div>
    <script type="text/javascript">
          $(document).ready(function() {
            $('#summernote').summernote({
              height:300,
              focus:true
            });
            $('input').on('click',function(e){
                var markupStr = $('#summernote').summernote('code');
                $('#content').append(markupStr);
                console.log(markupStr);
            });
          });
    </script>
  </body>
</html>
