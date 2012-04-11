<table>
  <h1>Your cart contains the following items:</h1>
  <tr>
    <th>name</th>
    <th>price</th>
  </tr>
  <?php foreach ($products as $product): ?>
    <tr>
      <td>
	<?php echo $product[0]['Product']['name'] ?>
      </td>
      <td>
	$<?php echo $product[0]['Product']['price'] ?>
      </td>
    </tr>
  <?php endforeach; ?>

</table>

<h4>Subtotal: $<?php echo $subtotal ?></h4>
