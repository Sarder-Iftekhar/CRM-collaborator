<?php
include 'config.php';
session_start();

$sessionEmail = $_SESSION['email'];
$sql = "SELECT userId FROM users WHERE email='$sessionEmail'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $sql = "INSERT INTO problem_submit (userId, problem, status) 
            VALUES ('$row[userId]', '$_POST[problem]', '$_POST[status]')";
            if (mysqli_query($conn, $sql)) {
                header("Location: problem_submit.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

    }

mysqli_close($conn);
?>
