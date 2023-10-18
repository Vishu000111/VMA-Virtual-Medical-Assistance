<?php require "partials/header.php" ?>
<link rel="stylesheet" href="User.css?v=<?= time(); ?>" />
</head>

<?php

$con = mysqli_connect('localhost', 'root');

if (!$con) {
    header('location:index.php');
}

mysqli_select_db($con, 'vmhdb_login');

if (!isset($_SESSION['currentUser'])) {
    header('location:index.php');
}

$user_id = $_GET["user_id"];

$q = " select * from users where id = '$user_id' ";

$result = mysqli_query($con, $q);

while ($row = mysqli_fetch_assoc($result)) {
    $userName = $row['name'];
    $userEmail = $row['email'];
    $userDOB = $row['dob'];
    $userAge = $row['age'];
    $userHeight = $row['height'];
    $userWeight = $row['weight'];
    $userBloodGroup = $row['bloodGroup'];
    $userBirthMark = $row['birthMark'];
    $userFathersName = $row['fathersName'];
    $userMothersName = $row['mothersName'];
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
            xmlHttp.open("POST", "delete_user.php", false); // false for synchronous request
            xmlHttp.send(null);

            xmlHttp.open("GET", "logout.php", false); // false for synchronous request
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
    <?php if ($user_id == $_SESSION["currentUser_id"]) { ?>
        <div class="main-content">
            <button class="button" onclick="enableEditing()">EDIT</button>
        </div>
    <?php } ?>

    <div class="main-content">

        <div class="profile-section">
            <img class="user-img" src="images/user.png" alt="">
            <?php echo '<h1>' . $userName . '</h1>'; ?>
        </div>

        <div class="information">
            <form action="updateUser.php" method="post">
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
                    DOB: <br>
                    <input type="date" name="dob" class="info" placeholder="date of birth" value="<?php echo $userDOB; ?>" disabled>
                </div>

                <div class="info-tag">
                    Health Information: <br>
                </div>
                <hr>
                <div>
                    Age: <br>
                    <input type="number" name="age" class="info" placeholder="Age(in years)" value="<?php echo $userAge; ?>" disabled>
                </div>
                <div>
                    Height: <br>
                    <input type="number" name="height" class="info" placeholder="Height(in centimeters)" value="<?php echo $userHeight; ?>" disabled>
                </div>
                <div>
                    Weight: <br>
                    <input type="number" name="weight" class="info" placeholder="Weight(in KGs)" value="<?php echo $userWeight; ?>" disabled>
                </div>
                <div>
                    Blood Group: <br>
                    <input type="text" name="bloodGroup" class="info" placeholder="Blood Group" maxlength="3" value="<?php echo $userBloodGroup; ?>" disabled>
                </div>
                <div>
                    Birth Mark: <br>
                    <input type="text" name="birthMark" class="info" placeholder="Birth Mark(if any)" value="<?php echo $userBirthMark; ?>" disabled>
                </div>

                <div class="info-tag">
                    Family Information: <br>
                </div>
                <hr>
                <div>
                    Father's Name: <br>
                    <input type="text" name="fathersName" class="info" placeholder="Father's Name" value="<?php echo $userFathersName; ?>" disabled>
                </div>
                <div>
                    Mother's Name: <br>
                    <input type="text" name="mothersName" class="info" placeholder="Mother's Name" value="<?php echo $userMothersName; ?>" disabled>
                </div>
                <div>
                    <button type="submit" class="submitBtn">Update Information</button>
                </div>
            </form>
        </div>

    </div>
    <?php if ($user_id == $_SESSION["currentUser_id"]) { ?>
        <div class="main-content">
            <button class="del-btn" onclick="deleteAccount()">DELETE ACCOUNT</button>
        </div>
    <?php } ?>

    <?php
    require "partials/footer.php"
    ?>

</body>

</html>