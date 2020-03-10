<!DOCTYPE html>
<html lang="en">  
<head>
<title>pet insurance</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>	
<div class="container">

	<h2>PET INSURANCE</h2>
	<br>

	
	
	<!-- Registration form -->
		<div class="regisFrm">
				<form action="" method="post">
				
				<div class="form-group">
					  <label for="inputState" >COVERAGE AMOUNT</label>
					  <select id="inputState" class="form-control" required >
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

		
		
		
				<div class="form-group">
					<input type="text" name="first_name"   placeholder="ENTER INSURANCE NAME" value="" required>
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
				
				<div class="form-group ">
					  <label for="inputState">PET BREED</label>
					  <select id="inputState" class="form-control" required >
						<option >DOG</option>
						<option>CAT</option>
						<option>FISH</option>
						<option>BIRDS</option>
					  </select>
				</div>
			<div class="form-group">
				<label for="birthday"> PET DATE OF BIRTH</label>
				<input type="date" id="birthday" name="birthday">
			</div>
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="PET AGE" value="" required>
			</div>
			
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="Marks of Identification" value="" required>
			</div>
			<div class="radio">

					<label>PET GENDER</label>
						<input type="radio" name="gender" value="Male" >
						Male
					</label>
					<label>
						<input type="radio" name="gender" value="Female" >
						Female
					</label>
				</div>
			<div class="form-group">
				<input type="text" name="phone"  placeholder="Customer Name" value="">
			</div>
			<div class="radio">

					<label>CUSTOMER GENDER</label>
						<input type="radio" name="gender" value="Male" >
						Male
					</label>
					<label>
						<input type="radio" name="gender" value="Female" >
						Female
					</label>
			</div>
				
			
			<div class="form-group">
				<input type="email"name="email" placeholder="EMAIL"  pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" value="" required>
			</div>
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="Address" value="" required>
			</div>
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}"  title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="">
				
			</div>
		
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="SUBMIT">
			</div>
		</form>
	</div>
</div>
</body>
</html>