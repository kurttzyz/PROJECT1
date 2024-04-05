<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("logout.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="msu.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Student portal | MSU-Maigo</title>
</head>
<body>
<?php include("fullname.php"); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 col-xl-2 p-3 bg-white">
            <a href="#" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <svg class="bi me-2" width="24" height="24"><use xlink:href="#bootstrap"></use></svg>
                <span class="image">
                  <div class="logo-container">
                    <img src="msu.png" alt="logo">
                  </div>
                </span>
            </a>
            <span class="user_fullname">
              <div class="information" style="display:flex; align-items: first baseline">
                 <?php echo $username; ?>
                 <br>
                 ID Number: <?php echo $id; ?>
                 <br>
                Grade & Section : <?php echo $course; ?>
              </div>
            </span>
            <br>
            <br>
            <ul class="list-unstyled ps-0">
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
                            <li><a href="#" class="link-dark rounded">Update Profile</a></li>
                            <li><a href="#" class="link-dark rounded"></a></li>
                            <li><a href="#" class="link-dark rounded">Settings</a></li>
                            <div class="button">
                                <form action="logout.php" method="POST">
                                    <button type="submit" class="link-dark rounded" name="logout">Sign out</button>
                                </form>
                            </div>
                        </ul>
                    </div>  
                </li>
            </ul> 
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>
