<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} 

else {

    //store values

    $sellerid = "";
    $username = "";
    $email = "";
    $phone = "";

    $sql = "SELECT sellerid, username, email, phone FROM signup";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sellerid = $row['sellerid'];
            $username = $row['username'];
            $email = $row['email'];
            $phone = $row['phone'];
        }
    } 
    
    else {
        echo "No rows found in the signup table.";
    }

    //update values

    if (isset($_POST['save'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE signup SET username='$username', email='$email', phone='$phone' WHERE sellerid='$sellerid'";

        if ($conn->query($sql) === TRUE) {

            echo "Record updated successfully";
        } 
        
        else {

            echo "Error updating record: " . $conn->error;
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sellerProfile.css">
    <title>Seller Profile</title>
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

        <h2>Account settings</h2>

        <div id="profilePic">

            <form action="sellerProfile.php" method="POST" enctype="multipart/form-data">

                <img src="image/noImg.jpg" alt="" id="pPic">
                <input type="file" name="image" id="upload">
                <p>*Image size should be less than 1MB</p>

                <button type="submit" id="edit">Upload Image</button>
            </form>
            <button type="button" id="remove">Remove</button>
        </div>

        <form action="sellerprofile.php" method="post" id="form">
            <div id="inputField">
                <span for="">Personal info</span><br>
                <input type="hidden" name="sellerid" value="<?php echo $sellerid; ?>">
                <input type="text" placeholder="Seller Id" name="sellerid" value="<?php echo $sellerid; ?>" readonly>
                <input type="text" placeholder="User name" name="username" value="<?php echo $username; ?>">
                <input type="email" placeholder="Email address" name="email" value="<?php echo $email; ?>">
                <input type="tel" placeholder="Phone number" name="phone" value="<?php echo $phone; ?>" minlength="9">
                <input type="text" placeholder="Address" name="address" value="no 07 colombo">

                <button type="submit" id="save" name="save">Save</button>
                <button type="button" id="delete" name="delete">Delete</button>
            </div>
        </form>
        <div id="vmanage">

            <a href="postAd.html"><button type="button" id="ad">Post an Ad</button></a>
            <a href="forgotpw.html"><button type="button" id="pw">Change password</button></a>
            <a href="product.html"><button type="button" id="myAd">My Ads</button></a>
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
        // sellerProfile remove image

        let image = document.getElementById("pPic");
        let remove = document.getElementById("remove");

        remove.onclick = function() {

            image.src = "image/noImg.jpg";
        }

        //change image

        let imgInput = document.getElementById("upload");

        imgInput.addEventListener("change", function(change) {

            let file = change.target.files[0];
            let reader = new FileReader();

            reader.onload = function(newImg) {
                image.src = newImg.target.result;
            };

            reader.readAsDataURL(file);
        });
    </script>
</body>

</html>