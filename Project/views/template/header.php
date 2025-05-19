<!DOCTYPE html>
<html>
<head>
    <title>Lexx Coffee Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body { background: #f7f3ef; }
        .coffee-bg { background: #6f4e37; }
        .coffee-dark { background: #4b2e19; }
        .coffee-light { background: #bfa084; }
        .coffee-accent { background: #d7b899; }
        .coffee-text { color: #4b2e19; }
    </style>
</head>
<body class="coffee-light min-h-screen">
    <nav class="coffee-bg p-4 text-white shadow-lg rounded-b-lg">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold tracking-wide flex items-center gap-2">
                Lexx Coffee Shop
            </h1>
            <ul class="flex space-x-6 text-lg font-semibold">
                <li><a href="index.php?entity=orders" class="hover:text-yellow-300 transition">Orders</a></li>
                <li><a href="index.php?entity=products" class="hover:text-yellow-300 transition">Products</a></li>
                <li><a href="index.php?entity=categories" class="hover:text-yellow-300 transition">Categories</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mx-auto p-6 mt-6 rounded-lg shadow-lg coffee-accent min-h-[80vh]">