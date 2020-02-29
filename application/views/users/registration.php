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
		 
			 <div class="form-group">
                 <label>Image</label>
                   <!--input type="file" class="form-control" id="userfile" name="userfile"-->
                   <input type="file" class="form-control" name="userfile"  value="<?php echo !empty($user['userfile'])?$user['userfile']:''; ?>" required>
                <?php echo form_error('userfile','<p class="help-block">','</p>'); ?>
                 
             <!--  <input type="submit" class="btn btn-primary" value="Upload">-->
           </div>


             <div class="form-group">
                <input type="number_format" name="AIN" placeholder="AIN" value="<?php echo !empty($user['AIN'])?$user['AIN']:''; ?>" required>
                <?php echo form_error('AIN','<p class="help-block">','</p>'); ?>
            </div> 
			
            <div class="form-group">
                <input type="text" name="Pet Name" placeholder="PET NAME" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="date" name="DOB" placeholder="DOB" value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" required>
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="color" placeholder="color" value="<?php echo !empty($user['color'])?$user['color']:''; ?>" required>
                <?php echo form_error('color','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="GENIUS" placeholder="GENIUS" value="<?php echo !empty($user['GENIUS'])?$user['GENIUS']:''; ?>" required>
                <?php echo form_error('GENIUS','<p class="help-block">','</p>'); ?>
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
                <input type="text" name="Microchip_or_Tattoo" placeholder="Microchip or Tattoo" value="<?php echo !empty($user['Microchip_or_Tattoo'])?$user['Microchip_or_Tattoo']:''; ?>" >
                <?php echo form_error('Microchip_or_Tattoo','<p class="help-block">','</p>'); ?>
            </div> 
			<div class="form-group">
                <input type="text" name="State_License_or_Registration" placeholder="State License or Registration" value="<?php echo !empty($user['State_License_or_Registration'])?$user['State_License_or_Registration']:''; ?>" >
                <?php echo form_error('State_License_or_Registration','<p class="help-block">','</p>'); ?>
            </div> 
			<div class="form-group">
                <input type="text" name="Club_or_Association_Registration" placeholder="Club or Association Registration" value="<?php echo !empty($user['Club_or_Association_Registration'])?$user['Club_or_Association_Registration']:''; ?>" >
                <?php echo form_error('Club_or_Association_Registration','<p class="help-block">','</p>'); ?>
            </div> 
			<div class="form-group">
                <input type="text" name="Pet_Sire_Name" placeholder="Pet Sire Name" value="<?php echo !empty($user['Pet_Sire_Name'])?$user['Pet_Sire_Name']:''; ?>">
                <?php echo form_error('Pet_Sire_Name','<p class="help-block">','</p>'); ?>
            </div> 
			<div class="form-group">
                <input type="text" name="Pet_Sire_AIN" placeholder="Pet Sire AIN" value="<?php echo !empty($user['Pet_Sire_AIN'])?$user['Pet_Sire_AIN']:''; ?>">
                <?php echo form_error('Pet_Sire_AIN','<p class="help-block">','</p>'); ?>
            </div> 
			<div class="form-group">
                <input type="text" name="Pet_Dam_Name" placeholder="Pet Dam Name" value="<?php echo !empty($user['Pet_Dam_Name'])?$user['Pet_Dam_Name']:''; ?>">
                <?php echo form_error('Pet_Dam_Name','<p class="help-block">','</p>'); ?>
            </div> 
			<div class="form-group">
                <input type="text" name="Pet_Dam_AIN" placeholder="Pet Dam AIN" value="<?php echo !empty($user['Pet_Dam_AIN'])?$user['Pet_Dam_AIN']:''; ?>">
                <?php echo form_error('Pet_Dam_AIN','<p class="help-block">','</p>'); ?>
            </div> 
			
			
			
			
			
			
			
            <div class="form-group">
                <input type="email" name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="PASSWORD" required>
                <?php echo form_error('password','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="password" name="conf_password" placeholder="CONFIRM PASSWORD" required>
                <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
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
                <input type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
            </div>
			
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="SUBMIT">
            </div>
        </form>
        <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p>
    </div>
</div>