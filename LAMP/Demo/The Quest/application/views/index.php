<html>
<head>
	<title>Index</title>
	<style type="text/css">
	body{
		width: 970px;
	}
	fieldset{
		width: 400px;
		margin: 0 auto;
	}
		#text_field td{
			margin-left: 100px;
			color: red;
			padding: 10px;
			text-align: center;
		}
		#text_field table{
			width: 600px;
		}
		
	</style>
</head>
<body>
	<div id= "text_field">
	<fieldset>
		<h1>Quests History</h1>
	<!-- 	<?php 	for($qnum = 0; $qnum < count($quests); $qnum ++)
				{
					$quest = $quests[$qnum];
			?>
		<h4>Name</h4>
		<p> <?= $quest['name'] ?></p>
		<h4>Quest</h4>
		<p> <?= $quest['quest'] ?></p>
		<h4>Favorite Color</h4>
		<p> <?= $quest['favorite_color'] ?></p>
		<?php } ?> -->
	<table>
		<tr>
			<th>Name:</th>
			<th>Quest:</th>
			<th>Favorite Color:</th>
		</tr>
		<?php 	for($qnum = 0; $qnum < count($quests); $qnum ++)
				{
					$quest = $quests[$qnum];
			?>
		<tr>
			<td><?= $quest['name'] ?></td>
			<td><?= $quest['quest'] ?></td>
			<td><?= $quest['favorite_color'] ?></td>
		<tr><!-- 
		</tr>
		</tr>
		<tr>
		</tr> -->
			<?php } ?>
	</table>
	</fieldset>
	<a href="quest/new_quest">Resubmit</a>
	</div>
</body>
</html>
