<?php 

session_start();

// if (!isset($_SESSION['username'])){
//     header("Location: index.php");
// }
include 'config.php';
$sessionEmail = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email='$sessionEmail'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
  $row = mysqli_fetch_assoc($result);
  $userName = $row['username'];
  $userEmail = $row['email'];
  $phoneNo = $row['phone'];
  $userAddress = $row['address'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./userProfile.css">
</head>

<body>
        <!-- <div class="userIcon container d-flex justify-content-center">
            <img src="https://img.icons8.com/ios-filled/50/000000/user-female-circle.png" />
        </div> -->
        

            <!-- Navbar starts -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="editUserProfile.php">Update Profile </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="problem_submit.php">Post Problem</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="timeline.php">Timeline</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a></a>
      </li>
    </ul>
    
  </div>
</nav> 

<!-- Navbar ends -->

        <div class="container">
                <div class="col-8">
                  <?php echo "<h4> Username: " . $userName . "</h4>"; ?>
                </div>
                <div class="col-8">
                  <?php echo "<h4> Email: " . $userEmail . "</h4>"; ?>
                </div>
                <div class="col-8">
                  <?php echo "<h4> Phone: " . $phoneNo . "</h4>"; ?>
                </div>
                <div class="col-8">
                  <?php echo "<h4> Address: " . $userAddress . "</h4>"; ?>
                </div>
        </div>


</body>

</html>