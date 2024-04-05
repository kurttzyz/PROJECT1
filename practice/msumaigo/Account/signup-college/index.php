<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("scriptc.php")?> 
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
        <div class="information">
            <div class="content">
                <label for="lastname" >LastName</label>
                <input type="text" id="lastname" name="lastname" placeholder="Please Enter Your Last Name. [Dela Cruz]">
                <br>
                <label for="firstname" >FirstName</label>
                <input type="text" id="firstname" name="firstname" placeholder="Please Enter Your First Name. [Juan]">
                <br>
                <label for="middlename" >MiddleName</label>
                <input type="text" id="middlename" name="middlename" placeholder="Please Enter Your Middle  Name. [Tamad]">
                <br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Please Enter Your Gmail" > 
                <br>
                <label for="birthdate">Birthdate</label>
                <input type="date" id="birthdate" name="birthdate">
                <br>
                <label for="contact-number">Contact #:</label>
                <input type="number" id="number" name="number">
                <br>
                <label for="idnumber">School ID Number</label>
                <input type="number" id="ID" name="ID" placeholder="Please Enter Your School ID.">
                <br>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Please Enter Your Username" >
                <br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Please Enter Your Password" >
                <br>
                <label for="Gender">Gender</label>
                <select id="gender" type="gender" name="gender" >
                    <option selected disabled>Select a Gender</option>
                    <Option value="male">Male</Option>
                    <Option value="female">Female</Option>
                </select>
                <br>
                <label for="course">Course</label>
                <select id="course" name="course" >
                    <option selected disabled>Select a course</option>
                    <option>BSCS</option>
                    <option>BEEd</option>
                    <option>BTLEd IA</option>
                    <option>BTLEd HE</option>
                    <option>BSHM</option>
                    <option>BIT AT</option>
                    <option>BIT BCW</option>
                    <option>BIT DT</option>
                    <option>BIT ET</option>
                    <option>BIT FSM</option>
                    <option>BIT GFD</option>
                    <option>BIT MT</option>
                </select>
                <br>
                <label for="yearlevel">Year level</label>
                <select name="yearlevel" id="yearlevel">
                    <option selected disabled>Select a yearlevel</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>

                <button type="submit" style="margin-top: 10px" class="submit-btn" name="submit-button">Sign Up</button>
                <a href="/practice/msumaigo/account/login" type="button" style="text-align: center; text-decoration:none; color:black">Log In</a>
                <a href="/practice/msumaigo/account" style="color:black; text-decoration: none; text-align: center";>Back</a>
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

  