<html>
<head>
  <title><?= $book['title'] ?></title>
</head>
<body>
  <a href="/books">Home</a>
  <h3><?= $book['title'] ?></h3>
  <p>Author: <?= $book['author'] ?></p>
<!-- Show review -->
  <h3>Reviews</h3>
  <hr>
  <?php
    foreach ($reviews as $review)
    {
  ?>
    <p>Rating: <?= $review['rating'] ?></p>
    <p><?= $review['alias'] ?> says: <?= $review['review'] ?></p>
    <p>Posted on: <?= $review['created_at'] ?></p>

  <?php

    if($review['user_id'] == $this->session->userdata('id'))
    {
  ?>

      <form action= "/reviews/destroy/<?= $review['id'] ?>" method= "post">
        <input type= "submit" value= "Delete">
        <input type= "hidden" name= "book_id" value= "<?= $review['book_id'] ?>">
      </form>

  <?php
    }

  ?>
  <hr>

  <?php
    }
  ?>
<!-- End of show review -->

  <form action= "/reviews/create" method= "post">
    <label>Add a new review</label><br>
    <input type= "hidden" name= "title" value= "<?= $book['title'] ?>">
    <input type= "hidden" name= "author" value= "<?= $book['author'] ?>">
    <textarea name= "review" rows= "10" cols= "50"></textarea><br>
    <select name="rating">
      <option selected disabled>Rate it!</option>
      <option value= "1">1</option>
      <option value= "2">2</option>
      <option value= "3">3</option>
      <option value= "4">4</option>
      <option value= "5">5</option>
    </select><br>
    <input type= "submit" value= "Add Review">
  </form>
</body>
</html>