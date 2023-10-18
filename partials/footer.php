<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../footer.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="footer.css?v=<?= time(); ?>">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <footer style="margin-top:60px;">
        <div class="newsletter">
            <div class="sbs-nws">
                SignUp for our weekly newsletter
                <input type="email" class="email" name="email" placeholder=" example@example.com">
                <input type="submit" class="submit" value="Subscribe">
            </div>
        </div>
        <hr>
        <div class="footer_section">
            <div class="sec1">
                <div class="tag">Quick Links</div>
                <hr>
                <li><a href="index.php">Home</a></li>
                <li><a href="firstaid.php">First Aid</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Give Feedback</a></li>
            </div>
            <div class="sec1">
                <div class="tag">Featured Links</div>
                <hr>
                <?php
               
                ?>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Terms of use</a></li>
            </div>
            <div class="sec1">
                <div class="tag">
                    <center>Follow us on:</center>
                </div>
                <hr>
                <li><a href="#"><i class="fa fa-facebook"></i> @VirtualDAS</a></li>
                <li><a href="#"><i class="fa fa-twitter"></i> @VirtualDAS</a></li>
                <li><a href="#"><i class="fa fa-instagram"></i> @VirtualDAS</a></li>
            </div>
        </div>
        <hr>
        <div class="cpryt">
            <center>
                <p>
                    <h5 style="margin:8px;"> &copy; 2022-23 <a href="">Virtual Doctor Appointment System</a></h5>
                    <span style="font-size:18px;"> Project by Aliza Parvez , Arsalna Bi, Anup Kumar Sharma</span>
                </p>
            </center>
        </div>
    </footer>
</body>

</html>