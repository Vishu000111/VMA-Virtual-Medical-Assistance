<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="contact.css?v=<?= time(); ?>" />
</head>

<body>
    <div class="head">
        <?php
        require "partials/navbar.php";
        ?>
        <div id="main">
            <center>
                <div id="contact-form">
                    <form action="mailto:aliza.parvez01@gmail.com?subject=FEEDBACK:VDAS!" method="post" enctype="text/plain">
                        <p>FEEDBACK FORM</p>
                        <hr>
                        <input class="contact-input" type="text" name="Name" placeholder="User Name" required> <br>
                        <input class="contact-input" type="email" name="Email" placeholder="Email" required><br>
                        <input class="contact-input" type="tel" name="Phone" placeholder="Phone Number(Optional)" required><br>
                        <textarea class="contact-input" type="text" name="Message" cols="30" rows="5" placeholder="Your Feedback..." required></textarea><br>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </center>
        </div>
    </div>

    <?php
    require "partials/footer.php"
    ?>

</body>

</html>