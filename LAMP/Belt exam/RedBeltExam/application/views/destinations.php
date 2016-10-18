<html>
<head>
  <title>Destinations</title>
</head>
<body>
  <div id="container">
    <form action= "/sessions/destroy" method= "post">
      <input type= "submit" value= "Logout">
    </form>
    <a href="/trip/trips">Home</a>
    <div id="location">
      <h2><?=$selected_trip['location']?></h2>
      <h4>Planned By: <?= $selected_trip['name']?></h4>
      <h4>Description: <?=$selected_trip['description']?></h4>
      <h4>Travel Date From: <?=$selected_trip['start']?></h4>
      <h4>Travel Date to: <?=$selected_trip['end']?></h4>
    </div><!--end of location-->
    <div id="other_users">
      <h2>Other users' joining the trip</h2>
      <h4>names here</h4>
    </div><!--end of other_users-->
  </div><!--end of container-->
</body>
</html>