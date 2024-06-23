<?php
include 'credintials.php';
if (isset($_GET['update_success']) && $_GET['update_success'] == 1) {
    echo "<script>alert('Profile updated successfully');</script>";
}

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
    <?php
    include 'header.php';
    ?>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="row">
                    <div class="col-2">
                        <h1>Music Unite <br>Hearts</h1>
                        <p></p>
                        <a href="" class="btn">Explore Now &#8594;</a>
                    </div>
                    <div class="col-2">
                        <img src="images/dark-rider-JmVaNyemtN8-unsplash.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------Featured categories------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/products/d-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/products/f-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/products/p-4.jpg">
                </div>
            </div>
        </div>
    </div>
    <!----Featured products-->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-detail.php">
                    <img src="images/products/d-3.jpg">
                    <h4>Piano</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>LKR 50 000.00</p>
                </a>
            </div>

            <div class="col-4">
                <img src="images/products/f-3.jpg">
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
                <img src="images/products/m-3.jpg">
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
                <img src="images/products/g-6.jpg">
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
        </div>
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/products/k-3.jpg">
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
                <img src="images/products/p-4.jpg">
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
                <img src="images/products/f-3.jpg">
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
                <img src="images/products/p-7.jpg">
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
                <img src="images/piano.jpeg">
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
                <img src="images/products/m-4.jpg">
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
                <img src="images/products/g-2.jpg">
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
        </div>
    </div>
    <!----offer-->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/products/d-4-removebg-preview.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusive Available on JAZZ</p>
                    <h1>Guittar</h1>
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis interdum turpis nulla, in
                        rhoncus turpis ullamcorper nec. Curabitur ultrices porta quam, vitae convallis est pulvinar id.
                        Vestibulum tincidunt vitae elit a ultricies. Nulla semper neque in elit ornare, vitae pulvinar
                        turpis ullamcorper. Vestibulum feugiat massa vel magna ornare, ac convallis quam fringilla.
                        Fusce vestibulum augue tempus, molestie turpis vel, tincidunt magna. Etiam dictum et lorem vel
                        pretium. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                        Phasellus vel eros massa. Proin sed tellus odio. Nullam non mollis lacus</small>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!----testimonials-->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Some Contents Replace Hear</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/a-1.webp">
                    <h3>John</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Some Contents Replace Hear</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/a-2.webp">
                    <h3>Madona</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Some Contents Replace Hear</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/a-3.jpeg">
                    <h3>Peter</h3>
                </div>
            </div>
        </div>
    </div>
    <!---brands-->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/b-1.png">
                </div>
                <div class="col-5">
                    <img src="images/b-2.jpeg">
                </div>
                <div class="col-5">
                    <img src="images/b-3.webp">
                </div>
                <div class="col-5">
                    <img src="images/b-4.jpeg">
                </div>
                <div class="col-5">
                    <img src="images/b-5.png">
                </div>
            </div>
        </div>
    </div>
    <!---Footer-->
    <?php include 'footer.php' ?>
    <script>
        let subMenu = document.getElementById("subMenu");
        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>