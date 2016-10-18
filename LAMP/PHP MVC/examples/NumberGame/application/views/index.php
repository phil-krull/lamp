<html>
<head>
	<title>The Great Number Game</title>
	<style type="text/css">
		.red{
			width: 100px;
			padding: 50px;
			background-color: red;
			border: 1px solid black;
			color: white;
			text-align: center;
		}
		.green{
			width: 100px;
			padding: 50px;
			background-color: green;
			border: 1px solid black;
			color: white;
			text-align: center;
		}
	</style>
</head>
<body>
	<div id = 'container'>
		<?= $this->session->userdata['number'] ?>
		<h1>Welcome to the Game</h1>
		<p>I am thinking of a number between 1 and 100</p>
		<p>Take a guess!</p>
		<?php
			if($this->session->flashdata('result'))
			{
		?>	
			<p class = 'red'><?= $this->session->flashdata('result') ?></p>
		<?php
			}
			if($this->session->flashdata('correct'))
			{
		?>	
			<p class = 'green'><?= $this->session->flashdata('correct') ?></p>
			<form action = 'reset' method = 'post'>
				<input type = 'submit' value= 'Play Again'>
			</form>
		<?php	
			}
		?>	
		<form action='check' method = 'post'>
			<input type= 'text' name= 'guess'>
			<input type= 'submit' value= 'Submit'>
		</form>
	</div> 
</body>
</html>