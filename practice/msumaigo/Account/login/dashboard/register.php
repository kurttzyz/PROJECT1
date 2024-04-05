<?php 
include("database1.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    if (isset($_SESSION['user_id']) && !empty($_FILES['image']['name'])) {
        $user_id = $_SESSION['user_id'];
        $image_path = $_FILES['image']['name'];

        $check_sql = "SELECT * FROM faculty WHERE user_id = $user_id";
        $check_result = $conn->query($check_sql);

        if ($check_result && $check_result->num_rows > 0) {
            $update_sql = "UPDATE faculty SET FILE = '$image_path' WHERE user_id = $user_id";
            if ($conn->query($update_sql)) {
                $name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $folder = '././Images/';
                move_uploaded_file($tmp_name, $folder . $name);
                // File uploaded and record updated successfully
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            $insert_sql = "INSERT INTO faculty (user_id, file) VALUES ($user_id, '$image_path')";
            if ($conn->query($insert_sql)) {
                $name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $folder = '././Images/';
                move_uploaded_file($tmp_name, $folder . $name);
                // File uploaded and new record inserted successfully
            } else {
                echo "Error inserting record: " . $conn->error;
            }
        }
    } else {
       
    }
}

$conn->close();
?>
