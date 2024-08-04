<?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "project";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpw = $_POST['confirmpw'];

        if ($password != $confirmpw) {
            echo "Passwords do not match. Please try again.";
            exit();
        }

        $sql = "SELECT * FROM signup WHERE username = '$username' AND email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 0) {
            echo "Invalid username or email. Please try again.";
            exit();
        }

        $sql = "UPDATE signup SET password = '$password' WHERE username = '$username' AND email = '$email'";
        $result = $conn->query($sql);

        if ($result) {

            header("Location: login.html");
            exit();
        } 
        
        else {
            echo "Error updating password: " . $conn->error;
        }
    }
?>
