<?php
include 'config.php';
session_start();
$sessionEmail = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email='$sessionEmail'";
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$usernameVal = $row['username'];
		$emailVal = $row['email'];
		$phoneVal = $row['phone'];
		$addressVal = $row['address'];	
	}
	

if (isset($_POST['submit'])) {
    include 'config.php';
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	
	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 1) {
		echo "provide an unique email";
	}
	else{
		$sessionEmail = $_SESSION['email'];
		$sql = "UPDATE users SET username='$username', email='$email', phone='$phone', address='$address' 
                WHERE email='$sessionEmail'";
        mysqli_query($conn, $sql);
		if($email != ''){
			$sql = "SELECT * FROM users WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			if ($result->num_rows > 0) {
				$row = mysqli_fetch_assoc($result);
				$_SESSION['username'] = $row['username'];
				$_SESSION['email'] = $row['email'];
				header("Location: welcome.php");
			}
				
}
	}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit User Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>

<body>

            <!-- Navbar starts -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Profile </a>
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
		<form action="" method="POST">
			<div class="input-group"> 
				<label>Username: </label>
				<input type="text"  name="username" value="<?php echo $usernameVal; ?>">
			</div>
			<div class="input-group">
				<label>Email: </label>  
				<input type="email"  name="email" value="<?php echo $emailVal ?>" >
			</div>
			<div class="input-group">
				<label>Phone: </label>
				<input type="tel"  name="phone" value="<?php echo $phoneVal ?>">
			</div>
			<div class="input-group">
				<label>Address: </label>
				<input type="text"  name="address" value="<?php echo $addressVal ?>">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Update</button>
			</div>
		</form>
	</div>
    
</body>

</html>