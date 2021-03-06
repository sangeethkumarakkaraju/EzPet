<!DOCTYPE html>
<html lang="en">  
<head>
<title>DIAGONSTIC</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1> DIAGONSTIC </h1>	
<div class="container">

	<h2></h2>
	
	<!-- Status message -->
	<?php 
		if(!empty($success_msg)){
			echo '<p class="status-msg success">'.$success_msg.'</p>';
		}elseif(!empty($error_msg)){
			echo '<p class="status-msg error">'.$error_msg.'</p>';
		}
	?>
	
	
	<!-- Registration form -->
	<div class="regisFrm">
		<form action="" method="post">
		<div class="form-group">
		<div class="form-group ">
      <label for="inputState">SELECT YOUR TEST</label>
      <select id="inputState" class="form-control" required >
        <option >HEMATOLOGY & COAGULATION</option>
        <option>BIOCHEMISTRY</option>
		<option>CLINICAL PATH & URINE BIOCHEMISTRY</option>
		<option>KIT BASED TEST</option>
		<option>SEROLOGY</option>
		<option>CYTOLOGY & HISTOPATHOLOGY</option>
		<option>MICROBIOLOGY</option>
		<option>HORMONE ANALYSIS</option>
		<option>SPECIALISED TEST</option>
		<option>PANELS</option>
		<option>LIVE STOCK HERD HEALTH SCREENING TEST</option>
		<option>EXPORT TESTING SERVICES (PET TRAVEL TO ABROAD)</option>
		<option>LAB ANIMAL HEALTH MONITORING AND CLINICAL TRIAL TESTING</option>
      </select>
</div>
<div class="form-group">
				<input type="text" name="first_name"   placeholder="ENTER DOCTOR NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
				<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
			</div>
				<div class="form-group">
				<input type="text" name="first_name"   placeholder="ENTER YOUR  NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
				<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
				<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
			</div>
			<input type="text" name="first_name"   placeholder="LOCATION" value="" required>
			</div>
			<div class="form-group ">
      <label for="inputState">SELECT YOUR PET</label>
      <select id="inputState" class="form-control" required >
        <option >DOG</option>
        <option>CAT</option>
		<option>FISH</option>
		<option>BIRDS</option>
      </select>
</div>
 <div class="radio">

					<label>SELECT PET GENDER</label>
						<input type="radio" name="gender" value="Male" >
						Male
					</label>
					<label>
						<input type="radio" name="gender" value="Female" >
						Female
					</label>
				</div>
				
					
			 <div class="radio">

					<label>SELECT PET AGE</label>
						<input type="radio" name="gender" value="Male" >
						adult
					</label>
					<label>
						<input type="radio" name="gender" value="Female" >
						kitten
					</label>
				</div>
				
					
 


<div class="form-group">
      <label for="inputState" >SELECT PAYMENT TYPE</label>
      <select id="inputState" class="form-control" required >
        <option >CREDIT/DEBIT CARD </option>
        <option>NET BANKING</option>
		<option>CASH ON DELIVERY</option>
		<option>GOOGLE PAY</option>
		<option>PHONE PAY</option>
		<option>PAY PAL</option>
      </select>
</div>

			
			
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="SUBMIT">
			</div>
		</form>
	</div>
</div>
</body>
</html>