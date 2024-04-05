<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("scripth.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
    <link rel="icon" href="msu.png" type="image/x-icon">
    <title>Portal signup | MSU-Maigo</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <form action="" method="POST">
        <h2 style="text-align: center">Student Portal Registration</h2>
            <div class="container">
                
                <div class="content">
                    <label for="lastname">LastName</label>
                    <input type="text" name="lastname" placeholder="Please Enter Your Last Name. [Dela Cruz]" >
                    <br>
                    <label for="firstname">FirstName</label>
                    <input type="text" name="firstname" placeholder="Please Enter Your First Name. [Dela Cruz]">
                    <br>
                    <label for="middlename">MiddleName</label>
                    <input type="text" name="middlename" placeholder="Please Enter Your Middle Name. [Dela Cruz] (Optional)">
                    <br>
                    <label for="email" >Email</label>
                    <input type="email" name="email" placeholder="Please Enter your Gmail.">
                    <br>
                    <label for="birthdate">Birthdate:</label>
                    <input type="date" id="birthday" name="birthdate">
                    <br>
                    <label for="contact-number">Contact #:</label>
                    <input type="number" id="contact-number" name="contact-number">
                    <br>
                    <label for="id_number">School ID Number</label>
                    <input type="number" name="id_number" placeholder="Please Enter Your ID Number.">
                    <br>    
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Please Enter Your Username.">
                    <br>
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Please Enter Your Password.">
                    <br>
                    <label for="strand">Strand</label>
                    <select name="strand" id="strand">
                        <option value="" disabled>Select Your Strand</option>
                        <option>STEM 11</option> 
                        <option>STEM 12</option>
                        <option>ABM 11</option>
                        <option>ABM 12</option>
                        <option>HUMMS 11</option>
                        <option>HUMMS 12</option>
                        <option>TVL 11</option>
                        <option>TVL 12</option>
                    </select>
                    <br>
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                    <option value="" disabled>Select Your Gender</option>
                    <option value="1">Female</option>
                    <option value="2">Male</option>
                    </select>
                    <br>
                    <input type="submit" class="submit-btn" name="submit-button">
                    <a href="/practice/msumaigo/account/login" style="text-align: center; text-decoration: none; color: black">Log In</a>
                    <a href="/practice/msumaigo/account" style="text-align: center; text-decoration: none; color: black">Back</a>
                    
                   
                </div>
                
    </div>
    </form>
</body>
</html>
<script>
    
    document.querySelector('form').addEventListener('submit', function(event) {
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();

        if (username === '' || password === '') {
            event.preventDefault(); 
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please enter a correct username and password!',
            });
        }
    });
</script>

