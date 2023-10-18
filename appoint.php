<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="appoint.css?v=<?= time(); ?>">
<link rel="stylesheet" href="style.css?v=<?= time(); ?>">
</head>

<body>
  <?php
  require "partials/navbar.php";
  ?>
  <div class="appoint-form">
    <form action="validation.php" method="post">
      Patient Name :<br />
      <input type="text" name="Patient Name" placeholder="Patient Name" class="appoint-inp" required /><br /><br>
      Mobile No.:<br />
      <input type="tel" name="mobile" class="appoint-inp" placeholder="Mobile Number" required /><br /><br>
      Email : <br />
      <input type="email" name="email" placeholder="Email" class="appoint-inp" required /><br /><br>
      
      Select Date:<br />
      <input type="date" class="appoint-inp" required /><br /><br>
      Gender:<br /><input type="radio" name="gender" value="Female" />female
      <input type="radio" name="gender" value="male" />male
      <input type="radio" name="gender" value="Transgender" />Transgender
      <br /><br>
      Symptoms :<br />
      <textarea type="text" name="symptoms" placeholder="Symptoms..." rows="10" class="appoint-inp" required></textarea><br /><br>
      <button id="btn" class="appoint-inp" type="submit">Make an Appointment</button>
    </form>
  </div>
  <?php
  require "partials/footer.php"
  ?>
</body>

</html>