<?php
include('include/header.php');
?>

<div class="container">
<form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_name" value="ad">
                <input type="hidden" name="price" value="499">
                
                <input type="hidden" name="image" value="img/men/m1.webp">
                <button type="submit" style="width: 100%; border-radius: 25px; height: 35px; background-color: rgb(148, 228, 27);">Add to Cart</button>
</form>
</div>

<?php
include('include/footer.php');
?>