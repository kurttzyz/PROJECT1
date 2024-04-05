<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile | Mindanao State University Maigo</title>
    <link rel="icon" href="msu.png" type="image/x-icon">
    <?php include('scriptimg.php'); ?>  
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
</head>
<body>
  

    <form action="update profile.php" method="POST" enctype="multipart/form-data" id="update-profile-form">
        <input type="hidden"  value="<?php $user_id ?>">
        <label for="profile-picture">Profile Picture</label>
        <input type="file" name="image" id="image" />
        <button type="submit" name="submit" value="Upload Image">Update Profile</button>
    </form>

    
</body>
</html>
