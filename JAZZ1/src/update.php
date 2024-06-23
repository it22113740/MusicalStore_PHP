<?php
include 'connect.php';
//ubdate logic

if (isset($_POST['update_product'])) {
    $update_product_id = $_POST['update_product_id'];
    $update_product_name = $_POST['update_product_name'];
    $update_product_price = $_POST['update_product_price'];
    $update_product_stock = $_POST['update_product_stock'];
    $update_product_image = $_FILES['update_product_image']['name'];
    $update_product_image_tmp_name = $_FILES['update_product_image']['tmp_name'];
    $update_product_image_folder = 'images/newproducts/' . $update_product_image;

    //update query
    $update_products = mysqli_query($conn, "Update `products` set name='$update_product_name',price='$update_product_price',stock='$update_product_stock',image='$update_product_image' where id=$update_product_id");
    if ($update_products) {
        move_uploaded_file($update_product_image_tmp_name, $update_product_image_folder);
        header('location:view_products.php');
    } else {
        $display_message = "There is some error Ubdating product";
    }
} elseif (isset($_POST['cancel_ubdate'])) {
    header('location:view_products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAZZ | Ubdate product</title>

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
        <!--php code--->
        <?php
        if (isset($_GET['edit'])) {
            $edit_id = $_GET['edit'];
            //echo $edit_id;
            $edit_query = mysqli_query($conn, "Select * from `products` where  id=$edit_id");
            if (mysqli_num_rows($edit_query) > 0) {
                $fetch_data = mysqli_fetch_assoc($edit_query);
                ?>
        <section>
            <form action="" method="post" class="update_product product_container_box" enctype="multipart/form-data">
                <img src="images/products/<?php echo $fetch_data['image'] ?>" alt="" class="product">
                <input type="hidden" value="<?php echo $fetch_data['id'] ?>" name="update_product_id">
                <input type="text" class="input_fields fields" value="<?php echo $fetch_data['name'] ?>"
                    name="update_product_name" required>
                <input type="number" class="input_fields fields" value="<?php echo $fetch_data['price'] ?>"
                    name="update_product_price" required>
                <input type="number" class="input_fields fields" value="<?php echo $fetch_data['stock'] ?>"
                    name="update_product_stock" required>
                <input type="file" class="input_fields fields" accept="image/png, image/jpg, image/jpeg"
                    name="update_product_image" required>
                <div class="btns">
                    <input type="submit" class="submit_btn" value="Update Product" name="update_product">
                    <input type="reset" id="close-edit" value="Cancel" class="submit_btn" name='cancel_ubdate'>
                </div>
            </form>
        </section>
        <?php
            }
        }
        ?>
        <!--form--->
    </div>
</body>

</html>