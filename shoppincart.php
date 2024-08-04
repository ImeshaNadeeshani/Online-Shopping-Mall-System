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
    <title>Shopping cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="shoppingcart.css">
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

        <div id="btnField">

            <button id="btn1">Order1</button>
            <button id="btn2" disabled>Order2</button>
            <button id="btn3" disabled>Order3</button>
            <button id="btn4" disabled>Order4</button>
        </div>

        <div id="d1">

            <div>

                <?php

                $pid = 1;

                $sql = "SELECT price FROM postAd WHERE pid = '$pid'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $price = $row['price'];
                    }
                } else {

                    echo "No products found.";
                }
                ?>

                <img src="image/products/product-1.jpg" alt="" id="p">
                <p id="price">$<?php echo $price; ?></p>
                <input type="number" min="1" max="5" required id="qnt" value="0">
                <button type="button" id="remove" onclick="remove()">Remove</button>
            </div>

            <hr>
        </div>

        <div id="d2">

            <div>

                <?php

                $pid = 2;

                $sql = "SELECT price FROM postAd WHERE pid = '$pid'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $price = $row['price'];
                    }
                } else {

                    echo "No products found.";
                }
                ?>

                <img src="image/products/product-2.jpg" alt="" id="p">
                <p id="price">$<?php echo $price; ?></p>
                <input type="number" min="1" max="5" required id="qnt" value="0">
                <button type="button" id="remove" onclick="remove()">Remove</button>
            </div>

            <hr>
        </div>

        <div id="d3">

            <div>

                <?php

                $pid = 3;

                $sql = "SELECT price FROM postAd WHERE pid = '$pid'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $price = $row['price'];
                    }
                } else {

                    echo "No products found.";
                }
                ?>

                <img src="image/products/product-8.jpg" alt="" id="p">
                <p id="price">$<?php echo $price; ?></p>
                <input type="number" min="1" max="5" required id="qnt" value="0">
                <button type="button" id="remove" onclick="remove()">Remove</button>
            </div>

            <hr>
        </div>

        <div id="d4">

            <div>

                <?php

                $pid = 4;

                $sql = "SELECT price FROM postAd WHERE pid = '$pid'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $price = $row['price'];
                    }
                } else {

                    echo "No products found.";
                }
                ?>

                <img src="image/products/earbud.png" alt="" id="p">
                <p id="price">$<?php echo $price; ?></p>
                <input type="number" min="1" max="5" required id="qnt" value="0">
                <button type="button" id="remove" onclick="remove()">Remove</button>
            </div>

            <hr>
        </div>
        <div>

            <p id="total">$10.00</p>
            <a href="checkout.html"><button type="button" id="check">Checkout</button></a>
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

    <script>
        //manage cart

        var newImg = document.getElementById("p");
        var price = document.getElementById("price");
        var total = document.getElementById("total");

        document.addEventListener("click", function() {

            remove();
        });

        function remove(){
            newImg.src = "image/noImg.jpg";
            price.innerHTML = 0;

            var newtotal = parseInt(total.innerHTML) - parseInt(price.innerHTML);
            total.innerHTML = newtotal;
        }

        // orders

        var d1 = document.getElementById("d1");
        var d2 = document.getElementById("d2");
        var d3 = document.getElementById("d3");
        var d4 = document.getElementById("d4");

        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");
        var btn3 = document.getElementById("btn3");
        var btn4 = document.getElementById("btn4");

        btn1.addEventListener("click", function() {
            d1.style.display = "block";
            d2.style.display = "none";
            d3.style.display = "none";
            d4.style.display = "none";
            btn2.removeAttribute("disabled");
        });

        btn2.addEventListener("click", function() {
            d1.style.display = "block";
            d2.style.display = "block";
            d3.style.display = "none";
            d4.style.display = "none";
            btn3.removeAttribute("disabled");
        });

        btn3.addEventListener("click", function() {
            d1.style.display = "block";
            d2.style.display = "block";
            d3.style.display = "block";
            d4.style.display = "none";
        });

        btn4.addEventListener("click", function() {
            d1.style.display = "block";
            d2.style.display = "block";
            d3.style.display = "block";
            d4.style.display = "block";
        });
    </script>
</body>

</html>