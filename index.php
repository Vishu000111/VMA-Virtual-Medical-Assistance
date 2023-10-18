<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="style.css?v=<?= time(); ?>" />
<link rel="stylesheet" href="slide.css?v=<?= time(); ?>" />
</head>

<body>
    <div id="bg" class="head">
        <?php
        require "partials/navbar.php";
        ?>
        

        <div id="main">
            <center>
                <p class="heading">
                Virtual Doctor Appointment System
                </p>
                <p class="sbheading">The Online Medical services</p>
            </center>
        </div>
    </div>

    <div class="our-services">

    </div>

    <div class="our-vision">
        <div class="vision">
            <center>
                <p class="vision-head">OUR VISION</p>
            </center>
            <p class="vision-text">Aim of <strong style="color:#e19fff;">
                    "Virtual Doctor Appointment System"</strong> project is to provide essential medical services online to everyone hardly matters
                you live in metro or a remotely located village. Users can connect through their home internet or approach any
                nearby kiosk to get these services. <br><br>
                The <strong style="color:#e19fff;">"Virtual Doctor Appointment System"</strong> - Practical Applications of Patient-Centered
                Medical home principles. Geriatric and primary care practices can transform patient care at the practice level
                by increasing access,improving care coordination,and analyzing practice-specific data. <br>
            </p>
        </div>
    </div>

    <div class="what-user-says">
        <div class="input-leftcontainer" id="input-leftcontainer">
            <div class="imgbanbtn imgbanbtn-prev" id="imgbanbtn-prev"></div>
            <div class="imgban" id="imgban3">
                <img class="user-ex-img" src="images/priya.jpeg" alt="">
                <div class="user-ex-txt">
                    <div class="user-name">"Priya Mishra"</div>
                    <div class="user-text">
                    " It's a very helpful website to treat the medical problems virtually at home. All the contents are
                        given in a very short, simple and clear way which makes it easy to understand to everyone.Updating feature
                        helped me to provide the recent information to the doctors."
                    </div>
                </div>
            </div>
            <div class="imgban" id="imgban2">
                <img class="user-ex-img" src="images/fabi.jpeg" alt="">
                <div class="user-ex-txt">
                    <div class="user-name">"Fabi Saleem"</div>
                    <div class="user-text">
                    " Virtual Doctor Appointment System helped me to sort out my daily real life problems through its 
                        online medical services, it assisted me to cure my migraine when i were unable to go hospital.The remedies
                        prvidede by it are so efficient. Thanks VMA!"
                    </div>
                </div>
            </div>
            <div class="imgban" id="imgban1">
                <img class="user-ex-img" src="images/abhay.jpg" alt="">
                <div class="user-ex-txt">
                    <div class="user-name">"Abhay"</div>
                    <div class="user-text">
                    " I live in a remote area where there's a deficiency of hospitals and trained doctors, here Virtual Doctor Appointment System helped me and also other people living in my area to treat their medical problems. Symptoms of many 
                        diseases provided in it helped us to cure them even before the occurence of the disease."
                    </div>
                </div>
            </div>
            <div class="imgbanbtn imgbanbtn-next" id="imgbanbtn-next"></div>
        </div>
    </div>

    <?php
    require "partials/footer.php"
    ?>


    <script src="new.js?v=<?= time(); ?>"></script>
</body>

</html>