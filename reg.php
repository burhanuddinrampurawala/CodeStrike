<!DOCTYPE html>
<html>
<head>
  <script src="js/jquery.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="#2196F3">
  <title>GitHub Training Sessions 2017</title>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.png" /> <!--Tab Icon-->

  <!-- CSS  -->
  <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
  <link href="min/custom-min.css" type="text/css" rel="stylesheet" >

  <!-- Reg form CSS -->
  <link rel="stylesheet" type="text/css" href="css/imacreg.css" media="all" />
  <link rel="stylesheet" type="text/css" href="demo.css" media="all" />

  <!-- Google reCaptcha  -->
  <script src='https://www.google.com/recaptcha/api.js'></script>  
</head>
<body id="top" class="scrollspy">

  <!-- Pre Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <!--Navigation-->
  <?php 
  require 'navigationBar.php'; 
  ?>


  <!--Form Details-->
  <div class="section scrollspy" id="team">
    <br>
    <center>
      <h2 style="color:#A020F0; font-size: 35px">GitHub Training Sessions 2017</h2>
    </center>
    <br>
    <div class="container">
      <div  class="form">
      <center><p>Register Here</p></center>
        <hr>
        <form id="contactform" action="regValidate.php" method="post"> 
          <p class="contact"><label for="name">First Name</label></p> 
          <input id="name" name="fname" placeholder="First name" required="True" tabindex="1" type="text"> 

          <p class="contact"><label for="name">Last Name</label></p> 
          <input id="name" name="lname" placeholder="Last name" required="True" tabindex="1" type="text"> 

          <p class="contact"><label for="email">Email</label></p> 
          <input id="email" name="email" placeholder="example@domain.com" required="TRUE" type="email"> 

          <p class="contact"><label for="branch">Branch</label></p> 
          <input type="text" name="stream" required="TRUE">
          
          <p class="contact"><label for="year">Year</label></p> 
          <input type="year" id="year" placeholder="example-FE" name="year" required="" type="text"> 

          <select class="select-style gender" name="gender">
            <option value="select">i am..</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="others">Other</option>
          </select><br><br>

          <p class="contact"><label for="phone">Mobile phone</label></p> 
          <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
          <!-- <span><div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="6LeshBUUAAAAAOkHIrxVe2QetErIbIq2Bc5RQPxl"></div></span> -->

          <!-- Google reCaptcha Code -->
          <div class="g-recaptcha" data-sitekey="6LcPICkUAAAAAEgQZ7QvL0TNZkGx728-xsStXvoV"></div>
          <br> 
          <input class="buttom" name="submit" id="submit" tabindex="12" value="Register" type="submit" style="margin-left: 33%">   
        </form> 
      </div>

    </div>
  </div>                         

  <!--Footer-->
  <?php 
  require 'footer.php';
  ?>


  <!--  Scripts-->
  <script src="min/plugin-min.js"></script>
  <script src="min/custom-min.js"></script>

</body>
</html>