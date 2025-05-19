<?php
require_once 'viewmodel/CategoriesViewModel.php';
require_once 'viewmodel/ProductsViewModel.php';
require_once 'viewmodel/OrdersViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'orders';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity == 'categories') 
{
    $viewModel = new CategoriesViewModel(); 

    if ($action == 'list') 
    {
      $categoriesList = $viewModel->getCategoriesList();
      require_once 'views/Categories_List.php';
    } 
    elseif ($action == 'add') 
    {
      require_once 'views/categories_form.php';
    } 
    elseif ($action == 'edit') 
    {
      $id = $_GET['id'];
      $categories = $viewModel->getCategoryById($id);
      require_once 'views/categories_form.php';
    } 
    elseif ($action == 'save') 
    {
      $name = $_POST['name'];
      $viewModel->addCategory($name);
      header('Location: index.php?entity=categories&action=list');
    } 
    elseif ($action == 'update') 
    {
      $id = $_GET['id'];
      $name = $_POST['name'];
      $viewModel->updateCategory($id, $name);
      header('Location: index.php?entity=categories&action=list');
    } 
    elseif ($action == 'delete') 
    {
      $id = $_GET['id'];
      $viewModel->deleteCategory($id);
      header('Location: index.php?entity=categories&action=list');
    }
}
elseif ($entity == 'orders')
{

  $viewModel = new OrdersViewModel();

  if ($action == 'list') 
  {
    $ordersList = $viewModel->getOrdersList();
    require_once 'views/Orders_List.php';
  }
  elseif ($action == 'add') 
  {
    $products = $viewModel->getProducts();
    require_once 'views/orders_form.php';
  }
  elseif ($action == 'edit') 
  {
    $id = $_GET['id'];
    $orders = $viewModel->getOrderById($id);
    $products = $viewModel->getProducts();
    require_once 'views/orders_form.php';
  }
  elseif ($action == 'save') 
  {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $viewModel->addOrder($product_id, $quantity);
    header('Location: index.php?entity=orders&action=list');
  }
  elseif ($action == 'update') 
  {
    $id = $_GET['id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $viewModel->updateOrder($id, $product_id, $quantity);
    header('Location: index.php?entity=orders&action=list');
  }
  elseif ($action == 'delete') 
  {
    $id = $_GET['id'];
    $viewModel->deleteOrder($id);
    header('Location: index.php?entity=orders&action=list');
  }
}
elseif ($entity == 'products') 
{
    $viewModel = new ProductsViewModel();

    if ($action == 'list') 
    {
        $productsList = $viewModel->getProductsList();
        require_once 'views/Products_List.php';
    } 
    elseif ($action == 'add') 
    {
        $categories = $viewModel->getCategories();
        require_once 'views/products_form.php';
    } 
    elseif ($action == 'edit') 
    {
        $id = $_GET['id'];
        $products = $viewModel->getProductById($id);
        $categories = $viewModel->getCategories();
        require_once 'views/products_form.php';
    } 
    elseif ($action == 'save') 
    {
        $name = $_POST['name'];
        $category_id = $_POST['categories_id'];
        $price = $_POST['price'];
        $viewModel->addProduct($name, $price, $category_id);
        header('Location: index.php?entity=products&action=list');
    }
    elseif ($action == 'update') 
    {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $category_id = $_POST['categories_id'];
        $price = $_POST['price'];
        $viewModel->updateProduct($id, $name, $price, $category_id);
        header('Location: index.php?entity=products&action=list');
    }
    elseif ($action == 'delete') 
    {
        $id = $_GET['id'];
        $viewModel->deleteProduct($id);
        header('Location: index.php?entity=products&action=list');
    }
}
 


?>