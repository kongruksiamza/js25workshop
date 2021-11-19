<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Line Progressbar</title>
    <link href="jquery.lineProgressbar.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="jquery.lineProgressbar.js"></script>
    <style media="screen">
      body {
          background-color:#656D77;
          color:#fff;
          font-family:'Roboto';
      }
      .container {
          margin:150px auto;
          max-width:800px;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <h1>Skill Programming | Line Progressbar</h1>
        <h2>jQuery</h2>
        <div id="jq"></div>
        <h2>HTML5</h2>
        <div id="html"></div>
        <h2>CSS/CSS3</h2>
        <div id="css"></div>
  </div>
  <script type="text/javascript">
  $('#jq').LineProgressbar({
    percentage:90,
    radius: '3px',
    height: '20px',
  });
  $('#html').LineProgressbar({
    percentage:50,
    radius: '3px',
    height: '20px',
    fillBackgroundColor: '#DA4453'
  });
  $('#css').LineProgressbar({
    percentage:100,
    radius: '3px',
    height: '20px',
    fillBackgroundColor: 'green'
  });
  </script>
  </body>
</html>
