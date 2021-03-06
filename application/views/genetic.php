<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>

<html lang="en">  
<head>
<title>Genetic test</title>
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
    <li class="breadcrumb-item active" aria-current="page">Genetic test</li>
  </ol>
</nav>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >GENETIC TEST</h1>
						<br>
						<br>
						
						
						
						<?php if($this->session->flashdata('msg')): ?>
						<p><?php echo $this->session->flashdata('msg'); ?></p>
						<?php else : ?>
						<p><?php echo $this->session->flashdata('error'); ?></p>
						<?php endif; ?>
						<br>
						
			
						
						
						
						<div class="input-check100 validate-input" data-validate = "  valid test is required">
                <label>TEST </label><br>
			 <input type="checkbox" id="checkItem" name="check[]" value="HEMATOLOGY & COAGULATION">HEMATOLOGY & COAGULATION<br>
	<input type="checkbox" id="checkItem" name="check[]" value="BIOCHEMISTRY">BIOCHEMISTRY<br>
	<input type="checkbox" id="checkItem" name="check[]" value="CLINICAL PATH & URINE BIOCHEMISTRY">CLINICAL PATH & URINE BIOCHEMISTRY<br>
		<input type="checkbox" id="checkItem" name="check[]" value="KIT BASED TEST">KIT BASED TEST<br>
			<input type="checkbox" id="checkItem" name="check[]" value="SEROLOGY">SEROLOGY<br>
				<input type="checkbox" id="checkItem" name="check[]" value="CYTOLOGY & HISTOPATHOLOGY">CYTOLOGY & HISTOPATHOLOGY<br>
					<input type="checkbox" id="checkItem" name="check[]" value="MICROBIOLOGY">MICROBIOLOGY<br>
						<input type="checkbox" id="checkItem" name="check[]" value="HORMONE ANALYSIS">HORMONE ANALYSIS<br>
							<input type="checkbox" id="checkItem" name="check[]" value="SPECIALISED TEST">SPECIALISED TEST<br>
								<input type="checkbox" id="checkItem" name="check[]" value="PANELS">PANELS<br>	
								<input type="checkbox" id="checkItem" name="check[]" value="LIVE STOCK HERD HEALTH SCREENING TEST">LIVE STOCK HERD HEALTH SCREENING TEST<br>	
								<input type="checkbox" id="checkItem" name="check[]" value="LAB ANIMAL HEALTH MONITORING AND CLINICAL TRIAL TESTING">LAB ANIMAL HEALTH MONITORING AND CLINICAL TRIAL TESTING<br>
								<input type="checkbox" id="checkItem" name="check[]" value="EXPORT TESTING SERVICES (PET TRAVEL TO ABROAD)">EXPORT TESTING SERVICES (PET TRAVEL TO ABROAD)<br>
			</div>
		
						<div class="wrap-input100 validate-input" data-validate = "  valid name  is required">
								<label for="inputState"> </label>
								<input type="text" name="dname"   class="input100"    title="digits  and special characters are not allowed"  placeholder="ENTER DOCTOR NAME"  value="<?php echo !empty($user['dname'])?$user['dname']:''; ?>" >
								<?php echo form_error('dname','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<br>
								<span class="symbol-input100">	
								<i class="fa fa-user-md" aria-hidden="true"></i>
								</span>
						</div>
						
						
						<div class="wrap-input100 validate-input" data-validate = "  valid name  is required">
								<label for="inputState"> </label>
								<input type="text" name="name"   class="input100"  title="digits and special characters are not allowed" placeholder="PET NAME"  value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
								<?php echo form_error('name','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<br>
								<span class="symbol-input100">	
								<i class="fa fa-paw" aria-hidden="true"></i>
								</span>
						</div>
						
						
						<div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
								<input type="text" name="phone"  class="input100" placeholder="PHONENUMBER"  
									title="Phone number with 6-9 and remaing 9 digit with 0-9" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
								<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
						
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = "  valid address is required">
								<label for="inputState"> </label>
								<input type="text" name="location"  class="input100" placeholder="YOUR LOCATION" value="">
								<span class="focus-input100"></span>
								<br>
								<span class="symbol-input100">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
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
								<input type="text" name="petage"  class="input100" placeholder="PETAGE" value="<?php echo !empty($user['petage'])?$user['petage']:''; ?>" >
								<?php echo form_error('petage','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
						</div>
							
							
							<div class="wrap-input100 validate-input" data-validate = " select valid option is required">
						<span class="focus-input100"></span>
						<label for="inputState" >PAYMENT TYPE</label>
						<select  name="payment" id="inputState" class='input100' required >
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