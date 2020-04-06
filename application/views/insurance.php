<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>
<br>
<br>
<br>
<br>

<html lang="en">  
<head>
<title>pet insurance</title>
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
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >PET INSURANCE</h1>
						<br>
						<br>
						
						
					<div class="wrap-input100 validate-input" data-validate  = " select valid option is required">
								<span class="focus-input100"></span>	
						
					  <label for="inputState" >COVERAGE AMOUNT</label>
					  <select name="amount"  class="input100"  id="inputState" >
						<option >select amount </option>
						<option>1000</option>
						<option>5000</option>
						<option>10000</option>
						<option>15000</option>
						<option>20000</option>
						<option>25000</option>
						<option>30000</option>
						<option>35000</option>
					  </select>
				</div>
					
					
					<div class="wrap-input100 validate-input" data-validate = "  valid name  is required">
								<label for="inputState"> </label>
								<input type="text" name="insurance"   class="input100"  placeholder="ENTER INSURANCE NAME" value="" >
								<span class="focus-input100"></span>
								<span class="symbol-input100">	
								</span>
						</div>
						
					<div class="wrap-input100 validate-input" data-validate  = " select valid option is required">
								<span class="focus-input100"></span>
								<label for="inputState">PET SPECIES</label>
								<select name="pet" class='input100' id="inputState"  required >
									<option>SELECT</option>
									<option >DOG</option>
									<option>CAT</option>
									<option>FISH</option>
									<option>BIRDS</option>
								</select>
						</div>
						
					<div class="wrap-input100 validate-input" data-validate = "  valid name  is required">
								<label for="inputState">PET DOB </label>
								<input type="date" name="dob"   class="input100"  value="" >
								<span class="focus-input100"></span>
								<span class="symbol-input100">	
								</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = "  valid name  is required">
								<label for="inputState"> </label>
								<input type="text" name="identification"   class="input100"  placeholder="Marks of Identification" value="">
								<span class="focus-input100"></span>
								<span class="symbol-input100">	
								</span>
						</div>
						
						
							<div class="input-radio100">
				<label>Pet Gender: </label>
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
							
							<div class="wrap-input100 validate-input" data-validate = "  valid name  is required">
								<label for="inputState"> </label>
								<input type="text" name="cname"  class="input100"   placeholder="Customer Name" value="">
								<span class="focus-input100"></span>
								<span class="symbol-input100">	
								</span>
						</div>
						
						
						<div class="input-radio100">
				<label>Customer Gender: </label>
				<?php
				if(!empty($user['cgender']) && $user['cgender'] == 'Female'){
					$fcheck = 'checked="checked"';
					$mcheck = '';
				}else{
					$mcheck = 'checked="checked"';
					$fcheck = '';
				}
				?>
				<div class="input-radio100">
					<label>
						<input type="radio" name="cgender" value="Male" <?php echo $mcheck; ?> >
						Male
					</label>
					<label>
						<input type="radio" name="cgender" value="Female" <?php echo $fcheck; ?>>
						Female
					</label>
				</div>
			</div>
							<br>
						
						
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
								<input type="email"   class="input100" name="email" placeholder="EMAIL" >
								<?php echo form_error('email','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = "  valid name  is required">
								<label for="inputState"> </label>
								<input type="text" name="address"  class="input100" placeholder="Address" value="">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
								<input type="text" name="phone"  class="input100" placeholder="PHONENUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
								<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
						
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
						</div>
							
							
						
						
						
						
						
						
						
						
					

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