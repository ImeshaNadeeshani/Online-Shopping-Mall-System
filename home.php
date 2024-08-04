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
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
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

    <section id="hero">

        <div id="search">

            <input type="text" placeholder="Search here" id="searchbar">
            <a href="product.php"><button id="searchbtn">Search</button></a>
        </div>

        <div id="content">

            <h2>Discover a world of endless possibilities, <br><span>just a click away.</span></h2>
            <p>Welcome to our online shopping mall, where convenience meets endless possibilities! Explore a world of
                shopping right at your fingertips.
                <br> Discover a diverse collection of products, from fashion and accessories to electronics, home decor,
                and much more.
            </p>

            <a href="product.php"><button type="button">Shop more</button></a>
        </div>
    </section>

    <section id="section">

        <h2>Popular brands</h2>

        <div id="div">

            <div id="brand">

                <img src="image/nike.png" alt="">
            </div>

            <div id="brand">

                <img src="image/logo-godrej.png" alt="">
            </div>

            <div id="brand">

                <img src="image/apple.png" alt="">
            </div>

            <div id="brand">

                <img src="image/tommy.jpg" alt="">
            </div>

            <div id="brand">

                <img src="image/Nestle-Logo.png" alt="">
            </div>
        </div>

    </section>

    <section id="section">

        <h2>Featured products</h2>

        <div id="products">

            <div>

                <?php

                $pid = 1;

                $sql = "SELECT pname, price, description FROM postAd WHERE pid = '$pid'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $pname = $row['pname'];
                        $price = $row['price'];
                        $description = $row['description'];
                    }
                } else {

                    echo "No products found.";
                }
                ?>

                <a href="product.php"><img src="image/products/product-1.jpg" alt=""></a>
                <h4><?php echo $pname; ?></h4>
                <p><?php echo $description; ?></p>
                <p id="price">$<?php echo $price; ?></p>
                <a href="shoppincart.php"><img src="image/cart2.png" alt="" id="cart"></a>

            </div>

            <div>

                <?php

                $pid = 4;

                $sql = "SELECT pname, price, description FROM postAd WHERE pid = '$pid'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $pname = $row['pname'];
                        $price = $row['price'];
                        $description = $row['description'];
                    }
                } else {

                    echo "No products found.";
                }
                ?>

                <a href="product.php"><img src="image/products/earbud.png" alt=""></a>
                <h4><?php echo $pname; ?></h4>
                <p><?php echo $description; ?></p>
                <p id="price">$<?php echo $price; ?></p>
                <a href="shoppincart.php"><img src="image/cart2.png" alt="" id="cart"></a>
            </div>

            <div>

                <?php

                $pid = 3;

                $sql = "SELECT pname, price, description FROM postAd WHERE pid = '$pid'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $pname = $row['pname'];
                        $price = $row['price'];
                        $description = $row['description'];
                    }
                } else {

                    echo "No products found.";
                }
                ?>

                <a href="product.php"><img src="image/products/product-8.jpg" alt=""></a>
                <h4><?php echo $pname; ?></h4>
                <p><?php echo $description; ?></p>
                <p id="price">$<?php echo $price; ?></p>
                <a href="shoppincart.php"><img src="image/cart2.png" alt="" id="cart"></a>
            </div>

            <div>

                <?php

                $pid = 2;

                $sql = "SELECT pname, price, description FROM postAd WHERE pid = '$pid'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $pname = $row['pname'];
                        $price = $row['price'];
                        $description = $row['description'];
                    }
                } else {

                    echo "No products found.";
                }
                ?>

                <a href="product.php"><img src="image/products/product-2.jpg" alt=""></a>
                <h4><?php echo $pname; ?></h4>
                <p><?php echo $description; ?></p>
                <p id="price">$<?php echo $price; ?></p>
                <a href="shoppincart.php"><img src="image/cart2.png" alt="" id="cart"></a>
            </div>

            <a href="product.php"><button type="button">Explore more</button></a>
        </div>
    </section>

    <section id="section">

        <h2>Flash deals</h2>

        <div id="box">

            <img src="image/flash.png" alt="">
            <h3>Grab the hottest deals!</h3>
            <h5>"Unlock Savings Up to <span id="span1"> 50% </span>Off: <br>Don't Miss Out on Our Limited-Time Offer!"
            </h5>
            <span id="span2">Ending in</span>
            <p id="countdown"></p>
            <button>Buy now</button>
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