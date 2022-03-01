<?php
include 'config.php';

session_start();

$sql = "INSERT INTO promotional_post (post) 
       VALUES ('$_POST[offer]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>