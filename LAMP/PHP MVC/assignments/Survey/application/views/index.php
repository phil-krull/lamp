<html>
<head>
	<title>Survey</title>
	<style type="text/css">
		#container{
			width: 970px;
			margin: 0 auto;
		}
		#survey{
			width: 300px;
		}
		.resizedTextbox{
			width: 250px;
			height: 150px;
			margin: 5px;
			text-align: top;
		}
	</style>
</head>
<body>
	<div id="container">
		<div id= "survey">
			<form action= "process" method= "post">
				<fieldset>
					<label>Your Name:</label>
					<input type= "text" name= "name">
					<label>Dojo Location:</label> 
						<select name= "location">
							<option value "Choose a location" type= "option disabled">Choose a location</option>
							<option value= "Seattle, WA">Seattle, WA</option>
							<option value= "Dallas, TX">Dallas, TX</option>
							<option value= "Los Angeles, CA">Los Angeles, CA</option>
						</select></p>
					<label>Favorite Language:</label> 
						<select name= "language">
							<option value= "Choose a language" type= "option disabled">Choose a language</option>
							<option value= "Python">Python</option>
							<option value= "iOS">iOS</option>
							<option value= "Ruby">Ruby</option>
						</select></p>
					<p>Comment (optional):</p>
						<p><input type= "text" name="comment" class= "resizedTextbox"></p>
						<input type="submit" value= "Submit">
				</fieldset>	
			</form>
		</div>
	</div>
</body>
</html>