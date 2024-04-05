<?php 
include("database1.php");

if(isset($_POST["submit-button"])){

    $lastname = isset($_POST['lastname']) ? mysqli_real_escape_string($conn, $_POST['lastname']) :'';
    $firstname= isset($_POST['firstname']) ? mysqli_real_escape_string($conn, $_POST['firstname']) :'';
    $middlename= isset($_POST['middlename']) ? mysqli_real_escape_string($conn, $_POST['middlename']) :'';
    $email= isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) :'';
    $birthdate= isset($_POST['birthdate']) ? mysqli_real_escape_string($conn, $_POST['birthdate']) :'';
    $contact = isset($_POST['contact-number']) ? mysqli_real_escape_string($conn, $_POST['contact-number']) : '';
    $id_number= isset($_POST['id_number']) ? mysqli_real_escape_string($conn, $_POST['id_number']) :'';
    $username= isset($_POST['username']) ? mysqli_real_escape_string($conn, $_POST['username']) :'';
    $password= isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) :'';
    $strand= isset($_POST['strand']) ? mysqli_real_escape_string($conn, $_POST['strand']) :'';
    $gender= isset($_POST['gender']) ? mysqli_real_escape_string($conn, $_POST['gender']) :'';
    $user_role = "2";

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
    }else{
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO highschool(lastname, firstname, middlename, email, birthdate, contact, id_number, username, password, strand, gender, user_role) 
                VALUES ('$lastname', '$firstname', '$middlename', '$email', '$birthdate', '$contact', '$id_number', '$username', '$hashedPassword', '$strand', '$gender', '$user_role')";

                    $result = mysqli_query($conn, $query);

                if($result){
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
                }else{
                    echo "Error: " . mysqli_error($conn);
                }

    }
    mysqli_close($conn);
}
?>