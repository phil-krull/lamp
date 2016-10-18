<html>
<head>
  <title>Travel Dashboard</title>
</head>
<body>
  <div id= "container">
    <form action= "/sessions/destroy" method= "post">
      <input type= "submit" value= "Logout">
    </form>
    <div id="main_content">
        <h1>Hello, <?= $this->session->userdata['name'] ?></h1>
        <p><?= $this->session->flashdata('success') ?></p>
      <div id= "trip_schedules">
        <h2>Your Trip Schedules</h2>
        <table>
          <tr>
            <th>Destination</th>
            <th>Travel Start Date</th>
            <th>Travel End Date</th>
            <th>Plan</th>
          </tr><?php

            foreach ($your_destinagions as $key => $value) 
              {?>
            <tr>
              <td><?= $value['location'] ?></td>
              <td><?= $value['start'] ?></td>
              <td><?= $value['end'] ?></td>
              <td><?= $value['description'] ?></td>
            </tr>
            <?php
          }
          ?>
        </table>
      </div><!--end of trip_schedules-->    
      <div id= "travel_plans">
        <h2>Other User's Travel Plans</h2>
        <table>
          <tr>
            <th>Name</th>
            <th>Destination</th>
            <th>Travel Start Date</th>
            <th>Travel End Date</th>
            <th>Do you want to join?</th>
          </tr>
          <?php

            foreach ($desired_designations as $key => $value) 
              {?>
            <tr>
              <td><?= $value['name'] ?></td>
              <td><a href="/trip/destination/<?= $value['id']?>"><?= $value['location'] ?></a></td>
              <td><?= $value['start'] ?></td>
              <td><?= $value['end'] ?></td>
              <td><a href="/join/trip/<?= $value['id']?>/<?= $this->session->userdata['user_id']?>">Join</a></td>
            </tr>
            <?php
          }
          ?>
        </table><br>
      </div><!--end of travel_plans-->
    </div><!--end of main_content-->
    <a href= "/trip/new">Add Travel Plan</a>
  </div><!--end of container-->
</body>
</html>