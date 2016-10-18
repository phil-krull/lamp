<html>
<head>
	<title>Process Form</title>
</head>
<body>
	<div id= "container">
		<fieldset>
			<p>Thanks for submitting this form! You have submitted this form <?= $this->session->userdata('counter') ?> times now.</p>
		</fieldset>
		<fieldset>
			<h2>Submitted Information</h2>
			<p>Name: <?=  $this->session->userdata['name'] ?></p>
			<p>Location: <?= $this->session->userdata['location'] ?></p>
			<p>Language: <?= $this->session->userdata['language'] ?></p>
			<p>Comment: <?= $this->session->userdata['comment'] ?></p>
			<a href = '/' name= "reset"><button>Return to login in screen</button></a>
		</fieldset>
	</div>
</body>
</html>