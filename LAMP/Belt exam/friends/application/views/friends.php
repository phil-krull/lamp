<html>
<head>
  <title>Friends</title>
</head>
<body>
  <h2>Hello, <?=$this->session->userdata('alias')?></h2>
  <form action= "/sessions/destroy" method= "post">
    <input type="submit" value= "Log out">
  </form>

  <h4>Here is a list of you friends:</h4>


  <h4>Other User's not on your friend's list:</h4>

  <?php
    foreach ($friends as $value)
    {
  ?>
    <p><?= $value['alias'] ?>
      <form action= "/friends/create" method= "post">
        <input type= "hidden" name= "user_id" value= "<?= $this->session->userdata('id') ?>">
        <input type= "hidden" name= "friend_id" value= "<?= $value['id'] ?>">
        <input type= "submit" value= "Add as friend">
      </form></p>
  <?php
    }
  ?>

</body>
</html>

