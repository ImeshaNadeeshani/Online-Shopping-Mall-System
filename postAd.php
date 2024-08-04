<?php
session_start();

$username = filter_input(INPUT_POST, 'username');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$country = filter_input(INPUT_POST, 'country');
$city = filter_input(INPUT_POST, 'city');
$zip = filter_input(INPUT_POST, 'zip');
$pname = filter_input(INPUT_POST, 'pname');
$price = filter_input(INPUT_POST, 'price');
$description = filter_input(INPUT_POST, 'description');

if (!empty($username) && !empty($pname)) {

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "project";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {

        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    } 
    
    else {

        $sql = "INSERT INTO postad (username, phone, email, country, city, zip, pname, price, description) 
                VALUES ('$username', '$phone', '$email', '$country', '$city', '$zip', '$pname', '$price', '$description')";

        if ($conn->query($sql)) {

           header("Location: product.php");
           exit();
        } 
        
        else {

            echo "Error: " . $sql . "" . $conn->error;
        }

        $conn->close();

    }$conn->close();
}

?>