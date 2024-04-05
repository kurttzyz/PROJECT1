<?php


include("database1.php");

// Check if form is submitted and file is uploaded
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && isset($_FILES["image"])) {
    // Retrieve user_id (assuming it's stored in the session)
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id']; // Change this according to your session variable name

        // Check if the user already has an entry in the database
        $check_sql = "SELECT * FROM faculty WHERE user_id = $user_id";
        $stmt = $conn->prepare($check_sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {     
            // If the user already has an entry, update the existing record
            $image_path = basename($_FILES["image"]["name"]);
            $update_sql = "UPDATE faculty SET file = ? WHERE user_id = $user_id";
            $stmt = $conn->prepare($update_sql);
            $stmt->bind_param("si", $image_path, $user_id);

            if ($stmt->execute()) {
                // Display the uploaded image
                echo "Image updated successfully.";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            // If the user doesn't have an entry, insert a new record
            $target_dir = "././Images/"; // Fix the directory path with a trailing slash
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            // Check file size
            if ($_FILES["image"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            $allowed_extensions = array('jpg', 'jpeg', 'png', 'img');
            if (!in_array($imageFileType, $allowed_extensions)) {
                echo "Sorry, only JPG, JPEG, PNG, and IMG files are allowed.";
                $uploadOk = 0;
            }

            // Upload image if everything is ok
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $image_path = basename($_FILES["image"]["name"]);
                    $insert_sql = "INSERT INTO faculty (user_id, file) VALUES ($user_id, $image_path)";
                    $stmt = $conn->prepare($insert_sql);
                    $stmt->bind_param("is", $user_id, $image_path);

                    if ($stmt->execute()) {
                        echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded and saved to the database.";
                        // Display the uploaded image
                        echo '<img src="././Images/' . $image_path . '" alt="Uploaded Image">';
                    } else {
                        echo "Error inserting record: " . $conn->error;
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    } else {
        echo "Session user_id not set.";
    }

    // Close connection
    $conn->close();
} else {    
    echo "";
}
?>
