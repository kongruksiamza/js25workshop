<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>แผนผัง</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="jquery.orgchart.js" charset="utf-8"></script>
    <link href="jquery.orgchart.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
          <div id="orgChart"></div>
  </body>
  <script type="text/javascript">
    var testData = [
      {id: 1, name: 'ผู้บริหาร', parent: 0},
      {id: 2, name: 'รองผู้บริหาร 1', parent: 1},
      {id: 3, name: 'รองผู้บริหาร 2', parent: 1},
      {id: 4, name: 'รองผู้บริหาร 3', parent: 1}
    ];
    $(function(){
            org_chart = $('#orgChart').orgChart({
            data: testData,
            showControls: true,
            allowEdit: true,
            onAddNode: function(node){
              org_chart.newNode(node.data.id);
            },
            onDeleteNode: function(node){
                org_chart.deleteNode(node.data.id);
            },
            onClickNode: function(node){
                console.log('Clicked node '+node.data.name);
            }
          });
      });
  </script>
</html>
