<html>
<head>
	<title>Index</title>
</head>
<body>
	<h1>I am the index page</h1>
	<?= $this->session->userdata['Hello'] ?>

	<form action= "process" method= "post">
		<fieldset>
			<p>Your Name: <input type= "text" name= "name"></p>
			<p>Dojo Location: 
				<select name= "location">
					<option type= "option disabled">Choose a location</option>
					<option type= "">Seattle, WA</option>
					<option type= "">Dallas, TX</option>
					<option type= "">Los Angeles, CA</option>
				</select></p>
				<input type="submit" value= "Submit">
		</fieldset>	
	</form>
</body>
</html>