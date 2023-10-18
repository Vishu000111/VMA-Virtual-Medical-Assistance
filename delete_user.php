<?php

require "connection.php";

// $user_id = $_POST["user_id"];
$user_id = $_SESSION["currentUser_id"];

if( $_SESSION['user'] == "Patient"){
    $sql = "DELETE FROM users WHERE id=".$user_id." ";
}else if( $_SESSION['user'] == "Doctor"){
    $sql = "DELETE FROM doctors WHERE id=".$user_id." ";
}

if (mysqli_query($con, $sql)) {
    $msg = "Record deleted successfully";
    // header('location:logout.php');
    return $msg;
} else {
    $msg = "Error deleting record";
    return $msg;
}


?>