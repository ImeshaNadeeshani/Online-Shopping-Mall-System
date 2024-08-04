<?php

$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$password = filter_input(INPUT_POST, 'password');
$confirmPassword = filter_input(INPUT_POST, 'confirmPassword');
$accType = '';

if (!empty($email) && !empty($username)) {

    if (!empty($password)) {

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "project";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        } 
        
        else {

            if ($password != $confirmPassword) {
                echo "Passwords do not match. Please try again.";
                exit();
            }

            if (isset($_POST['customer'])) {
                $accType = 'Customer';
            } 
            
            elseif (isset($_POST['seller'])) {
                $accType = 'Seller';
            }

            $sql = "INSERT INTO signup (username, email, phone, password, accType) 
                    VALUES ('$username', '$email', '$phone', '$password', '$accType')";

            if ($conn->query($sql)) {
                header("Location: login.html");
                exit();
            } 
            
            else {
                echo "Error: " . $sql . "" . $conn->error;
            }

            $conn->close();
        }
    }
}
