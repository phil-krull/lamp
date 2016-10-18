<html>
<head>
  <title>Courses</title>
</head>
<body>
  <div id= "container">
    <div id= "add_course">
      <form action= "/courses/add" method= "post">
        <p><?= $this->session->flashdata('error'); ?></p>
        <p><?= $this->session->flashdata('success'); ?></p>
        <label>Add a new course</label><br><br>
        <label>Course name:<input type= "text" name= "name"></label><br><br>
        <label>Description:<input type= "text box" name= "description"></label><br><br>
        <input type= "hidden" name= "submit">
        <input type= "submit" value= "Add">
      </form>
    </div>
    <div id= "view_courses">
      <h2>Courses</h2>
      <table>
        <tr>
          <th>Course Name</th>
          <th>Description</th>
          <th>Date Added</th>
          <th>Actions</th>
        </tr>
        <?php 
          foreach($current_courses as $key => $value) { ?>
        <tr>
            <td><?= $value['name'] ?></td>
            <td><?= $value['Description'] ?></td>
            <td><?= date("M d, Y h:i a", strtotime($value['created_at'])) ?></td>
            <td>
              <form action="/courses/destroy/<?php echo $value['id'] ?>" method="post">
                <input type="submit" value="Delete">
              </form>
            </td>
        </tr>
          <?php } ?>
      </table>
    </div>
  </div>
</body>
</html>
