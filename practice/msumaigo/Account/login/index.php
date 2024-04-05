<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("database1.php");?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="msu.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Portal login | MSU-Maigo</title>
</head>
<body>
   
    <div class="container">
        <div class="logo-container">
            <a href="/practice/msumaigo/"><img src="msu.png" alt="logo" class="logo"></a>
        </div>
            <form method="POST">
            <h2>Log-in to MSU-Maigo Portal</h2> 
            <hr>
            <label for="username">Username</label>
            <br>
            <input type="text" id="username" name="username" placeholder="Please Enter a username" >
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" id="password" name="password" placeholder="Please Enter a password" >
    
            <button type="submit">Login</button>
        
            <p><a href="/practice/msumaigo/account" style="color: black; text-decoration: none">Back</a></p>   

            <hr>
        </form>
    </div>
</body>
</html>
<?php include("register.php"); ?>

