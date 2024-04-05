<?php
include("database1.php");
$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    
    $query = "SELECT CONCAT(lastname, ', ', firstname, ', ', middlename) AS full_name FROM highschool WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $username = $user['full_name'];
    } else {
        $username = "Unknown"; 
    }
} else {
   
    header("Location: ../");
    exit(); 
}

mysqli_close($conn);
?>

<?php
include("database1.php");

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    
    $query = "SELECT * FROM highschool WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $course = $user['strand'];
    } else {
        $course = "Unknown"; 
    }
} else {
   
    header("Location: ../");
    exit(); 
}

mysqli_close($conn);
?>

<?php
include("database1.php");

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if (isset($_SESSION["user_id"])) { 
    $user_id = $_SESSION['user_id'];
    
    $query = "SELECT * FROM highschool WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $id = $user['id_number'];
    } else {
        $id = "Unknown"; 
    }
} else {
   
    header("Location: ../");
    exit(); 
}

mysqli_close($conn);
?>

