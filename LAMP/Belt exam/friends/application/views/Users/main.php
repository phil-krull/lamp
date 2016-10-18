<html>
<head>
  <title>Login/Registration</title>
</head>
<body>
  <div id= "container">
    <h2>Welcome</h2>
    <div id= "register">
      <form action="/users/create" method="post">
        <fieldset id= "register">
          <legend>Register</legend>
          <label>Name:</label>
          <input type="text" name="name"><br><br>

          <label>Alias:</label>
          <input type="text" name="alias"><br><br>

          <label>Email:</label>
          <input type="text" name="email"><br>
          <p>*Password should be at least 8 characters</p>
          <label>Password:</label>
          <input type="password" name="password"><br><br>

          <label>Confirm Password:</label>
          <input type="password" name="password_confirmation"><br><br>

          <label>Date of birth:</label>
          <input type= "date" name= "date_of_birth"><br><br>

          <input type="submit" value="Register">

        </fieldset>
      </form>
    </div><!-- end_of_register -->
    <p><?= $this->session->flashdata('success') ?></p>
    <p><?= $this->session->flashdata('log_in') ?></p>
    <p><?= $this->session->flashdata('error') ?></p>
    <p><?=$this->session->flashdata('errors') ?></p>
    <div id= "log_in">
      <form action="/sessions/create" method="post">
        <fieldset>
          <legend>Log in</legend>

          <label>Email</label>
          <input type="text" name="email"><br><br>

          <label>Password</label>
          <input type="password" name="password"><br><br>

          <input type="submit" value="Log in">

        </fieldset>
      </form>
    </div><!-- end_of_log_in -->
  </div><!-- end_of_container -->
</body>
</html>