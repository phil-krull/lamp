<html>
<head>
	<title>New</title>
	<style type="text/css">
		#info_box{
			width: 200px;
		}
	</style>
</head>
<body>
	<form action= "<?= base_url('quest/create') ?>" method= "post">
		<fieldset id= "info_box">
			<label>Name:</label>
			<input type="text" name= "name">
			<label>Guest:</label>
			<input type="text" name= "quest">
			<label>Favorite Color:</label>
			<select name= "favorite_color">
				<option type= "option disabled" value="select favorite color">Choose a color</option>
				<option value="Red">Red</option>
				<option value="Green">Green</option>
				<option value="Blue">Blue</option>
			</select>
			<input type= "submit" value= "Submit">
		</fieldset>
	</form>
</body>
</html>