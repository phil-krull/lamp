<html>
<head>
  <title><?= $user[0]['name'] ?></title>
</head>
<body>
  <a href="/books">Home</a>
  <h4>User Alias: <?= $user[0]['alias'] ?></h4>
  <p>Name: <?= $user[0]['name'] ?></p>
  <p>Email: <?= $user[0]['email'] ?></p>
  <p>Total number of reviews: <?= count($user) ?></p>

  <h4>Posted reviews on the following books:</h4>

  <?php
    foreach ($user as $value)
    {
  ?>
    <p><?=$value['title'] ?></p>
  <?php
    }
  ?>
</body>
</html>