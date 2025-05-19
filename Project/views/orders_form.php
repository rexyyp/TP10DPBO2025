<?php
require_once 'views/template/header.php';
?>

<h2 class="text-2xl mb-6 coffee-text font-bold text-center">
    <?php echo isset($orders) ? 'Edit Orders' : 'Add Orders'; ?>
</h2>
<form action="index.php?entity=orders&action=<?php echo isset($orders) ? 'update&id=' . $orders['id'] : 'save'; ?>" method="POST" class="space-y-4 bg-[#f7f3ef] p-8 rounded-lg shadow-lg border border-[#bfa084] max-w-lg mx-auto">
    <div>
        <label class="block coffee-text font-semibold mb-1">Products:</label>
        <select name="product_id" class="border border-[#bfa084] p-2 w-full rounded focus:ring-2 focus:ring-[#a98467] coffee-text" required>
            <?php foreach ($products as $prod): ?>
            <option value="<?php echo $prod['id']; ?>" <?php echo isset($orders) && $orders['product_id'] == $prod['id'] ? 'selected' : ''; ?>><?php echo $prod['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block coffee-text font-semibold mb-1">Quantity:</label>
        <input type="text" name="quantity" value="<?php echo isset($orders) ? $orders['quantity'] : ''; ?>" class="border border-[#bfa084] p-2 w-full rounded focus:ring-2 focus:ring-[#a98467] coffee-text" required>
    </div>
    <button type="submit" class="bg-[#2d1a0e] hover:bg-[#4b2e19] text-white px-4 py-2 rounded-lg shadow-lg transition w-full font-bold">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>