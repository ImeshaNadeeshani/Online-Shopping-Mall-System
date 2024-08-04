<?php

session_start();

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {

    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="product.css">
</head>

<body>

    <section id="header">

        <a href="home.php"><img src="image/logo.png" alt="" id="logo"></a>

        <div id="nav">

            <a href="home.php"><button id="nbtn">Home</button></a>
            <a href="contactus.html"><button id="nbtn">Contact Us</button></a>
            <a href="aboutus.html"><button id="nbtn">About Us</button></a>
            <a href="Login.html"><button id="nbtn">Login</button></a>
            <a href="shoppincart.php"><img src="image/cart.png" alt=""></a>
        </div>
    </section>

    <section id="section">

        <div id="s_head">

            <div id="search">

                <input type="text" placeholder="Search here" id="searchbar">
                <button id="searchbtn">Search</button>
            </div>

            <h2>All products</h2>
            <p>Welcome to our comprehensive collection of products!
                <br> Here, you'll find an extensive range of carefully curated items designed to cater to your needs and preferences.
                <br> From innovative gadgets to stylish fashion accessories, from home essentials to cutting-edge technology,
                <br> our diverse selection ensures that there's something for everyone.
            </p>
        </div>

        <div id="main">

            <?php

            $pid = 1;

            $sql = "SELECT pname, price, description, phone, username FROM postAd WHERE pid = '$pid'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    $pname = $row['pname'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $phone = $row['phone'];
                    $username = $row['username'];
                }
            } else {

                echo "No products found.";
            }
            ?>

            <img src="image/products/product-1.jpg" alt="" id="mimg">
            <h3><?php echo $pname; ?></h3>
            <p id="price">$<?php echo $price; ?></p>
            <p id="des"><?php echo $description; ?></p>

            <div id="rating">

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </div>

            <div id="buy">

                <img src="image/tommy.jpg" alt="" id="brand">
                <label id="phone"><?php echo $phone; ?></label>
                <label id="seller"><?php echo $username; ?></label>
                <label id="quantity">Quantity: </label>
                <input type="number" min="1" max="5" value="0">
                <a href="checkout.html"><button type="button" id="buybtn">Buy now</button></a>
                <a href="shoppincart.php"><button type="button" id="cartbtn">Add to cart</button></a>
            </div>

            <div id="gallery">

                <img src="image/gallery/gallery-2.jpg" alt="">
                <img src="image/gallery/gallery-3.jpg" alt="">
                <img src="image/gallery/gallery-4.jpg" alt="">
            </div>

        </div>

        <div id="main">

            <?php

            $pid = 2;

            $sql = "SELECT pname, price, description, phone, username FROM postAd WHERE pid = '$pid'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    $pname = $row['pname'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $phone = $row['phone'];
                    $username = $row['username'];
                }
            } 
            
            else {

                echo "No products found.";
            }
            ?>

            <img src="image/products/product-2.jpg" alt="" id="mimg">
            <h3><?php echo $pname; ?></h3>
            <p id="price">$<?php echo $price; ?></p>
            <p id="des"><?php echo $description; ?></p>

            <div id="rating">

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>

            <div id="buy">

                <img src="image/nike.png" alt="" id="brand">
                <label id="phone"><?php echo $phone; ?></label>
                <label id="seller"><?php echo $username; ?></label>
                <label id="quantity">Quantity: </label>
                <input type="number" min="1" max="5" value="0">
                <a href="checkout.html"><button type="button" id="buybtn">Buy now</button></a>
                <a href="shoppincart.php"><button type="button" id="cartbtn">Add to cart</button></a>
            </div>

            <div id="gallery">

                <img src="image/gallery/product-10.jpg" alt="">
                <img src="image/gallery/product-11.jpg" alt="">
                <img src="image/gallery/product-5.jpg" alt="">
            </div>

        </div>

        <div id="main">

            <?php

            $pid = 3;

            $sql = "SELECT pname, price, description, phone, username FROM postAd WHERE pid = '$pid'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    $pname = $row['pname'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $phone = $row['phone'];
                    $username = $row['username'];
                }
            } 
            
            else {

                echo "No products found.";
            }
            ?>

            <img src="image/products/product-8.jpg" alt="" id="mimg">
            <h3><?php echo $pname; ?></h3>
            <p id="price">$<?php echo $price; ?></p>
            <p id="des"><?php echo $description; ?></p>

            <div id="rating">

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>

            <div id="buy">

                <img src="image/casio.png" alt="" id="brand">
                <label id="phone"><?php echo $phone; ?></label>
                <label id="seller"><?php echo $username; ?></label>
                <label id="quantity">Quantity: </label>
                <input type="number" min="1" max="5" value="0">
                <a href="checkout.html"><button type="button" id="buybtn">Buy now</button></a>
                <a href="shoppincart.php"><button type="button" id="cartbtn">Add to cart</button></a>
            </div>

            <div id="gallery">

                <img src="image/gallery/product-9.jpg" alt="">
                <img src="image/gallery/product-8.jpg" alt="">
            </div>

        </div>

        <div id="main">

            <?php

            $pid = 4;

            $sql = "SELECT pname, price, description, phone, username FROM postAd WHERE pid = '$pid'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    $pname = $row['pname'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $phone = $row['phone'];
                    $username = $row['username'];
                }
            } 
            
            else {

                echo "No products found.";
            }

            $conn->close();
            ?>


            <img src="image/products/earbud.png" alt="" id="mimg">
            <h3><?php echo $pname; ?></h3>
            <p id="price">$<?php echo $price; ?></p>
            <p id="des"><?php echo $description; ?></p>

            <div id="rating">

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </div>

            <div id="buy">

                <img src="image/apple.png" alt="" id="brand">
                <label id="phone"><?php echo $phone; ?></label>
                <label id="seller"><?php echo $username; ?></label>
                <label id="quantity">Quantity: </label>
                <input type="number" min="1" max="5" value="0">
                <a href="checkout.html"><button type="button" id="buybtn">Buy now</button></a>
                <a href="shoppincart.php"><button type="button" id="cartbtn">Add to cart</button></a>
            </div>

            <div id="gallery">

                <img src="image/gallery/eb1.jpg" alt="">
                <img src="image/gallery/eb2.jpg" alt="">
                <img src="image/gallery/eb3.png" alt="">
            </div>

        </div>
    </section>

    <section id="footer">

        <div id="links">

            <p>Quick links</p>
            <a href="home.php">Home</a><br>
            <a href="contactus.html">Contact us</a><br>
            <a href="Login.html">Login</a><br>
            <a href="privacy.html">Privacy & Policy</a>
        </div>

        <a href="home.php"><img src="image/logo.png" alt="" id="logof"></a>

        <div id="social">

            <img src="image/footer/fb.png" alt="">
            <img src="image/footer/insta.png" alt="">
            <img src="image/footer/twitter.png" alt="">
            <img src="image/footer/youtube.png" alt="">
            <img src="image/footer/email.png" alt="">
        </div>

        <div id="app">

            <p>Download App</p>
            <img src="image/footer/app.png" alt="">
        </div>

        <div id="copyrights">

            &copy;<span> 2023 MLB_14.02_08</span>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>