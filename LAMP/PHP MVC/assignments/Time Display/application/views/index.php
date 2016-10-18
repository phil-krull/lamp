<html>
<head>
	<title>Date and Time</title>
	<style type="text/css">
		#main_content{
			width: 970px;
			margin: 0 auto;
		}
			.title_box{
				width: 200px;
				text-align: center;
				margin: 0 auto;
			}
			.date_time{
				width: 500px;
				text-align: center;
				margin: 0 auto;
				font-size: 28px;
				font-weight: bold;
			}
	</style>
</head>
<body>
	<div id = "container">
		<div id = "main_content">
			<fieldset class = "title_box">
				<!-- <form action="time" method = "get"> -->
					<p>The current time and date:</p>
				<!-- </form>	 -->
			</fieldset>
			<fieldset class = "date_time">
					  <?php
					  	date_default_timezone_set("America/Los_Angeles");
						echo date("D M j h:i:sa");
					  ?>
			</fieldset>

			<?php
				echo "<h1>" . $date . "</h1>";
				echo "<h1>" . $time . "</h1>";
			?>
		</div>
	</div>
</body>
</html>