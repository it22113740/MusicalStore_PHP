<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/contactus_sty.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&family=Mooli&family=Ubuntu:wght@700&display=swap"
        rel="stylesheet">

</head>

<body>
    <?php include 'header.php'; ?>

    <!--------------------------contact us--------------------------------->

    <section class="contact">
        <div class="contact_form">
            <h1>Contact <span>Us</span></h1>
            <p>I am available for freelance work. Connect with me via phone:0771234567 or email: admin@example.com</p>
            <form action="">
                <input type="" placeholder="Your Name" required>
                <input type="email" name="email" id="" placeholder="E-mail" required>
                <input type="" placeholder="Write a Subject" required>
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <input type="submit" name="" value="Submit" class="btn">
            </form>
        </div>

        <div class="contact_image">
            <img src="images/violin_a-removebg-preview.png">
        </div>
    </section>

    <!------------------------footer----------------------------->
    <?php include 'footer.php' ?>

    <script>
        let subMenu = document.getElementById("subMenu");
        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>