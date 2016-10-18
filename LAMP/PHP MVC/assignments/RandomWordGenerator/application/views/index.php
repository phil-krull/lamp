<html>
<head>
	<title>Random Word Generator</title>
	<style type="text/css">
		#container{
			width: 970px;
			margin: 0 auto;
			text-align: center;
		}
		.word_box{
			width: 225px;
			margin: 20px auto;
		}
	</style>
</head>
<body>
	<div id= "container">
		<h3>Random Word (attempt #<?= $this->session->userdata('counter')?>)</h3>
		<fieldset class= "word_box">
			<p><?= $this->session->userdata('help_file') ?></p>
		</fieldset>
		<form action= "process" method= "post">
			<input type= "submit" value="Generate">
		</form>
	</div>
</body>
</html>


