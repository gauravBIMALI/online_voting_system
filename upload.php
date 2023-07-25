<?php
// Make sure the connection to the database is established
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        // Get the image data
        $image_name = $_FILES["image"]["name"];
        $image_tmp_path = $_FILES["image"]["tmp_name"];

        // Destination folder for uploaded images
        $upload_folder = "uploads1/";

        // Move the uploaded image to the destination folder
        $destination = $upload_folder . $image_name;
        if (move_uploaded_file($image_tmp_path, $destination)) {
            // Image uploaded successfully, now insert the image path into the database
            $sql = "INSERT INTO registration (photo) VALUES ( ?)";
            $stmt = $connect->prepare($sql);
            $stmt->bind_param("s", $destination);

            if ($stmt->execute()) {
                echo "Image uploaded and saved successfully!";
            } else {
                // echo "Error inserting image path into the database: "
                //  . $conn->error;
                echo"unexpected error occure";
            }

            $stmt->close();
        } else {
            echo "Error moving the uploaded image to the destination folder.";
        }
    } else {
        echo "Error: " . $_FILES["image"]["error"];
    }
}
?>

