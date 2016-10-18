<html>
<head>
  <title>New Product</title>
</head>
<body>
  <h2>Add a new product</h2>
  <?= $this->session->flashdata('errors') ?>
  <form action="/products/create" method="post">
    <label>Name:</label>
    <input type="text" name="name">
    <label>Description:</label>
    <input type="text" name="description">
    <label>Price:</label>
    <input type="integer" name="price" min="0">
    <input type="submit" value="Create">
  </form>
  <a href="/products">Go back</a>
</body>
</html>