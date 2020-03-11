<!DOCTYPE html>
<html lang="en">  
<head>
<title>find a pet</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>find a pet</h1>


<div class="container">
    <h2>Fill the Details</h2>
	
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
		 
			<!-- <div class="form-group">
                 <label>Image</label>
                   <!--input type="file" class="form-control" id="userfile" name="userfile"-->
          <!--         <input type="file" class="form-control" name="userfile"  value="<?php echo !empty($user['userfile'])?$user['userfile']:''; ?>" required>
                <?php echo form_error('userfile','<p class="help-block">','</p>'); ?>
                 
             <!--  <input type="submit" class="btn btn-primary" value="Upload">-->
          <!-- </div> -->


             <div class="form-group">
                <input type="text" name="Pet breed" placeholder="Pet breed" value="<?php echo !empty($user['Pet_breed'])?$user['Pet_breed']:''; ?>" required>
                <?php echo form_error('AIN','<p class="help-block">','</p>'); ?>
            </div> 
			 <div class="form-group">
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
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
						Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                        Female
                    </label>
                </div>
            </div>
			
            
			
			<div class="form-group">
                <input type="text" name="color" placeholder="color" value="<?php echo !empty($user['color'])?$user['color']:''; ?>" required>
                <?php echo form_error('color','<p class="help-block">','</p>'); ?>
            </div>
			
			
			 
			<div class="form-group">
			
                <input type="number_format" name="weight" placeholder="weight" value="<?php echo !empty($user['weight'])?$user['weight']:''; ?>" required>
                <?php echo form_error('weight','<p class="help-block">','</p>'); ?>
            </div> 
			<div class="form-group">
                <input type="number_format" name="Height" placeholder="Height" value="<?php echo !empty($user['Height'])?$user['Height']:''; ?>" required>
                <?php echo form_error('Height','<p class="help-block">','</p>'); ?>
            </div> 

			
			
			
			
			
			
         


			

				<div class="form-group">
                <label> Purpose Of Pet</label><br>
				 <?php 
                if(!empty($user['Special_Status']) && $user['Special_Status'] == ' Service Dog'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 

					if(!empty($user['Special_Status']) && $user['Special_Status'] == 'Emotional Support Animal'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }


				if(!empty($user['Special_Status']) && $user['Special_Status'] == 'K-9'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }
					
				if(!empty($user['Special_Status']) && $user['Special_Status'] == 'homely'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }

                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
					<input type="checkbox" id="checkItem" name="Special_Status" value="1"<?php echo $mcheck; ?>> Service Dog<br>
					<input type="checkbox" id="checkItem" name="Special_Status" value="2"<?php echo $mcheck; ?>>Emotional Support Animal<br>
					<input type="checkbox" id="checkItem" name="Special_Status" value="3"<?php echo $mcheck; ?>>K-9<br>
					<input type="checkbox" id="checkItem" name="Special_Status" value="4"<?php echo $mcheck; ?>>homely<br>

					 </label>
                </div>            

			


            <div class="form-group">
                <input type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="Cost" placeholder="Cost" value="<?php echo !empty($user['Cost'])?$user['Cost']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
            </div>
			
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="SUBMIT">
            </div>
        </form>
      <!--  <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p> -->
    </div>
</div>
</body>
</html>