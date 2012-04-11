<h2>Products</h2>
<table>
    <tr>
        <th>name</th>
        <th>price</th>
    </tr>

    <?php foreach ($products as $product): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($product['Product']['name'],
                    array('controller' => 'products', 'action' => 'view', $product['Product']['id'])); ?>
        </td>
        <td>$<?php echo $product['Product']['price']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

    <h3>Add to Cart</h3>
    <form method="post" action="confirm">
    <?php foreach ($products as $product): ?>
	<p><input type="checkbox" name="<?php echo $product['Product']['id'] ?>" />
	<?php echo $product['Product']['name']; ?></p>
    <?php endforeach; ?>
        <input type="submit" >
    </form>
