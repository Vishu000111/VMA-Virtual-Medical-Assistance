<?php

require "connection.php";

$id = $_SESSION['currentUser_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bloodGroup = $_POST['bloodGroup'];
$birthMark = $_POST['birthMark'];
$fathersName = $_POST['fathersName'];
$mothersName = $_POST['mothersName'];

echo $id.$name.$email.$dob.$age.$height.$weight.$bloodGroup.$fathersName;

$qy = " update users set ";

if($name) $qy .= "name = '$name' ";
if($email) $qy .= ", email = '$email' ";
if($dob) $qy .= ", dob = '$dob' ";
if($age) $qy .= ", age = '$age' ";
if($height) $qy .= ", height = '$height' ";
if($weight) $qy .= ", weight = '$weight' ";
if($bloodGroup) $qy .= ", bloodGroup = '$bloodGroup' ";
if($birthMark) $qy .= ", birthMark = '$birthMark' ";
if($fathersName) $qy .= ", fathersName = '$fathersName' ";
if($mothersName) $qy .= ", mothersName = '$mothersName' ";

$qy .= "where id = '$id' ";
echo $qy;
$result = mysqli_query($con, $qy);

if($result){
    echo $id . $name . $email . $dob . $age . $height . $weight . $bloodGroup . $fathersName;
    $q = " select * from users where id = '$id' ";

    $result = mysqli_query($con, $q);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $result = mysqli_query($con, $q);
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['currentUser_id'] = $row['id'];
            $_SESSION['currentUser'] = $row['name'];
            $_SESSION['currentUserEmail'] = $row['email'];
            $_SESSION['currentUserDOB'] = $row['dob'];
            $_SESSION['currentUserAge'] = $row['age'];
            $_SESSION['currentUserHeight'] = $row['height'];
            $_SESSION['currentUserWeight'] = $row['weight'];
            $_SESSION['currentUserBloodGroup'] = $row['bloodGroup'];
            $_SESSION['currentUserBirthMark'] = $row['birthMark'];
            $_SESSION['currentUserFathersName'] = $row['fathersName'];
            $_SESSION['currentUserMothersName'] = $row['mothersName'];
            $_SESSION['user'] = "Patient";
            header('location:User.php?user_id='.$id);
        }
    } else {
        header('location:login.php');
    }
}

?>
