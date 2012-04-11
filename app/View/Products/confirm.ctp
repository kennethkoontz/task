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

<table>
<tr>
  <td>Subtotal:</td>
  <td>$<?php echo $subtotal ?></td>
</tr>
<tr>
  <td>Taxes: <small>(@7.75%)</small></td>
  <td>$<?php echo $taxes ?></td>
</tr>
<tr>
  <td><h4>Grand Total:</h4></td>
  <td>$<?php echo $grandtotal ?></td>
</tr>
</table>
