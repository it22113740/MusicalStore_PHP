<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us Section Design</title>
    <link rel="stylesheet" href="styles/aboutus.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&family=Mooli&family=Ubuntu:wght@700&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="about">
        <div class="main">
            <img src="images/products/d-4-removebg-preview.png">
            <div class="about-text">
                <h1>About <span>us</span></h1>
                <h5><span>Music On - World Off</span></h5>
                <p>"JAZZ" is an online musical instrument retailing company. We supply high quality musical equipment at
                    the most competitive and best prices. Our range of musical instruments include pianos, electric
                    guitars, guitar amps, acoustic guitars, electro acoustic guitars, bass guitars, acoustic drums,
                    electric drums, keyboards, music accessories and much more.Shopping for your musical instruments at
                    “JAZZ” is simple and enjoyable. Our customer friendly website allows you to quickly browse through
                    the huge range of musical instruments from a vast range of renowned brands.Music is pleasure, and we
                    enhance your pleasurable experience of buying a musical instrument with the best price, outstanding
                    service and quick delivery all over World.So come, explore and shop at “JAZZ”, and revel in the most
                    enthralling experience!</p>
                <button type="button">let's Talk</button>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <script>
        let subMenu = document.getElementById("subMenu");
        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>