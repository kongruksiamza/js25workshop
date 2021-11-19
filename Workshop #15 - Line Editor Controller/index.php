<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Line Editor</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="editor.css" type="text/css" rel="stylesheet"/>
		<script src="editor.js"></script>
	</head>
	<body>
		<h2 align="center"><b>Line Control Tutorial</b></h2>
			<div class="container">
			<div class="row">
				<div class="col-lg-12 nopadding">
				<textarea id="txtEditor"></textarea>
				</div>
		</div>
	</div>
	<script>
			$(document).ready(function() {
					$("#txtEditor").Editor();
				});
		</script>
	</body>
</html>
