
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
                    <li><a href="login-signup.php">LogIn &nbsp;|</a></li>
                    <li><a href="login-signup.php">SignUp</a></li>
                </ul>
            </nav>
            <!--select query-->
            <?php
            include 'connect.php';
            if (empty($id)) {
                $id = 10; // Set $id to 10 for guest users
            }else{
                $id=$_SESSION['user_id'];
            }
            
            

            
            $select_product = mysqli_query($conn, "Select * from `cart` where user_id=$id") or die('Query failed');
            $row_count = mysqli_num_rows($select_product);
            ?>
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i><span><sup>
                        <?php echo $row_count ?>
                    </sup></span></a>
            <img src="images/user.png" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="images/user.png">
                        <?php
    // Check if the username is set in the session
    if (isset($_SESSION['username'])) {
        echo '<h3>' . $_SESSION['username'] . '</h3>';
    } else {
        echo '<h3>Guest</h3>';
    }
    ?>
                    </div>
                    <hr>
                    <a href="edit_profile.php" class="sub-menu-link">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p> Edit Profile</p>
                        <span>></span>
                    </a>
                    <a href="" class="sub-menu-link">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <p> Settings & Privacy</p>
                        <span>></span>
                    </a>
                    <a href="" class="sub-menu-link">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <p> Help & Support</p>
                        <span>></span>
                    </a>
                   
                        
                        <?php echo '<a href="credintials.php?logout=true" class="sub-menu-link"><i class="fa fa-sign-out" aria-hidden="true"></i><p>Logout</p><span>></span></a>'; ?>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>