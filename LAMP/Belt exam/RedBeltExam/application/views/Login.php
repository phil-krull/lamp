<html>
<head>
  <title>Login</title>
</head>
<body>
  <div id= "container">
    <div id= "register">
      <fieldset>
        <form action="user/create" method= "post">
          <label>Name:</label><input type= "text" name= "name"><br>
          <label>Username:</label><input type= "text" name= "username"><br>
          <label>Password:</label><input type= "password" name= "password"><br>
          <p>*Password should be a least 8 characters</p><br>
          <label>Confirm PW:</label><input type= "password" name= "confirm_password"><br>
          <input type= "submit" value="Register">
        </form>
        <p><?= $this->session->flashdata('logged_in') ?></p>
        <p><?= $this->session->flashdata('errors') ?></p>
      </fieldset>
    </div>
    <div id= "login">
       <fieldset>
        <form action="session/new" method= "post">
          <label>Username:</label><input type= "text" name= "username"><br>
          <label>Password:</label><input type= "password" name= "password"><br>
          <input type= "submit" value="Login"><br>
        </form>
        <p><?= $this->session->flashdata('session_error') ?></p>
      </fieldset>
    </div>
  </div>
</body>
</html>