<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("database1.php");
        if(isset($_POST['submit'])) {
            $file_name = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            $folder = 'dashboard/'.$file_name;

            $sql = mysqli_query ($conn, "INSERT INTO picture (file) VALUES ('$file_name')");

            if(move_uploaded_file($tempname, $folder)) {
                echo "<h2>FILE UPLOADED SUCCESSFULLY</h2>"; 
        }else{
            echo "<h2>FILE NOT UPLOADED</h2>";
        }
    }

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile | Mindanao State University Maigo</title>
    <link rel="icon" href="msu.png" type="image/x-icon">
</head>
<body>
<style>
    *{
        margin:0;
        padding:0;
    }
    .collapse{
        border: 2px solid black;
        box-sizing: border-box;
    }
   
   #update-profile-form {
       margin-top: 20px;
   }
   
   #update-profile-form form {
       max-width: 400px;
       margin: 0 auto;
   }
   
   #update-profile-form .form-label {
       font-weight: bold;
   }
   
   #update-profile-form .form-control {
       margin-bottom: 15px;
   }
   
   #update-profile-form .btn-primary {
       width: 100%;
   }
   
   #update-profile-form .form-group {
       margin-bottom: 15px;
   }
   
   #update-profile-form label.error {
       color: red;
       font-size: 14px;
   }
   
   #update-profile-form .success-message {
       color: green;
       font-size: 14px;
       margin-top: 10px;
   }
       </style>
    <form method="POST" enctype="multipart/form-data">

       
            <!-- <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <label for="password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm_password" required> -->
            <label for="profile-picture" class="form-label">Profile Picture</label>
            <input type="file" name="image">
            <button type="submit" name="submit">Update Profile</button>
        </div>
    </form>
    <div>
        <?php 
        $res = mysqli_query($conn,"SELECT * FROM picture");
        while($row = mysqli_fetch_assoc($res)) {
        ?>
        <img src="dashboard/<?php echo $row['file'] ?>" />
        <?php } ?>
    </div>

</body>
</html>
<?php

// Function to retrieve ID picture based on user ID
function getIDPicture($userID, $conn) {
    $query = "SELECT id_picture_path FROM users WHERE user_id = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param("s", $userID);
    $statement->execute();
    $result = $statement->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['id_picture_path'];
    } else {
        return "ID picture not found for the given user ID";
    }
}

// Example usage
$userID = $_GET['userID'];  // Assuming the user ID is obtained from the request (you should sanitize and validate user input)
$idPicturePath = getIDPicture($userID, $conn);  // Retrieve ID picture path from the database

// Output/display the ID picture based on the retrieved path
if ($idPicturePath !== "ID picture not found for the given user ID") {
    echo '<img src="' . $idPicturePath . '" alt="ID Picture">';
} else {
    echo $idPicturePath;
}

// Close connection
$conn->close();
?> 
