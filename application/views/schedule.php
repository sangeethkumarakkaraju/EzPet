<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>

<html lang="en">  
<head>
<title>apponitment</title>
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

    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>Menu </a></li>
    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/healthservices"; ?>'>Pet Health </a></li>
    <li class="breadcrumb-item active" aria-current="page">Schedule Veterinarian Appointment</li>
  </ol>
</nav>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >Schedule Veterinarian Appointment</h1>
						<br>
						<br>
						<br>
						
						<?php if($this->session->flashdata('msg')): ?>
						<p><?php echo $this->session->flashdata('msg'); ?></p>
						<?php else : ?>
						<p><?php echo $this->session->flashdata('error'); ?></p>
						<?php endif; ?>
						<br>
						<div class="wrap-input100 validate-input" data-validate = "valid date is required">
								<label>SELECT THE DATE</label>
								<input type="date" name="date"  class='input100'  title="error"  value="<?php echo !empty($user['date'])?$user['date']:''; ?>">
								<?php echo form_error('date','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate  = " select valid option is required">
								<span class="focus-input100"></span>
								<label for="inputState"> SLOT</label>
								<select name="slot"  id="inputState"  class='input100' >
										<option>SELECT</option>
										<option >8:00AM to 12:00 pm </option>
										<option>1:00PM to 4:00 pm</option>
										<option>5:00PM to 6:00 pm</option>
										
								 </select>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate  = " valid confirmation is required">
								<label> PLEASE CONFIRM THAT YOU WOULD LIKE TO REQUEST THE FOLLOWING  APPOINTMENT</label>
								<input type="text" name="confirm"  class="input100"  placeholder="" value="<?php echo !empty($user['confirm'])?$user['confirm']:''; ?>">
								<?php echo form_error('confirm','<p class="help-block">','</p>'); ?>
						</div>
		
		
						
						
						<div class="wrap-input100 validate-input" data-validate = "valid name is required">
								<input type="text" name="first_name"  class="input100" placeholder="CARE TAKER NAME"  title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" >
								<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
						</div>
						
				
				
				
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
								<input type="email"   class="input100" name="email"  placeholder="EMAIL"  value="<?php echo !empty($user['email'])?$user['email']:''; ?>" >
								<?php echo form_error('email','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
						</div>
		
		
		
						<div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
								<input type="text" name="phone"  class="input100" placeholder="PHONENUMBER"   
									title="Phone number with 7-9 and remaing 9 digit with 0-9" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
								<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
						
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate  = " select valid option is required">
								<span class="focus-input100"></span>
								<label for="inputState">PET SPECIES</label>
								<select name="pet" class='input100' id="inputState">
									<option>SELECT</option>
									<option >DOG</option>
									<option>CAT</option>
									<option>FISH</option>
									<option>BIRDS</option>
								</select>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "  valid petname  is required">
								<label for="inputState"> </label>
								<input type="text" name="petname"  class="input100"  title="digits  and special characters are not allowed"  placeholder="ENTER PET  NAME"  value="<?php echo !empty($user['petname'])?$user['petname']:''; ?>">
								<?php echo form_error('petname','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<br>
								<span class="symbol-input100">
									<i class="fa fa-paw" aria-hidden="true"></i>
								</span>
						</div>
						
						
						
		
						<div class="input-radio100">
				<label>Gender: </label>
				<?php
				if(!empty($user['gender']) && $user['gender'] == 'Female'){
					$fcheck = 'checked="checked"';
					$mcheck = '';
				}else{
					$mcheck = 'checked="checked"';
					$fcheck = '';
				}
				?>
				<div class="input-radio100">
					<label>
						<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?> >
						Male
					</label>
					<label>
						<input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
						Female
					</label>
				</div>
			</div>
							<br>
							
							
							<div class="wrap-input100 validate-input" data-validate = " select valid option is required">
						<span class="focus-input100"></span>
      <label for="inputState">SELECT CONCERN</label>
      <select name="concern"  id="inputState" class='input100'>
        <option >ENQUIRY</option>
        <option>DAILY VISIT</option>
		<option>DISEASE</option>
		<option>OPERATION</option>
      </select>
</div>
						<div class="wrap-input100 validate-input" data-validate = "  valid location is required">
								<label for="inputState"> </label>
								<input type="text" name="location"    class="input100"   placeholder=" YOUR LOCATION" value="">
							
								<span class="focus-input100"></span>
									<br>
								<span class="symbol-input100">
								
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								
								</span>
						</div>
						
					
						
				
				<div class="wrap-input100 validate-input" data-validate = " select valid option is required">
						<span class="focus-input100"></span>
						<label for="inputState" >PAYMENT TYPE</label>
						<select  name="payment" id="inputState" class='input100'>
									<option>SELECT </option>
									<option >CREDIT/DEBIT CARD </option>
									<option>NET BANKING</option>
									<option>CASH ON DELIVERY</option>
									<option>GOOGLE PAY</option>
									<option>PHONE PAY</option>
									<option>PAY PAL</option>
					  </select>
				</div>



				<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="SUBMIT" type="submit">
							submit
						</button>
				</div>
				<br>
				<br>
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