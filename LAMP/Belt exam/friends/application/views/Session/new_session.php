<html>
<head>
  <title>Log in</title>
</head>
<body>
  <form action="/sessions/create" method="post">
  <?=$this->session->flashdata('errors') ?>
    <fieldset>
      <legend>Log in</legend>

      <label>Email</label>
      <input type="text" name="email">

      <label>Password</label>
      <input type="password" name="password">

      <input type="submit" value="Log in">

    </fieldset>
  </form>
</body>
</html>