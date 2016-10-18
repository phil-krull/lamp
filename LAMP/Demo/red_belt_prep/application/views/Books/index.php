<html>
<head>
  <title>All books</title>
</head>
<body>
  <h4>Welcome, <?=$this->session->userdata('alias') ?></h4>
  <a href="/reviews/new">Add book and review</a>

  <h3>Recent Book reviews</h3>
  <hr>
  <?php 
    foreach ($reviews as $review)
    {
  ?>
    <a href="/books/<?= $review['id'] ?>"><?= $review['title'] ?></a>
    <p>Rating= <?= $review['rating'] ?></p>
    <p><a href="/users/<?= $review['user_id'] ?>"><?= $review['alias'] ?></a> says: <?= $review['review'] ?></p>
    <p>Posted on: <?= $review['created_at'] ?></p>
    <hr>
  <?php
    }
  ?>
</body>
</html>