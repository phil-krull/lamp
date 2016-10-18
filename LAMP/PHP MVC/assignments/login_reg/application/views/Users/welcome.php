<html>
<head>
  <title>Login Registration</title>
</head>
<body>
  <h3>Welcome <?= $this->session->userdata('first_name') ?></h3>
  <fieldset>
    <legend>User information</legend>
    <table>
      <tr>
        <td>First Name:</td>
        <td><?= $this->session->userdata('first_name') ?></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><?= $this->session->userdata('last_name') ?></td>
      </tr>
      <tr>
        <td>Email Address:</td>
        <td><?= $this->session->userdata('email') ?></td>
      </tr>
    </table>
  </fieldset>
  <form action="/sessions/destroy" method="post">
    <input type="submit" value="Logout">
  </form>
</body>
</html>