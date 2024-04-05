<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<div id="update-profile-form" class="collapse">
    <form action="update_profile.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm_password" required>
        </div>
        <div class="mb-3">
            <label for="profile-picture" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" id="profile-picture" name="profile_picture" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>

    
</body>
</html>


