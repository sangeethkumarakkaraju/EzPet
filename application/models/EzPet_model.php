<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class EzPet_model  extends CI_Model {

    public function __construct() {
        parent::__construct();
		
		// Load the database library
        $this->load->database();
		
		$this->userTbl = 'users';
    }
	
	
	
	
	
	public  function display_records($id)
	{
	
	$query=$this->db->query("select AIN,Pet_Name,image,DOB,color,phone,email,gender,Special_Status ,Spayed_or_Neutered,Height,weight from petinfo where AIN='$id'");
	return $query->result();
	//$querys=$this->db->query("select image from petinfo where AIN='$id'");
	//return $querys->result();
	}
	
	

	public function displayrecords($spe,$c,$gender)
	{
		$query=$this->db->query("select image,Pet_Name,gender,AIN from petinfo where GENIUS='$spe' and( color='$c' or gender='$gender')");
		
		return $query->result();
	}
	
	
	
	//search and filters functions
	public function displayfood($name,$spe,$pro,$food,$brand)
	{
		$query=$this->db->query("select image from foodsearch  where foodname='$name' and( brand='$brand' or product='$pro' or food='$food')");
		
		return $query->result();
	}
	public function displaymedicine($name,$spe,$brand,$health,$volume,$quantity)
	{
		$query=$this->db->query("select image from medicinesearch  where medicinename='$name' and species = '$spe' and( brand='$brand' or health='$health' or volume='$volume'or quantity='$quantity')");
		
		return $query->result();
	}
	
	public function displayvitamin($name,$spe,$brand,$health,$volume,$quantity,$com)
	{
		$query=$this->db->query("select image from vitaminsearch  where vitaminname='$name' and species = '$spe' and( brand='$brand' or health='$health' or volume='$volume'or quantity='$quantity' or compositions='$com')");
		
		return $query->result();
	}
	
	
	
	public function displaymerchandise($name,$spe,$gender,$pro,$brand)
	{
		$query=$this->db->query("select image from merchandisesearch  where name='$name' and species = '$spe' and( gender='$gender' or brand='$brand'   or product='$pro' )");
		
		return $query->result();
	}
	
	public function displayservices($name,$distance,$spe,$need,$able,$rate)
	{
		$query=$this->db->query("select image from servicessearch  where location='$name' and able='$able' and ( species = '$spe' or distance='$distance' or need='$need' or  rate='$rate' )");
		
		return $query->result();
	}
	
	public function displaypets($loc,$spe,$siz,$bre,$gender,$coat,$id)
	{
		$query=$this->db->query("select image,AIN,Pet_Name  from petinfo where location='$loc' and species='$spe' and(  gender='$gender' or coat='$coat'  )");
		return $query->result();
	
	}
	
	
	
//end of services
	public function name($first_name)
    {
        if ( !preg_match('~^[a-zA-Z_&\s-]+$~', $first_name)) 
        {
		   return false;
        }
        else
        {
            return $first_name;
        }
    } 
	
	
	   public function mails($email)
    {
        if ( !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) 
        
        {
 
            return FALSE;
        }
        else
        {
            return $email;
        }
    } 
	 
	 
	 
	   public function number($phone)
    {
        if ( !preg_match('/^[6-9][0-9]{9}$/', $phone)) 
        
        {
        
            return FALSE;
        }
        else
        {
            return $phone;
        }
    }
	 public function pass($password)
	 {
		 if(!preg_match('/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/',$password))
			 {
				
            return FALSE;
        }
        else
        {
            return $password;
        }
	
	}
	 

	 public function isDate($date)
	{
			if(! preg_match(
				'^(((0[1-9]|[12]\\d|3[01])\\/(0[13578]|1[02])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|[12]\\d|30)\\/(0[13456789]|1[012])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|1\\d|2[0-8])\\/02\\/((19|[2-9]\\d)\\d{2}))|(29\\/02\\/((1[6-9]|[2-9]\\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$^',
				$date))
				{
					return false;
				}
				else{
					return $date;
				}
}


 public function ForgotPassword($email)
{
    $this->db->select('email');
    $this->db->from('users');
    $this->db->where('email', $email);
    $query=$this->db->get();
    return $query->row_array();
}


public function sendpassword($data)
{
    $email = $data['email'];
    $query1=$this->db->query("SELECT *  from users where email = '".$email."' ");
    $row=$query1->result_array();
    if ($query1->num_rows()>0)
{
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['password'] = md5($passwordplain);
        $this->db->where('email', $email);
        $this->db->update('users', $newpass);
        $mail_message='Dear '.$row[0]['first_name'].','. "\r\n";
        $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
        $mail_message.='<br>Please Update your password.';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Your company name';
        
        date_default_timezone_set('Etc/UTC');
        require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = "tls"; 
        $mail->Debugoutput = 'html';
        $mail->Host = "localhost";
        $mail->Port = 587;
        $mail->SMTPAuth = true;   
        $mail->Username = "sai.vcemanu@gmail.com";    
        $mail->Password = "MOMdad1970";
        $mail->setFrom('admin@site', 'admin');
        $mail->IsHTML(true);
        $mail->addAddress($email);
        $mail->Subject = 'OTP from company';
        $mail->Body    = $mail_message;
        $mail->AltBody = $mail_message;
		
        if (!$mail->send()) {

            echo "<script>alert('msg','Failed to send password, please try again!')</script>";
        } else {

            echo "<script>alert('msg','Password sent to your email!')</script>";
        }
        redirect(base_url().'forms/forgot_pass','refresh');
    }
    else
    {

        echo "<script>alert('msg','Email not found try again!')</script>";
        redirect(base_url().'forms/forgot_pass','refresh');
    }
}


	 
	 function getRules($params=array())
	 {
		    $this->form_validation->set_rules('first_name', 'First Name', 'required'); 
            $this->form_validation->set_rules('last_name', 'Last Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
	 $this->form_validation->set_rules('password', 'password', 'required|preg_match[(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}]'); 
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]'); 
			 $userData = array( 
                'first_name' => strip_tags($this->input->post('first_name')), 
                'last_name' => strip_tags($this->input->post('last_name')), 
                'email' => strip_tags($this->input->post('email')), 
                'password' => md5($this->input->post('password')), 
                'gender' => $this->input->post('gender'), 
                'phone' => strip_tags($this->input->post('phone')) 
            ); 
 
            if($this->form_validation->run() == true){ 
				return true;
			
			}
			else{
				
                //$insert = $this->user->insert($userData);
					return false;
			}
           
	 }
	 
	 
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach($params['conditions'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
			
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();	
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
				$query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->row_array():false;
            }else{
				$query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():false;
            }
        }

        //return fetched data
        return $result;
    }
	
	
	
	
	
	    function getData($params = array()){
        $this->db->select(' id,first_name,last_name,email,phone');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach($params['conditions'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
			
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();	
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
				$query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->row_array():false;
            }else{
				$query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():false;
            }
        }

        //return fetched data
        return $result;
    }
	
	
	
    
    /*
     * Insert user data
     */
    public function insert($data){
		//add created and modified date if not exists
		if(!array_key_exists("created", $data)){
			$data['created'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists("modified", $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}
		
		//insert user data to users table
		$insert = $this->db->insert($this->userTbl, $data);
		
		//return the status
		//return $insert?$this->db->insert_id():false;
    }
      public function inserts($data){
		
    }
    
    /*
     * Delete user data
     */
 
	 public function delete($id){

   

       $result = $this->db->query("delete from `users` where user_id = $id");

       if($result)

       {

           return "Data is deleted successfully";

       }

       else

       {

           return "Error has occurred";

       }

}

}
