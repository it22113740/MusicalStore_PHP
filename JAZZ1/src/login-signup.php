<?php
include 'credintials.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAZZ | Login</title>
    <link rel="stylesheet" href="styles/login-signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&family=Mooli&family=Ubuntu:wght@700&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="src/images/" width="125px">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="aboutus.php">About</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                        <li><a href="login-signup.php">LogIn |</a></li>
                        <li><a href="login-signup.php">SignUp</a></li>
                    </ul>
                </nav>
                
            </div>
        </div>
    </div>
    <!------------------------account page---------------------------->

    <div class="account_page">
        <div class="container">
            <div class="row">
                <div class="col 2">
                    <img src="images/yarl2-removebg-preview.png" width="200px">
                </div>

                <div class="col 2">
                    <div class="form_container">
                        <div class="form_btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>

                        <form id="loginform" method="post">

                            <input type="text" placeholder="UserName" name="un"><br>
                            <input type="password" placeholder="Password" name="pw"><br>
                            <input type="submit" class="btn" name="lbtn" value="Login"><br>
                            <?php
                            if (isset($display_message)) {

                                echo "<div class='display_message'>
                                    $display_message
                                    <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
                                </div>";

                            }
                            ?>

                            <a href="">Forgot Password</a>
                        </form>

                        <form id="regform" method='post'>
                            <input type="text" placeholder="Username" name="un" required><br>
                            <input type="text" placeholder="Email" name="email" required><br>
                            <input type="password" placeholder="Password" name="pw" id="password" required><br>
                            <input type="password" placeholder="Re-Enter Password" id="repassword" required><br>
                            <input type="submit" class="btn" name="sbtn" value="Register" id ="su_btn"><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------------------------footer------------------------------->

    <?php include 'footer.php' ?>
    <!--------------------------function--------------------------->
    <script>
        var loginform = document.getElementById("loginform");
        var regform = document.getElementById("regform");
        var indicator = document.getElementById("indicator");

        var pass = document.getElementById("password");
        var repass = document.getElementById("repassword");
        var sb = document.getElementById("su_btn");

        pass.addEventListener("input", validatePassword);
        repass.addEventListener("input", validatePassword);

        function register() {
            regform.style.transform = "translateX(0px)";
            loginform.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";
        }

        function login() {
            regform.style.transform = "translateX(300px)";
            loginform.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";
        }

        function validatePassword() {
            const cpass = pass.value;
            const crepass = repass.value;

            if (cpass === crepass) {
                sb.disabled = false;
            } else {
                sb.disabled = true;
            }
        }
    </script>
</body>

</html>