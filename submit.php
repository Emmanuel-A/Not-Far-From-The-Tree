<?php include("includes/head.php");?>

<body>
  <div class="wrapper"> 
    <?php include("includes/nav.php");?>

    <div id="volunteerForm">

      <?php 
          $to="eamponsah26@gmail.com";
          $subject="Message from Volunteer Form";
          $message=$_POST["firstName"] . " " . $_POST["lastName"]. " sent a volunteer request \r\n";
          $message .=$_POST["firstname"] . " " . $_POST["lastname"]. "\r\n";
          $message .=$_POST["email"] . "\r\n";
          
          $message .=$_POST["phone_01"] . "\r\n";
          $message .=$_POST["phone_02"] . "\r\n";
          
          $message .=$_POST["address"] . "\r\n";
          $message .=$_POST["city"] . "\r\n";
          $message .=$_POST["province"] . " " . $_POST["country"]. "\r\n";
          $message .=$_POST["postalcode"] . "\r\n";

          $message .=$_POST["newsletter"] . "\r\n";

          $message .=$_POST["involvement"] . "\r\n";
          $message .=$_POST["availability"] . "\r\n";

          $from = $_POST["email"] .     
          mail($to,$subject,$from,$message);
        ?>

        <h2>Congratulations!</h2>
        <h1><?php echo $_POST["firstName"]; ?></h1> 
        <h1><?php echo $_POST["email"]; ?></h1>

        <h2>You are now a volunteer</h2>

        <h2>Your address is:</h2>
        <h1><?php echo $_POST["address"]; ?></h1>
        <h1><?php echo $_POST["city"]; ?></h1>
        <h1><?php echo $_POST["country"]; ?></h1>
        <h1><?php echo $_POST["postalcode"]; ?></h1>

        <h2>Your phone number:</h2>
        <h1><?php echo $_POST["phone_01"]; ?></h1>
        <h1><?php echo $_POST["phone_02"]; ?></h1>

        <h2>You would like to volunteer as a:</h2>
        <h1><?php echo $_POST["involvement"]; ?></h1>

        <h2>on:</h2>
        <h1><?php echo $_POST["availability"]; ?></h1>
    </div>
</body>
    
    <?php include("includes/footer.php");?>