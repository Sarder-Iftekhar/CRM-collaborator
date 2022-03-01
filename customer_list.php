<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
        <a class="nav-link" href="wel_admin.php">Profile </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="problem_submit.php">Post Problem</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="customer_list.php">Customer List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="submitted_prob.php">Submitted Problems</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="offer_post.php">Post Offers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a></a>
      </li>
    </ul>
    
  </div>
</nav> 

<!-- Navbar ends -->




<?php
include 'config.php';

session_start();

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<H1>Customer List</H1>";
echo "<tr>";
echo "<th>Customer Id</th><th>  Customer Name</th><th>   Email</th>";
echo "</tr>";



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
			echo "<td>" . $row['userId'] . "</td>";
			echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
			echo "</tr>";

    }
} else {
    echo "0 results";
}

echo "</table>";
mysqli_close($conn);
?>


</body>
</html>