<html>
<head>
  <title>Register</title>
</head>
<body>
  <form action="/users/create" method="post">
  <?=$this->session->flashdata('errors')?>
    <fieldset>
      <legend>Register</legend>
      <label>Name</label>
      <input type="text" name="name">

      <label>Alias</label>
      <input type="text" name="alias">

      <label>Email</label>
      <input type="text" name="email">

      <label>Password</label>
      <input type="password" name="password">

      <label>Confirm Password</label>
      <input type="password" name="password_confirmation">

      <input type="submit" value="Register">

    </fieldset>
  </form>
</body>
</html>