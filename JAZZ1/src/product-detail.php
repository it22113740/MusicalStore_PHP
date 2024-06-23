<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jazz | Online Musical Instrument store</title>
    <link rel="stylesheet" href="styles/index-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&family=Mooli&family=Ubuntu:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'header.php'; ?>
    <!----single product-->
    <div class="smallcontainer single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/products/p-6.jpg" width="100%" id="productImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/products/p-6.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/products/p-6-4.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/products/p-6-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/products/p-6-3.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home / Musical Instrument</p>
                <h1>Piano By Sony</h1>
                <h4>LKR 50 000.00</h4>
                <select>
                    <option>Select Colour</option>
                    <option>Select Size</option>
                    <option>Select Size</option>
                    <option>Select Size</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>
                    Curabitur lectus justo, faucibus ut rhoncus non, aliquam et eros. Phasellus sit amet ultricies orci.
                    Curabitur fermentum felis a tellus rhoncus eleifend. Fusce id ante tempor est vulputate suscipit
                    vitae sit amet risus. Nulla facilisi. Nullam sit amet rhoncus velit. Sed diam nulla, accumsan eget
                    malesuada a, sagittis eu nunc. Maecenas viverra cursus eros, sit amet accumsan turpis porta vitae.
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce
                    non semper ante. Pellentesque malesuada massa cursus odio sagittis vestibulum eu non sem. Mauris
                    placerat vestibulum urna non pharetra.
                </p>
            </div>
        </div>
    </div>
    <!----title-->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p><a>View more</a></p>
        </div>
    </div>
    <!----Featured products-->
    <div class="small-container">

        <div class="row">
            <div class="col-4">
                <img src="images/products/m-5.jpg">
                <h4>Piano</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>LKR 50 000.00</p>
            </div>
            <div class="col-4">
                <img src="images/products/d-5.jpg">
                <h4>Piano</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>LKR 50 000.00</p>
            </div>
            <div class="col-4">
                <img src="images/products/p-7.jpg">
                <h4>Piano</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>LKR 50 000.00</p>
            </div>
        </div>
    </div>
    <!---Footer-->
    <?php include 'footer.php' ?>
    <!-------JS for PRoduct Gallery-->
    <script>
        var productImg = document.getElementById("productImg");
        var smallImg = document.getElementsByClassName("small-img");
        smallImg[0].onclick = function () {
            productImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function () {
            productImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function () {
            productImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function () {
            productImg.src = smallImg[3].src;
        }
        let subMenu = document.getElementById("subMenu");
        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>