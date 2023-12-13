<?php

@include 'config.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
  

   $cart_query = mysqli_query($link, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($link, "INSERT INTO `order`(name, number, email, method, total_products, total_price) VALUES('$name','$number','$email','$method','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='products.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="adminstyle.css">
</head>
<body>
    <div class="container">
        <section class="checkout-form">
            <h1 class=" heading">Complete your order</h1>
            <form action="" method="post">

                  
                  <div class="display-order">
      <?php
         $select_cart = mysqli_query($link, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
                    <span><?= $fetch_cart['name'];?>(<?=$fetch_cart['quantity'];?>)</span>
                    <?php
                                }
                    }else{
                        echo "<div class='display-order'><span>your cart is empty!</span></div>";
                    }




                    ?>
                 </div>
                <div class="flex">
                    <div class="inputBox">
                            <span>your name</span>
                            <input type="text" placeholder="enter your name" name="name" requaired>
                    </div>
                    <div class="inputBox">
                            <span>your number</span>
                            <input type="text" placeholder="enter your number" name="number" requaired>
                    </div>
                    <div class="inputBox">
                            <span>your name</span>
                            <input type="email" placeholder="enter your email" name="email" requaired>
                    </div>
                    <div class="inputBox">
                            <span>payment method</span>
                            <select name="method">
                                <option value="cash on delivery" selected>cash on delivery</option>
                                <option value="credit cart" selected>credit cart</option>
                                <option value="paypal" selected>paypal</option>

                    </div>


                </div>
                <input type="submit" placeholder="order now" name="order_btn" class="btn">

            </form>
        </section>
    </div>
    
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>