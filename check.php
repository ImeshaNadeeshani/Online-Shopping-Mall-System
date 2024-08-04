<?php

$cardno = filter_input(INPUT_POST, 'cardno');
$month = filter_input(INPUT_POST, 'month');
$year = filter_input(INPUT_POST, 'year');
$cvv = filter_input(INPUT_POST, 'cvv');
$address = filter_input(INPUT_POST, 'address');

    if (!empty($cardno)) {

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "project";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        } 
        
        else {

            $sql = "INSERT INTO checkout (cardno, month, year, cvv, address) 
                    VALUES ('$cardno', '$month', '$year', '$cvv', '$address')";

            if ($conn->query($sql)) {
                header("Location: shoppingcart.php");
                exit();
            } 
            
            else {
                echo "Error: " . $sql . "" . $conn->error;
            }

            $conn->close();
        }
    }

