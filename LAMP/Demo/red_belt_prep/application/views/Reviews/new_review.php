<html>
<head>
  <title>New Review</title>
</head>
<body>
  <a href="/books">Home</a>
   <form action= "/sessions/destroy" method= "post">
    <input type="submit" value= "Log out">
  </form>
  <h3>Add a new book review</h3>
  <form action= "/reviews/create" method= "post">
    <label>Book Title</label>
    <input type="text" name= "title">
    <br>
    <label>Author</label>
    <p>Choose from the list</p>
    <select name= "author">
      <option selected disabled>Choose an author</option>
    </select>
    <p>Or add a new author</p>
    <input type= "text" name= "author">
    <br>
    <label>Review</label>
    <br>
    <textarea name= "review" rows= "10" cols= "50"></textarea>
    <br>
    <select name="rating">
      <option selected disabled>Rate it!</option>
      <option value= "1">1</option>
      <option value= "2">2</option>
      <option value= "3">3</option>
      <option value= "4">4</option>
      <option value= "5">5</option>
    </select>
    <input type="submit" value= "Add Review">
  </form>
</body>
</html>