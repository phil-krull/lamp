<html>
<head>
  <title>Success</title>
</head>
<body>
  <h2>Welcome Back, <?=$this->session->userdata('first_name')?></h2>

  <form action= "/sessions/destroy" method= "post">
    <input type="submit" value= "Log out">
  </form>
</body>
</html>