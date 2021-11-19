<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Water Ball Loading</title>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="createWaterBall-jquery.js"></script>
	</head>
	<body>
		<div class="loading" style="width: 200px;height: 200px;margin-left:570px"></div>
	</body>
	<script type="text/javascript">
			var loadingEle = $('.loading');
			var loading_width = loadingEle.width(),loading_height = loadingEle.height();
			$('.loading').createWaterBall({
					cvs_config:{
						width:loading_width,
						height:loading_height
					}
	});
			setTimeout(function(){
			$('.loading').createWaterBall('updateRange',100);
		},1000);
	</script>
</html>
