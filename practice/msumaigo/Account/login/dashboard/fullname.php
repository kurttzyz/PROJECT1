<?php
include("database1.php");
    

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $query = "SELECT CONCAT(lastname, ', ', firstname, ', ', middlename) AS full_name FROM faculty WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $username = $user['full_name'];
    } else {
        $username = "Unknown";
    }

    $query = "SELECT * FROM faculty WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $course = $user['course'];
    } else {
        $course = "Unknown";
    }

    $query = "SELECT * FROM faculty WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $yearlevel = $user['yearlevel'];
    } else {
        $yearlevel = "Unknown";
    }

    $query = "SELECT * FROM faculty WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $ids = $user['ID'];
    } else {
        $ids = "Unknown";
    }

    $query = "SELECT * FROM faculty WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $image_path = $user['file'];

        $allowed_extensions = ['jpg', 'jpeg', 'png', 'img'];
        $file_extension = pathinfo($image_path, PATHINFO_EXTENSION);

        if (in_array($file_extension, $allowed_extensions)) {
            // Handle the file extension validation or processing here
            $image_path = $user['file'];
        }
    } else {
        $image_path = 'unknown';
    }
} else {
    $image_path = 'unknown';
}

$query = "SELECT CONCAT(lastname, ', ', firstname, ', ', middlename) AS full_name FROM highschool WHERE user_id = $user_id";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $usernames = $user['full_name'];
} else {
    $usernames = "Unknown";
}

$query = "SELECT * FROM highschool WHERE user_id = $user_id";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $strand = $user['strand'];
} else {
    $strand = "Unknown";
}

$query = "SELECT * FROM highschool WHERE user_id = $user_id";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $id = $user['id_number'];
} else {
    $id = "Unknown";
}

mysqli_close($conn);
?>
