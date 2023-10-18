<?php require "partials/header.php" ?>
<link rel="stylesheet" type="text/css" href="User.css" />
</head>

<?php

$con = mysqli_connect('localhost', 'root');

if (!$con) {
    header('location:index.php');
}

mysqli_select_db($con, 'vmhdb_login');

// if (!isset($_SESSION['currentUser'])) {
//     header('location:index.php');
// }

$doc_id = $_GET["doc_id"];

$q = " select * from doctors where doctor_id = '$doc_id' ";

$result = mysqli_query($con, $q);

while ($row = mysqli_fetch_assoc($result)) {
    $userName = $row['name'];
    $userEmail = $row['email'];
    $userPhoneNo = $row['phone_no'];
}

?>
<script>
    function enableEditing() {
        let inputs = document.querySelectorAll("input");

        inputs.forEach(element => {
            element.removeAttribute("disabled");
        });

        document.querySelector(".submitBtn").style.display = "block";
    }

    function deleteAccount() {
        if (confirm("Are you sure, you want to delete your account?")) {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.open("POST", "delete_user.php", true); // false for synchronous request
            xmlHttp.send(null);
            alert(xmlHttp.responseText);
            xmlHttp.open("GET", "logout.php", true); // false for synchronous request
            xmlHttp.send(null);

            window.location.reload(true);
            return xmlHttp.responseText;
        }
    }
</script>

<body>
    <div class="head">
        <?php
        require "partials/navbar.php";
        ?>
    </div>
    <?php
    if (isset($_SESSION["currentUser_id"])) {
        if ($doc_id == $_SESSION["currentUser_id"]) { ?>
            <div class="main-content">
                <button class="button" onclick="enableEditing()">EDIT</button>
            </div>
        <?php }
} ?>

    <div class="main-content">

        <div class="profile-section">
            <img class="user-img" src="images/doctor.jpg" alt="">
            <?php echo '<h1>' . $userName . '</h1>'; ?>
        </div>

        <div class="information">
            <form action="updateDoctor.php" method="post">
                <div class="info-tag">
                    General Information: <br>
                </div>
                <hr>
                <div>
                    Name: <br>
                    <input type="text" name="name" class="info" placeholder="Name" value="<?php echo $userName; ?>" disabled required>
                </div>
                <div>
                    Email: <br>
                    <input type="email" name="email" class="info" placeholder="Email" value="<?php echo $userEmail; ?>" disabled required>
                </div>
                <div>
                    Phone No.: <br>
                    <input type="email" name="phone_no" class="info" placeholder="Phone Number" value="<?php echo $userPhoneNo; ?>" disabled required>
                </div>
                <div>
                    <button type="submit" class="submitBtn">Update Information</button>
                </div>
            </form>
        </div>

    </div>
    <?php
    if (isset($_SESSION["currentUser_id"])) {
        if ($doc_id == $_SESSION["currentUser_id"]) { ?>
            <div class="main-content">
                <button class="del-btn" onclick="deleteAccount()">DELETE ACCOUNT</button>
            </div>
        <?php }
} ?>

    <?php
    require "partials/footer.php"
    ?>

</body>

</html>