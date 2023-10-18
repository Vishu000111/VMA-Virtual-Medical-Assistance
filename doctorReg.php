<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="doctorReg.css?v=<?= time(); ?>" />

<style>
    .active {}
</style>

</head>

<body>

    <script>
        function login() {
            document.querySelector('.login').classList.remove("non-active");
            document.querySelector('.register').classList.add("non-active");
            document.querySelector('.doc-login').style.display = "block";
            document.querySelector('.doc-reg').style.display = "none";
        }

        function register() {
            document.querySelector('.register').classList.remove("non-active");
            document.querySelector('.login').classList.add("non-active");
            document.querySelector('.doc-reg').style.display = "block";
            document.querySelector('.doc-login').style.display = "none";
        }
    </script>

    <div class="head">
        <?php
        require "partials/navbar.php";
        ?>
        <div id="main">
            <center>
                <div id="login-reg">
                    <div class="login-signup">
                        <div class="login non-active" onclick="login()">Login as Doctor</div>
                        <div class="register" onclick="register()">Register as Doctor</div>
                    </div>
                    <div id="login-reg-form">
                        <div class="doc-login">
                            <form action="doctorValidation.php" method="post">
                                <input class="contact-input" type="text" name="username" placeholder="User Name" required> <br>
                                <input class="contact-input" type="email" name="email" placeholder="Email" required><br>
                                <input class="contact-input" type="password" name="password" placeholder="Password" required><br>
                                <button type="submit">LogIn</button>
                            </form>
                        </div>
                        <div class="doc-reg">
                            <form action="doctorSignup.php" method="post">
                                <input class="contact-input" type="text" name="username" placeholder="User Name" required> <br>
                                <input class="contact-input" type="email" name="email" placeholder="Email" required><br>
                                <input class="contact-input" type="tel" name="phone" placeholder="Phone Number(Optional)"><br>
                                <input class="contact-input" type="password" name="password" placeholder="Password" required><br>
                                <button type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>