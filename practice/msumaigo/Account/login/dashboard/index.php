<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("logout.php"); ?>
    <?php include("fullname.php"); ?>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <meta http-equiv="Expires" content="0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="msu.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Student portal | MSU-Maigo</title>
</head>
<body>

<main>
  
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 col-xl-1 p-3 bg-white">
            <div class="logo-container" >
                <?php        
                    include("register.php");       
                    echo '<img src="././Images/' . $image_path . '" alt="Uploaded Image">';
                ?>      
            </div>
         
            <div class="frame" > 
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?php $user_id ?>">
                    <br>
                    <input type="file" name="image" id="image" /><br><br>
                    <button type="submit" name="submit" >Update Profile</button>
                </form>        
            </div><br>

        
            <span class="user_fullname"> 
                <div class="information" >    
                    Name: <?php echo $username; ?>
                    <br>
                    ID: <?php echo $ids; ?>
                    <br>
                    Course: <?php echo $course; ?>
                    <br>
                    Year level: <?php echo $yearlevel; ?>
                </div>
            </span>
            <hr>
            <ul class="list-unstyled ps-0" style="text-align: center">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        Home
                    </button>   
                    <div class="collapse" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">Schedule</a></li>
                            <li><a href="#" class="link-dark rounded">Grades</a></li>
                            <li><a href="#" class="link-dark rounded">Reports</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                        Enrollment
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">1st Semester</a></li>
                            <li><a href="#" class="link-dark rounded">2nd Semester</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="./update profile.php" class="link-dark rounded">Update Profile</a></li>
                            <li><a href="#" class="link-dark rounded">Settings</a></li>
                            <div class="button">
                                <form action="logout.php" method="POST">
                                    <button type="submit" class="link-dark rounded" name="logout" style="padding:5px; margin-top:5px">Sign out</button>
                                </form>
                            </div>
                        </ul>
                    </div>  
                </li>
            </ul> 
    
        </div>

            <div class="col-md-9 col-lg-10 col-xl-11">
                <div class="table-container">
                    <table class="table table-dark table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kurt</td>
                                <td>30</td>
                                <td>Maigo</td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>25</td>
                                <td>Los Angeles</td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>25</td>
                                <td>Los Angeles</td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>


 <script>
    // JavaScript for handling modal and image upload preview

    // Function to handle displaying uploaded image in the modal
    function uploadedImage(event) {
        event.preventDefault();
        const imageFile = document.getElementById('image').files[0];
        const uploadedImage = document.getElementById('uploadedImage');
        const editModal = document.getElementById('editModal');
        const closeModal = document.getElementsByClassName('close')[0];

        const reader = new FileReader();

        reader.onload = function (e) {
            uploadedImage.src = e.target.result;
            editModal.style.display = 'none'; // Hide the modal after image upload
        };

        reader.readAsDataURL(imageFile);
    }

    // Function to open the edit modal
    document.getElementById('edit-button').onclick = function () {
        document.getElementById('editModal').style.display = 'block';
    };

    // Function to close the edit modal when clicking on the close button
    document.getElementsByClassName('close')[0].onclick = function () {
        document.getElementById('editModal').style.display = 'none';
    };

    // Function to close the edit modal when clicking outside of it
    window.onclick = function (event) {
        const editModal = document.getElementById('editModal');
        if (event.target == editModal) {
            editModal.style.display = 'none';
        }
    };
</script>
<script>
    function uploadedImage(event) {
    event.preventDefault();
    const imageFile = document.getElementById('image').files[0];
    const uploadedImage = document.getElementById('uploadedImage');
    const editModal = document.getElementById('editModal');
    const closeModal = document.getElementsByClassName('close')[0];

    const reader = new FileReader();

    reader.onload = function (e) {
        uploadedImage.src = e.target.result;
        sessionStorage.setItem('uploadedImage', e.target.result); // Store image data in session storage
        editModal.style.display = 'none'; // Hide the modal after image upload
    };

    reader.readAsDataURL(imageFile);
}

window.onload = function () {
    const storedImage = sessionStorage.getItem('uploadedImage');
    if (storedImage) {
        document.getElementById('uploadedImage').src = storedImage;
    }
};

</script>

<script>
    function uploadedImage(event) {
    event.preventDefault();
    const imageFile = document.getElementById('image').files[0];
    const uploadedImage = document.getElementById('uploadedImage');
    const editModal = document.getElementById('editModal');
    const closeModal = document.getElementsByClassName('close')[0];

    const reader = new FileReader();

    reader.onload = function (e) {
        uploadedImage.src = e.target.result;
        const userId = 'user_' + getUserId(); // Generate a unique identifier for the user
        sessionStorage.setItem(userId, e.target.result); // Store image data in session storage with unique key
        editModal.style.display = 'none'; // Hide the modal after image upload
    };

    reader.readAsDataURL(imageFile);
}

function getUserId() {
    // Replace this with your logic to get the user's ID or username
    // For example, you might fetch it from a server-side session or database
    return; // Example user ID
}

window.onload = function () {
    const userId = 'user_' + getUserId();
    const storedImage = sessionStorage.getItem(userId);
    if (storedImage) {
        document.getElementById('uploadedImage').src = storedImage;
    }
};
</script>

<script>
    function getUserIdFromServer() {
    fetch('scriptimg.php', {
        method: 'POST',
        body: new FormData(document.getElementById('update-profile-form')),
    })
    .then(response => response.text())
    .then(userId => {
        // Use the retrieved userId
        document.getElementById('uploadedImage').src = sessionStorage.getItem('user_' + userId);
    })
    .catch(error => console.error('Error:', error));
}

window.onload = function () {
    getUserIdFromServer();
};

</script>
 



