<?php
include 'connect.php';

session_start();

if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;
    
    if (empty($id)) {
        $user_id = 10; // Set $id to 10 for guest users
    }else{
        $user_id=$_SESSION['user_id'];
    }

    //select cart data based on condition
    $select_cart = mysqli_query($conn, "Select * from `cart` where name='$product_name' and user_id=$user_id");
    if (mysqli_num_rows($select_cart) > 0) {
        $display_message[] = "Product already added to cart";
    } else {
        //insert cart data in cart table
        $insert_products = mysqli_query($conn, "insert into `cart` (name,price,image,quantity,user_id) values('$product_name',$product_price,'$product_image',$product_quantity,$user_id)");
        $display_message[] = "Product added to cart";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAZZ | shop Products</title>
    <link rel="stylesheet" href="styles/product.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&family=Mooli&family=Ubuntu:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"   />
    <!--<link rel="stylesheet" href="styles/admin.css">---->
</head>

<body>
    <?php include 'header.php'; ?>


    <div class="small-container">
        <?php
        if (isset($display_message)) {
            foreach ($display_message as $display_message) {
                echo "<div class='display_message'>
        <span>$display_message</span>
        <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
    </div>";
            }
        }
        ?>
        <div class="row row-2">
            <h2>All Products</h2>
        </div>
        <div class="row">
            <?php
            $select_products = mysqli_query($conn, "Select * from `products`");
            if (mysqli_num_rows($select_products) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                    ?>

                    <form action="" method="post">
                        <div class="col-4 single">
                            <img src="images/newproducts/<?php echo $fetch_product['image'] ?>">
                            <br><br>
                            <h3>
                                <?php echo $fetch_product['name'] ?>
                            </h3>

                            <div class="price">Price: LKR
                                <?php echo $fetch_product['price'] ?>/-
                            </div>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name'] ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price'] ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image'] ?>">
                            <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
                        </div>
                    </form>
                    <?php
                }
            } else {
                echo "No Products";
            }

            ?>

        </div>

    </div>
    <br>
    <br>
    <?php include 'footer.php' ?>
    <script>
        let subMenu = document.getElementById("subMenu");
        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

</body>

</html>