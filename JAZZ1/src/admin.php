<?php
include 'connect.php';
if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_stock=$_POST['product_stock']; 
    $product_image = $_FILES['product_image']['name'];
    $product_image_temp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'images/newproducts/' . $product_image;

    $insert_query = mysqli_query($conn, "insert into `products` (name,price,quantity,image) values('$product_name','$product_price','$product_stock','$product_image')") or die("Insert query failed");
    if ($insert_query) {
        move_uploaded_file($product_image_temp_name, $product_image_folder);
        $display_message = "Product inserted successfully";
    } else {
        $display_message = "There is some error inserting product";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAZZ | Admin Dashboard</title>
    <link rel="stylesheet" href="styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="header">
        <div class="container-h">
            <div class="navbar">
                <div class="logo">
                    <img src="src/images/" width="125px">
                </div>
                <nav>
                    <ul>
                        <li><a href="">Add Products</a></li>
                        <li><a href="view_products.php">View Products</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <!--form section---->
    <div class="container">
        <!--Message Display-->
        <?php
        if (isset($display_message)) {
            echo "<div class='display_message'>
            <span>$display_message</span>
            <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
        </div>";
        }
        ?>

        <section>
            <h3 class="heading">Add Products</h3>
            <form action="" class="add_product" method="post" enctype="multipart/form-data">
                <input type="text" name="product_name" placeholder="Enter Product Name" class="input_fields" required>
                <input type="number" name="product_price" min="0" placeholder="Enter Product Price" class="input_fields"
                    required>
                <input type="number" name="product_stock" min="0" placeholder="Enter Available Stocks" class="input_fields"
                    required>
                <input type="file" name="product_image" class="input_fields" required
                    accept="image/png, image/jpg, image/jpeg">
                <input type="submit" name="add_product" class="submit_btn" value="Add Product">
            </form>
        </section>
    </div>
</body>

</html>