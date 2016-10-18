<html>
<head>
  <title>Product Edit</title>
</head>
<body>
  <h2>Edit Product <?= $product['id'] ?></h2>
  <form action="/products/update/<?= $product['id'] ?>" method="post">
    <table>
      <tr>
        <td>Name:</td>
        <td><input type="text" name="name" value="<?= $product['name'] ?>"></td>
      </tr>
      <tr>
        <td>Description:</td>
        <td><input type="text" name="description" value="<?= $product['description'] ?>"></td>
      </tr>
      <tr>
        <td>Price:</td>
        <td><input type="integer" name="price" min="0" value="<?= $product['price'] ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Update"></td>
      </tr>
    </table>
  </form>
  <a href="/products/show/<?= $product['id'] ?>">Show</a> | <a href="/products">Back</a>
</body>
</html>