<?php
session_start();

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (!empty($email) && !empty($password)) {

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "project";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {

        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    } 
    
    else {

        $sql = "SELECT * FROM signup";

        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {

            if ($row['email'] === $email && $row['password'] === $password) {

                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                
                header("Location: redirect.html");
                exit();
            }
        }

        echo "Invalid email or password.";

        $conn->close();
    }
}
?>