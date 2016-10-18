<html>
<head>
  <title>All Products</title>
</head>
<body>
  <h2>Products</h2>
  <table>
    <tr>
      <td>Name</td>
      <td>Description</td>
      <td>Price</td>
      <td>Action</td>
    </tr>
  <?php foreach ($products as $key => $value) { ?>
    <tr>
      <td><?= $value['name']?></td>
      <td><?= $value['description']?></td>
      <td><?= $value['price']?></td>
      <td>
        <a href="/products/show/<?= $value['id'] ?>">Show</a> | <a href="/products/edit/<?= $value['id'] ?>">Edit</a> |
        <form action="/products/destroy/<?= $value['id'] ?>" method="post">
          <input type="submit" value="Remove">
        </form>
      </td>
    </tr>
  <?php } ?>
  </table>
  <a href="/products/newpro">Add a product</a>
</body>
</html>