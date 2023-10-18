<?php

require "connection.php";

$id = $_SESSION['currentUser_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];

echo $id.$name.$email.$phone_no.$age.$height.$weight.$bloodGroup.$fathersName;

$qy = " update doctors set ";

if($name) $qy .= "name = '$name' ";
if($email) $qy .= ", email = '$email' ";
if($phone_no) $qy .= ", phone_no = '$phone_no' ";

$qy .= "where id = '$id' ";
echo $qy;
$result = mysqli_query($con, $qy);

if($result){
    echo $id . $name . $email . $phone_no . $age . $height . $weight . $bloodGroup . $fathersName;
    $q = " select * from doctors where id = '$id' ";

    $result = mysqli_query($con, $q);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $result = mysqli_query($con, $q);
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['currentUser_id'] = $row['id'];
            $_SESSION['currentUser'] = $row['name'];
            $_SESSION['currentUserEmail'] = $row['email'];
            $_SESSION['currentUserPhone_no'] = $row['phone_no'];
            $_SESSION['user'] = "Doctor";
            header('location:doctorProfile.php?doc_id='.$id);
        }
    } else {
        header('location:login.php');
    }
}
