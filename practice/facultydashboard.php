<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("logout.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Portal</title>
</head>
<body>

<div class="flex-shrink-0 p-3 bg-white"  style="width: 200px">
    <a href="#" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      <span class="image">
        <img src="msu.png" alt="logo" style="width:50px";>
      </span>
      <span id="username"></span>

    </a>
    <ul class="list-unstyled ps-0">
      <!-- Faculty Content -->
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#courses-collapse" aria-expanded="true">
          Courses
        </button>
        <div class="collapse show" id="courses-collapse" >
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Add New Course</a></li>
            <li><a href="#" class="link-dark rounded">Manage Courses</a></li>
          </ul>
        </div>
      </li>
      <!-- End Faculty Content -->

      <!-- Student Management -->
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#students-collapse" aria-expanded="true">
          Student Management
        </button>
        <div class="collapse show" id="students-collapse" >
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">View Student List</a></li>
            <li><a href="#" class="link-dark rounded">Add New Student</a></li>
            <li><a href="#" class="link-dark rounded">Manage Student Grades</a></li>
          </ul>
        </div>
      </li>
      <!-- End Student Management -->

      <!-- Reports -->
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#reports-collapse" aria-expanded="true">
          Reports
        </button>
        <div class="collapse show" id="reports-collapse" >
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Generate Course Reports</a></li>
            <li><a href="#" class="link-dark rounded">View Student Reports</a></li>
          </ul>
        </div>
      </li>
      <!-- End Reports -->

      <!-- Account Management -->
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Update Profile</a></li>
            <li><a href="#" class="link-dark rounded">Change Password</a></li>
            <li><a href="msumaigo/" class="link-dark rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
      <!-- End Account Management -->
    </ul>
  </div>   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>
