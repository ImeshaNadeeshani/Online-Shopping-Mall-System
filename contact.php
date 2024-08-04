<?php

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$msg = filter_input(INPUT_POST, 'msg');

    if (!empty($email)) {

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "project";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {

            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        } 
        
        else {

            $sql = "INSERT INTO contactus (name, email, phone, msg) 
                    VALUES ('$name', '$email', '$phone', '$msg')";

            if ($conn->query($sql)) {

                header("Location: contactus.html");
                exit();
            } 
            
            else {

                echo "Error: " . $sql . "" . $conn->error;
            }

            $conn->close();

        }
    }

?>