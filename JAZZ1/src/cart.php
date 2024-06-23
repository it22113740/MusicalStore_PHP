<?php
include 'connect.php';

session_start();

//update query
if (isset($_POST['update_product_quantity'])) {
    $update_value = $_POST['update_quantity'];
    //echo $update_value;
    $update_id = $_POST['update_quantity_id'];
    $id=$_SESSION['user_id'];
    $update_quantity_query = mysqli_query($conn, "update `cart` set quantity=$update_value where id=$update_id and user_id=$id");
    echo "updated Successfully";
    if ($update_quantity_query) {
        header('location:cart.php');
    }
}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    $id=$_SESSION['user_id'];
    mysqli_query($conn, "Delete from `cart` where id=$remove_id and user_id=$id");
    header('location: cart.php');
}
if (isset($_GET['delete_all'])) {
    $id=$_SESSION['user_id'];
    mysqli_query($conn, "Delete from `cart` where user_id=$id");
    header('location:cart.php');
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jazz | Online Musical Instrument store</title>
    <link rel="stylesheet" href="styles/cart-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Mooli&family=Ubuntu:wght@700&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="small-container cart-page">
        <h1>My Cart</h1>
        <table>
            <?php

if (empty($_SESSION['user_id'])) {
    $id = 10; // Set $id to 10 for guest users
}else{
    $id=$_SESSION['user_id'];
}

            $select_cart_products = mysqli_query($conn, "Select * from `cart` where user_id=$id");
            $grand_total = 0;
            if (mysqli_num_rows($select_cart_products) > 0) {
                echo "
                <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>";
                while ($fetch_cart_products = mysqli_fetch_assoc($select_cart_products)) {
                    ?>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/newproducts/<?php echo $fetch_cart_products['image'] ?>">
                                <div>
                                    <p>
                                        <?php echo $fetch_cart_products['name'] ?>
                                    </p>
                                    <small>Price: LKR
                                        <?php echo $fetch_cart_products['price'] ?>
                                    </small>
                                    <br>
                                    <a href="cart.php?remove=<?php echo $fetch_cart_products['id'] ?>"
                                        onclick="return confirm('Are You Sure You Want to delete this Item')">
                                        <i class="fas fa-trash"></i>Remove
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" value="<?php echo $fetch_cart_products['id'] ?>" name="update_quantity_id">
                                <div class="quantity_box">
                                    <div class="counter">
                                        <button id="decrement_<?php echo $fetch_cart_products['id']; ?>" class="btn_q"
                                            value="Update" name="update_product_quantity">-</button>
                                        <input type="text" id="number_<?php echo $fetch_cart_products['id']; ?>"
                                            value="<?php echo $fetch_cart_products['quantity']; ?>" name="update_quantity">
                                        <button id="increment_<?php echo $fetch_cart_products['id']; ?>" class="btn_q"
                                            value="Update" name="update_product_quantity">+</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td>LKR
                            <?php echo $subtotal = number_format($fetch_cart_products['price'] * $fetch_cart_products['quantity']) ?>
                        </td>
                    </tr>
                    <?php
                    $grand_total = $grand_total + ($fetch_cart_products['price'] * $fetch_cart_products['quantity']);
                }
            } else {
                echo "<div class='empty_text'>Cart is Empty</div>";
            }

            ?>



        </table>
        <!--php code--->
        <?php
        if ($grand_total > 0) {
            echo "<div class='last'>
            <div class='total-price'>
                <table>
                    <tr>
                        <td>Total:<span> $grand_total</span></td><br>
                        <a href='cart.php' class='btn'>Proceed to checkout</a>
                    </tr>
                </table>
            </div>
            <a href='product.php' class='btn'>Continue Shopping</a>
            <a href='cart.php?delete_all' class='btn' onclick=\"return confirm('Are You Sure You Want to delete all the Items')\"><i class='fas fa-trash'></i>Delete All</a>
        </div>";
        }
        ?>

    </div>
    <?php include 'footer.php' ?>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }

        // Modified add and min functions to take the product ID as a parameter
        function add(productId) {
            let numberInput = document.getElementById(`number_${productId}`);
            numberInput.value = parseInt(numberInput.value) + 1;
        }

        function min(productId) {
            let numberInput = document.getElementById(`number_${productId}`);
            numberInput.value = parseInt(numberInput.value) - 1;
        }

// Update event listeners for each row's increment and decrement buttons
<?php
$select_cart_products = mysqli_query($conn, "Select * from `cart`");
if (mysqli_num_rows($select_cart_products) > 0) {
    while ($fetch_cart_products = mysqli_fetch_assoc($select_cart_products)) {
        $productId = $fetch_cart_products['id'];
        echo "document.getElementById('increment_$productId').addEventListener('click', function() {
                add($productId);
            });";
        echo "document.getElementById('decrement_$productId').addEventListener('click', function() {
                min($productId);
            });";
    }
} ?>
    </script>
</body>

</html>