
<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>

<html lang="en">  
<head>
<title>pet food</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico'); ?>"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>" >
  <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/main.css'); ?>">
<!--===============================================================================================-->
</head>
<body>

<br>
<br>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">

    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/dashboard"; ?>'>Menu </a></li>
    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/petmerchandise"; ?>'>Pet Merchandise </a></li>
    <li class="breadcrumb-item active" aria-current="page">Accessories</li>
  </ol>
</nav>
<div class="limiter">

    <div class="container-login100">
      <div class="wrap-login100">
        


            <form class="login100-form validate-form"  action="" method="post" >
            <h1 align="center" >ACCESSORIES </h1>
            <br>
            <br>    
  
                <div class="wrap-input100 validate-input" data-validate = "valid pet name is required">
                <input type="text" name="pet_name"  class="input100" placeholder="PET NAME"pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['PET_name'])?$user['PET_name']:''; ?>" >
                <?php echo form_error('pet_name','<p class="help-block">','</p>'); ?>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  
                </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "valid pet breed is required">
                <input type="text" name="pet_breed"  class="input100" placeholder="PET BREED" value="<?php echo !empty($user['pet_breed'])?$user['pet_breed']:''; ?>" >
                <?php echo form_error('pet_breed','<p class="help-block">','</p>'); ?>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  
                </span>
                </div>
              

      <h3>ACCESSORIES</h3>
      <br>

             
      
  <input type="checkbox" id="Food and water bowls" name="acces[]" value="Food and water bowls">
  <label for="Food and water bowls">Food and water bowls</label><br>
  <input type="checkbox" id="Collar" name="acces[]" value="Collar">
  <label for="Collar">Collar</label><br>
  <input type="checkbox" id="Four to six-foot leash" name="acces[]" value="Four to six-foot leash">
  <label for="Four to six-foot leash">Four to six-foot leash</label><br>
  
  <input type="checkbox" id="ID tag with your phone number" name="acces[]" value="ID tag with your phone number">
  <label for="ID tag with your phone number"> ID tag with your phone number</label><br>
  <input type="checkbox" id="Dog bed" name="acces[]" value="Dog bed">
  <label for="Dog bed">Dog bed</label><br>
  <input type="checkbox" id="Doggy shampoo and conditioner" name="acces[]" value="Doggy shampoo and conditioner">
  <label for="Doggy shampoo and conditioner">Doggy shampoo and conditioner</label><br>

  

      <!--form action="/action_page.php">
  <input type="checkbox" id="belt" name="belt" value="belt">
  <label for="belt">belt</label><br>
  <input type="checkbox" id="pet_house" name="pet_house" value="pet_house">
  <label for="pet_house">pet house</label><br>
  <input type="checkbox" id="pet_mat" name="pet_mat" value="pet_mat">
  <label for="pet_mat">pet mat</label><br>
  <form action="/action_page.php">
  <input type="checkbox" id="pet_toys" name="pet_toys" value="pet_toys">
  <label for="pet_toys"> pet toys</label><br>
  <input type="checkbox" id="pet_bed" name="pet_bed" value="pet_bed">
  <label for="pet_bed">pet bed</label>
  
</form-->


        <!--h3>Payment</h3>
      <label for="cname"></label>
            <input type="text" id="cname" name="cardname" placeholder="Name on Card"><emsp>
            <label for="ccnum"></label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Credit/Debit card number" required="">
            <label for="expmonth"></label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month"><ensp>
            <div class="">
              <div class="">
                <label for="expyear"></label>
                <input type="text" id="expyear" name="expyear" placeholder="Exp Year">
              </div>
              <div class="col-50">
                <label for="cvv"></label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
          </div-->

          
     <div class="container-login100-form-btn">
            <button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="SUBMIT" type="submit">
              submit
            </button>
      </div>
    </form>
  </div>
</div>


<!--===============================================================================================-->  
  <script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js'); ?>" ></script>
<!--===============================================================================================-->
  <script  src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js'); ?>"  ></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"  ></script>
<!--===============================================================================================-->
  <script  src="<?php echo base_url('assets/vendor/select2/select2.min.js'); ?>"  ></script>
<!--===============================================================================================-->
  <script  src="<?php echo base_url('assets/vendor/tilt/tilt.jquery.min.js'); ?>"  ></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script  src="<?php echo base_url('assets/js/main.js'); ?>"  ></script>


</body>
</html>