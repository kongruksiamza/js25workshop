<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Table Data</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='excelexportjs.js'></script>
  </head>
  <body>
    <div class="container">
    <h1>Export Data to Excel</h1>
    <table id='tableData' class="table table-bordered">
    <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
    </tr>
        <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
        </tr>
        <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
        </tr>
        <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
        </tr>
        <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Italy</td>
        </tr>
        </table>
        <button id='DLtoExcel'>Export Html Table to Excel</button>
        </div>
        </br>
        <script type="text/javascript">
            var $btnDLtoExcel = $('#DLtoExcel');
            $btnDLtoExcel.on('click', function () {
              $("#tableData").excelexportjs({
                  containerid: "tableData"
                  ,datatype: 'table'
              });
            });
        </script>
  </body>
</html>
