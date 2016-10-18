<html>
<head>
  <title>Add Plan</title>
</head>
<body>
  <div id="container">
    <div id="page_redirects">
      <a href="/trip/trips">Home</a>
      <form action= "/sessions/destroy" method= "post">
        <input type= "submit" value= "Logout">
      </form>
    </div><!--end of page_redirects-->
    <div id= "main_content">
      <h2>Add a Trip</h2>
        <form action= "/trip/create" method = "post">
          <label>Destination:</label><input type= "text" name= "location"><br><br>
          <label>Description:</label><input type= "text" name= "description"><br><br>
          <label>Travel Date From:</label><input type= "text" name= "start"><br><br>
          <label>Travel Date To:</label><input type= "text" name= "end"><br><br><br>
          <p><?= $this->session->flashdata('errors') ?></p>
          <input type= "submit" value= "Add">
        </form>
    </div><!--end of main_content-->
  </div>
</body>
</html>