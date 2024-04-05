<?php
session_start(); 
include("database1.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $collegeQuery = "SELECT * FROM faculty WHERE username = ?";
    $stmt = mysqli_prepare($conn, $collegeQuery);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $collegeResult = mysqli_stmt_get_result($stmt);
    $collegeRow = mysqli_fetch_assoc($collegeResult);

    if ($collegeRow) {
        if (password_verify($password, $collegeRow['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $collegeRow['user_id'];
            $_SESSION['user_role'] = "collegestudent";

            if ($collegeRow['user_role'] == 3) {
               echo "<script>
               Swal.fire({
                   icon: 'success',
                   title: 'Login successful!',
                   text: 'Redirecting to college portal...'
               });
           
               setTimeout(function() {
                   window.location = '/practice/msumaigo/account/login/dashboard';
               }, 1000); 
           </script>
           ";
           exit();
            }
        } else {
            
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Incorrect username or password!'
                    }).then(function() {
                        window.location = '/practice/msumaigo/account/login';
                    } 
                  </script>";
            exit();
        }
    } else {
        // Check for high school users
        $highschoolQuery = "SELECT * FROM highschool WHERE username = ?";
        $stmt = mysqli_prepare($conn, $highschoolQuery);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $highschoolResult = mysqli_stmt_get_result($stmt);
        $highschoolRow = mysqli_fetch_assoc($highschoolResult);

        if ($highschoolRow) {
            if (password_verify($password, $highschoolRow['password'])) {
                // High school student login successful
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $highschoolRow['user_id'];
                $_SESSION['user_role'] = 'highschoolstudent';

                if ($highschoolRow['user_role'] == 2) {
                echo  "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Login successful!',
                    text: 'Redirecting to senior high school portal...'
                });
            
                setTimeout(function() {
                    window.location = '/practice/msumaigo/account/login/dashboard/index copy.php';
                }, 1000); 
            </script>
            ";
            exit();;
                }
            } else {
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Incorrect username or password!'
                        }).then(function() {    
                            window.location = '/practice/msumaigo/account/login';
                        });
                      </script>";
                exit();
            }
        } else {
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'User not found!'
                    }).then(function() {
                        window.location = '/practice/msumaigo/account/login';
                    });
                  </script>";
            exit();
        }
    }
}

mysqli_close($conn);
?>
