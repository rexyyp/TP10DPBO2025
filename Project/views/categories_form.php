<?php
require_once 'views/template/header.php';
?>

<h2 class="text-2xl mb-6 coffee-text font-bold text-center">
    <?php echo isset($categories) ? 'Edit Categories' : 'Add Categories'; ?>
</h2>
<form action="index.php?entity=categories&action=<?php echo isset($categories) ? 'update&id=' . $categories['id'] : 'save'; ?>" method="POST" class="space-y-4 bg-[#f7f3ef] p-8 rounded-lg shadow-lg border border-[#bfa084] max-w-lg mx-auto">
    <div>
        <label class="block coffee-text font-semibold mb-1">Name:</label>
        <input type="text" name="name" value="<?php echo isset($categories) ? $categories['name'] : ''; ?>" class="border border-[#bfa084] p-2 w-full rounded focus:ring-2 focus:ring-[#a98467] coffee-text" required>
    </div>
    <button type="submit" class="bg-[#2d1a0e] hover:bg-[#4b2e19] text-white px-4 py-2 rounded-lg shadow-lg transition w-full font-bold">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>