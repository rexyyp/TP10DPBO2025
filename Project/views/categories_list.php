<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4 coffee-text font-bold">Categories List</h2>
<a href="index.php?entity=categories&action=add" class="bg-[#8d6748] hover:bg-[#a98467] text-white px-4 py-2 rounded-lg mb-4 inline-block shadow-lg transition">Add Categories</a>
<table class="w-full border-separate border-spacing-0 rounded-lg overflow-hidden shadow-lg">
    <tr class="coffee-bg text-white">
        <th class="p-3 font-semibold">Name</th>
        <th class="p-3 font-semibold">Actions</th>
    </tr>
    <?php foreach ($categoriesList as $cat): ?>
    <tr class="even:bg-[#f7f3ef] odd:bg-[#d7b899] hover:bg-[#bfa084] transition">
        <td class="p-3 coffee-text font-medium"><?php echo $cat['name']; ?></td>
        <td class="p-3 flex gap-2">
            <a href="index.php?entity=categories&action=edit&id=<?php echo $cat['id']; ?>" class="bg-[#bfa084] hover:bg-[#a98467] text-[#4b2e19] px-3 py-1 rounded shadow border border-[#8d6748] transition flex items-center gap-1">
                <svg xmlns='http://www.w3.org/2000/svg' class='w-4 h-4' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15.232 5.232l3.536 3.536M9 13h3l8-8a2.828 2.828 0 10-4-4l-8 8v3z' /></svg>
                Edit
            </a>
            <a href="index.php?entity=categories&action=delete&id=<?php echo $cat['id']; ?>" class="bg-[#a98467] hover:bg-[#6f4e37] text-white px-3 py-1 rounded shadow border border-[#8d6748] transition flex items-center gap-1" onclick="return confirm('Are you sure?');">
                <svg xmlns='http://www.w3.org/2000/svg' class='w-4 h-4' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 18L18 6M6 6l12 12' /></svg>
                Delete
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>