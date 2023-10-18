<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="style.css?v=<?= time(); ?>" />
</head>
<style>
    .our-aim {
        margin-top: -500px;
        margin-bottom: 200px;
        margin-left: 180px;
        margin-right: 180px;
        /* background: url(images/healthcare-01.jpg); */
        background-color: #b645f8;
        z-index: 99;
        background-size: cover;
        min-height: 100vh;
    }

    #bg {
        background-image: url(images/bgimg1.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
    }

    .aim {
        margin: 0;
        padding: 100px 140px;
    }

    .aim-head {
        font-family: Montserrat, serrif;
        color: #141414;
        font-size: 70px;
        font-weight: 700;
        margin-bottom: 50px;
    }

    .aim-text {
        font-family: Montserrat, serrif;
        font-size: 28px;
        font-weight: 500;
        color: #ffffff;
        padding-bottom: 40px;
    }
</style>

<body>
    <div id="bg">
        <?php
        require "partials/navbar.php";
        ?>
    </div>
    <div class="our-aim">
        <div class="aim">
            <center>
                <p class="aim-head">OUR AIM</p>
            </center>
            <p class="aim-text">Aim of <strong style="color:#141414;">
                    "Virtual Doctor Appointment System"</strong> project is to provide essential medical services online to everyone hardly matters
                you live in metro or a remotely located village. Users can connect through their home internet or approach any
                nearby kiosk to get these services. <br><br>
                The <strong style="color:#141414;">"Virtual Doctor Appointment System"</strong> - Practical Applications of Patient-Centered
                Medical home principles. Geriatric and primary care practices can transform patient care at the practice level
                by increasing access,improving care coordination,and analyzing practice-specific data. <br><br>
                In this project <strong style="color:#141414;">"Virtual Doctor Appointment System"</strong> ,the system allows the patients
                to interact with the doctors easily even in the remote areas. A patient can easily verify after looking diseases
                and their symptoms that which
                disease they are suffering from and regarding those parameters they can view doctors and take appointments.
                In emergency , one can easily get ideas about first aid by looking at first aid section . <br><br>
                In case of any complaints / Feedback purpose , one can fill the form and can send their views for betterment
                of our service.
            </p>
        </div>
    </div>


    <div class="developers">

    </div>

    <?php
    require "partials/footer.php"
    ?>

</body>

</html>