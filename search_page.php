<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){
   
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   // Prepare a query to check if the product is already added to the cart
   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = :name AND user_id = :user_id");
   $check_cart_numbers->execute(['name' => $product_name, 'user_id' => $user_id]);

   if($check_cart_numbers->rowCount() > 0){
      $message[] = 'Already added to cart!';
   }else{
      // Prepare query to insert the product into the cart
      $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES(:user_id, :name, :price, :quantity, :image)");
      $insert_cart->execute([
         'user_id' => $user_id,
         'name' => $product_name,
         'price' => $product_price,
         'quantity' => $product_quantity,
         'image' => $product_image
      ]);
      $message[] = 'Product added to cart!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search Page</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Search Page</h3>
   <p> <a href="home.php">home</a> / search </p>
</div>

<section class="search-form">
   <form action="" method="post">
      <input type="text" name="search" placeholder="Search products..." class="box">
      <input type="submit" name="submit" value="search" class="btn">
   </form>
</section>

<section class="products" style="padding-top: 0;">

   <div class="box-container">
   <?php
      if(isset($_POST['submit'])){
         $search_item = $_POST['search'];
         
         // Prepare a query to search for products based on the entered name
         $select_products = $conn->prepare("SELECT * FROM `products` WHERE name LIKE :search_item");
         $select_products->execute(['search_item' => "%{$search_item}%"]);
         
         if($select_products->rowCount() > 0){
            while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="" class="image">
      <div class="name"><?php echo $fetch_product['name']; ?></div>
      <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
      <input type="number" class="qty" name="product_quantity" min="1" value="1">
      <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
      <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
   </form>
   <?php
            }
         }else{
            echo '<p class="empty">No result found!</p>';
         }
      }else{
         echo '<p class="empty">Search something!</p>';
      }
   ?>
   </div>
  

</section>

<?php include 'footer.php'; ?>

<!-- Custom JS file link -->
<script src="js/script.js"></script>

</body>
</html>
