<?php

include("database1.php");

if (isset($_POST["submit-button"])) {
   
    $lastname = isset($_POST['lastname']) ? mysqli_real_escape_string($conn, $_POST['lastname']) : '';
    $firstname = isset($_POST['firstname']) ? mysqli_real_escape_string($conn, $_POST['firstname']) : '';
    $middlename = isset($_POST['middlename']) ? mysqli_real_escape_string($conn, $_POST['middlename']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $birthdate = isset($_POST['birthdate']) ? mysqli_real_escape_string($conn, $_POST['birthdate']) : '';
    $contact = isset($_POST['contact']) ? mysqli_real_escape_string($conn, $_POST['contact']) : '';
    $ID = isset($_POST['ID']) ? mysqli_real_escape_string($conn, $_POST['ID']) : '';
    $username = isset($_POST['username']) ? mysqli_real_escape_string($conn, $_POST['username']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : '';
    $gender = isset($_POST['gender']) ? mysqli_real_escape_string($conn, $_POST['gender']) : '';
    $course = isset($_POST['course']) ? mysqli_real_escape_string($conn, $_POST['course']) : '';
    $yearlevel = isset($_POST['yearlevel']) ? mysqli_real_escape_string($conn, $_POST['yearlevel']) : '';
    $user_role = "3";

    if(empty($username) || empty($password)){
        echo '<script>
            window.onload = function() {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please enter a correct Information!",
                });
            };
            </script>';
    } else {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO faculty (lastname, firstname, middlename, email, birthdate, contact, ID, username, password, gender, course, yearlevel, user_role)
                VALUES ('$lastname', '$firstname', '$middlename', '$email', '$birthdate', '$contact', '$ID', '$username', '$hashedPassword', '$gender', '$course', '$yearlevel', '$user_role')";

        
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>
            window.onload = function() {
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Registration successful. Redirecting to login page...",
                }).then(function() {
                    window.location.href = "/practice/msumaigo/account/login";
                });
            };
            </script>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
?>
