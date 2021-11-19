<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Clock Picker</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap-clockpicker.css">
	</head>
	<body>
		<div class="container">
		<h1>Clock Picker</h1>
			<div class="input-group clockpicker">
			<input type="text" class="form-control" value="18:00">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-time"></span>
			</span>
			</div>
			<br>
			<div id="show"></div>
	</div>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-clockpicker.min.js"></script>
	<script type="text/javascript" src="assets/js/highlight.min.js"></script>
	<script type="text/javascript">
			$('.clockpicker').clockpicker({
			    align: 'left',//left right bottom top
			    donetext: 'Done'
			}).find('input').change(function(){
					$('#show').html(this.value);//ดึงค่าของเวลาที่เลือกมาแสดง
			});
	</script>
	</body>
</html>
