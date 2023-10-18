<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="doctors.css?v=<?= time(); ?>" />
</head>


<?php

require "connection.php";

if (!$con) {
    header('location:index.php');
}


// if (!isset($_SESSION['currentUser'])) {
//     header('location:index.php');
// }

$q = " select * from doctors where 1 ";

$result = mysqli_query($con, $q);

$doctors = "";

while ($row = mysqli_fetch_assoc($result)) {

    $doctors .= '<div class=" doctor ">
            <img src="images/doctor.jpg" alt=" ">
            <p class="doctor-name">'.$row['name'].'</p>
            <a href="doctorProfile.php?doc_id='.$row['doctor_id'].'" class="doctor-btn">View Profile</a>
            <a href="appoint.php?doc_id='.$row['doctor_id'].'" class="doctor-btn">Get Appointment</a>
        </div>';
}

?>


<body>
    <div id="bg" class="head">
        <?php
        require "partials/navbar.php";
        ?>
        <div id="main">
            <center>
                <h2 class="heading">Our Doctors Team</h2>
                <hr style="width:80vw;background-color:#f8f8f8;border:2px solid #f8f8f8;">
            </center><br>
        </div>

        </div>
        <div class="doctors-sec">
            <!-- <div class="doctor">
                <img src="images/user.jpg" alt="">
                <a href="" class="doctor-btn">View Profile</a>
                <a href="appoint.html" class="doctor-btn">Get Appointment</a>
            </div> -->
            <?php echo $doctors; ?>
        </div>
        <?php
        require "partials/footer.php"
        ?>
        </body>

        </html>