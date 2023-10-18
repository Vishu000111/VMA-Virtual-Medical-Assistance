<?php require "partials/header.php" ?>
    <link rel="stylesheet" href="style.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="head">
        <?php
            require "partials/navbar.php";
        ?>
        <div id="main">
            <div class="signup">
                <h2 id="sp">Sign Up</h2>
                <hr />
                <br />
                <form action="registration.php" method="post">
                    <label>Userame : <br /><input type="text" class="bdr" name="username" placeholder="username" required /></label><br />
                    <label>Email : <br /><input type="email" class="bdr" name="email" placeholder="email" required /></label><br />
                    <label>Password : <br /><input type="password" class="bdr" name="password" placeholder="password" required /></label><br />
                    <label>Confirm Password : <br /><input type="password" class="bdr" name="confirmpassword" placeholder="confirm password" required /></label><br />
                    <button id="btn" type="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <div class="main-content">
        <h1>This is main content</h1>
    </div>
</body>

</html>