<!--including php logic- connecting to database--->
<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAZZ | Admin Dashboard</title>
    <link rel="stylesheet" href="styles/view_product_style.css">
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
                        <li><a href="admin.php">Add Products</a></li>
                        <li><a href="view_products.php">View Products</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!----container--->
    <div class="container">
        <section class="display_product">

            <!--php code-->
            <?php
            $display_product = mysqli_query($conn, "Select * from `products`");
            $num = 1;
            if (mysqli_num_rows($display_product) > 0) {
                echo "    <table>
            <thead>
                <th>Serial No</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Available Stocks</th>
                <th>Product Price</th>
                <th>Action</th>
            </thead>
            <tbody>";
                //logic to fetch data
            
                while ($row = mysqli_fetch_assoc($display_product)) {
                    ?>

                    <!--Display Table-->
                    <tr>
                        <td>
                            <?php echo $num ?>
                        </td>
                        <td><img src='images/newproducts/<?php echo $row['image'] ?>' alt=<?php echo $row['name'] ?>
                                class="product"></td>
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                        <td>
                            <?php echo $row['price'] ?>
                        </td>
                        <td>
                            <?php echo $row['quantity'] ?>
                        </td>
                        <td>
                            <a href="delete.php?delete=<?php echo $row['id'] ?>" class="delete_product_btn"
                                onclick="return confirm('Are You Sure you want to delete this product');"><i
                                    class="fas fa-trash"></i></a>
                            <a href="update.php?edit=<?php echo $row['id'] ?>" class="update_product_btn"><i
                                    class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    <?php
                    $num++;
                }

            } else {
                echo "<div class='empty_text'>No Products Available</div>";
            }
            ?>

            </tbody>
            </table>
        </section>
    </div>
</body>

</html>