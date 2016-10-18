<html>
<head>
  <title>Product Show</title>
</head>
<body>
  <h2>Product <?= $product['id'] ?></h2>
  <table>
    <tr>
      <td>Name:</td>
      <td><?= $product['name'] ?></td>
    </tr>
    <tr>
      <td>Description:</td>
      <td><?= $product['description'] ?></td>
    </tr>
    <tr>
      <td>Price:</td>
      <td><?= $product['price'] ?></td>
    </tr>
  </table>
  <a href="/products/edit/<?= $product['id'] ?>">Edit</a> | <a href="/products">Back</a>
</body>
</html>