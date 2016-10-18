<html>
<head>
  <title>Login Registration</title>
</head>
<body>
  <fieldset>
    <legend>Login</legend>
    <form action="/sessions" method="post">
      <table>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Login"></td>
        </tr>
      </table>
    </form>
  </fieldset>
  <fieldset>
    <legend>Register</legend>
    <form action="/users" method="post">
      <table>
        <tr>
          <td>First Name:</td>
          <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td>Confirm Password:</td>
          <td><input type="password" name="password_confirmation"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Register"></td>
        </tr>
      </table>
    </form>
  </fieldset>
  <? if ($this->session->flashdata('errors')) { ?>
    <?= $this->session->flashdata('errors') ?>
  <? } ?>
</body>
</html>