<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'project');

if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {

        $imageData = file_get_contents($_FILES['image']['tmp_name']);

        $email = $_SESSION['email'];

        $stmt = $conn->prepare("UPDATE sellerprofile SET pimage = ?");
        $stmt->bind_param("ss", $imageData, $email);

        if ($stmt->execute()) {

            echo "Image uploaded and stored in the database.";
        } 
        
        else {
            echo "Error storing image in the database.";
        }

        $stmt->close();
    }
}

$conn->close();
?>
