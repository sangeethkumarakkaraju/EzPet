<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library

require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class Apiform extends REST_Controller 
{
    public function __construct() { 
        parent::__construct();
        
        // Load the user model
      //  $this->load->model('model');


         $this->load->model('EzPet_model');
    }

	public function petregistration_post()
		{
	 $this->load->view('petregistration');

		 
        
      
			 
        
									 $AIN = strip_tags($this->input->post('AIN'));
                       $Pet_Name = $this->input->post('Pet_Name');
                  $name=$this->EzPet_model->name($Pet_Name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
                
        }
				$DOB = strip_tags($this->input->post('DOB'));	
				$color = strip_tags($this->input->post('color'));
				$GENIUS = strip_tags($this->input->post('GENIUS'));
				$species=strip_tags($this->input->post('species'));
				$coat=strip_tags($this->input->post('coat'));
				 $weight = strip_tags($this->input->post('weight'));
				 $Height = strip_tags($this->input->post('Height'));
					$Microchiped_or_Tattooed = strip_tags($this->input->post('Microchiped_or_Tattooed'));
				 $Microchip_or_Tattoo = strip_tags($this->input->post('Microchip_or_Tattoo'));
				$State_License_or_Registration =strip_tags($this->input->post('State_License_or_Registration'));
				 $Club_or_Association_Registration = strip_tags($this->input->post('Club_or_Association_Registration'));
				 $Pet_Sire_Name =strip_tags($this->input->post('Pet_Sire_Name'));
				 $Pet_Sire_AIN =strip_tags($this->input->post('Pet_Sire_AIN'));
				 $Pet_Dam_Name =strip_tags($this->input->post('Pet_Dam_Name'));
				 $Pet_Dam_AIN = strip_tags($this->input->post('Pet_Dam_AIN'));
				                $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
               // 'password' => md5($this->input->post('password')), 
					$gender =$this->input->post('gender');
					$Spayed_or_Neutered = $this->input->post('Spayed_or_Neutered'); 
					$Special_Status =$this->input->post('Special_Status'); 
				
                $phone = strip_tags($this->input->post('phone'));		
                           $number=$this->EzPet_model->number($phone);
                             if($number==false)

        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);

        }
             $image = strip_tags($this->input->post('image')); 

			   if(!empty($AIN) && !empty($Pet_Name) && !empty($DOB) && !empty($color)&& !empty($GENIUS)&& !empty($species)&& !empty($coat)&& !empty($weight)&& !empty($Height)&& !empty($Microchiped_or_Tattooed) && !empty($Microchip_or_Tattoo) && !empty($State_License_or_Registration) && !empty($Club_or_Association_Registration) && !empty($Pet_Sire_Name) && !empty($Pet_Sire_AIN) && !empty($Pet_Dam_Name)&& !empty($email)&& !empty($gender)&& !empty($Spayed_or_Neutered)&& !empty($phone)&& !empty($image))
			{
                $userData = array(

									 'AIN' =>$AIN, 
                'Pet_Name' => $Pet_Name,
				'DOB' => $DOB,	
				'color' => $color,
				'GENIUS' => $GENIUS,
				'species'=>$species,
				'coat'=>$coat,
				 'weight' => $weight,
				 'Height' => $Height,
					'Microchiped_or_Tattooed' => $Microchiped_or_Tattooed,
				 'Microchip_or_Tattoo' => $Microchip_or_Tattoo,
				'State_License_or_Registration' => $State_License_or_Registration,
				 'Club_or_Association_Registration' => $Club_or_Association_Registration,
				 'Pet_Sire_Name' => $Pet_Sire_Name,
				 'Pet_Sire_AIN' => $Pet_Sire_AIN,
				 'Pet_Dam_Name' => $Pet_Dam_Name,
				 'Pet_Dam_AIN' => $Pet_Dam_AIN,

		
               'email' => $email, 
               // 'password' => md5($this->input->post('password')), 
					'gender' => $gender, 
					'Spayed_or_Neutered' => $Spayed_or_Neutered, 
					'Special_Status' => $Special_Status, 
				
                'phone' => $phone,
					'image'=> $image
                );

            
			$insert= $this->db->insert('petinfo',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the data has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
			}
			else
			{
				$this->response([
							'status' => False,
							'message' => 'please fill all the fields.'

						], REST_Controller::HTTP_OK);
			}
	 }

	public function customer_post()
		{
		$this->load->view('customer');

		             $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
,
                    ], REST_Controller::HTTP_OK);
        }
             $middle_name =$this->input->post('middle_name');
               $name=$this->EzPet_model->name($middle_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
,
                    ], REST_Controller::HTTP_OK);
        }
	             $last_name =$this->input->post('last_name');
               $name=$this->EzPet_model->name($last_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
,
                    ], REST_Controller::HTTP_OK);
        }
        $DOB = strip_tags($this->input->post('DOB'));
		$address = strip_tags($this->input->post('address'));
		$billing_address = strip_tags($this->input->post('billing_address'));
		 $email = strip_tags($this->input->post('email'));                

               $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
        $password = strip_tags($this->input->post('password'));                

         
        $conf_password = strip_tags($this->input->post('conf_password'));                

         
        $gender = $this->input->post('gender');

                       $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);
        }

		  if(!empty($first_name) && !empty($middle_name) && !empty($last_name)&& !empty($DOB) && !empty($address)&& !empty($billing_address)&& !empty($email)&& !empty($password)&& !empty($conf_password)&& !empty($gender)&& !empty($phone ))
			{
		$userData = array( 


                'first_name' => $first_name, 
				'middle_name' => $middle_name,
                'last_name' => $last_name,
				'DOB' => $DOB,

				'address' => $address,
				'billing_address' => $billing_address,
                'email' => $email, 
                'password' => $password, 
					'conf_password' => $conf_password,
                'gender' => $gender, 
                'phone' => $phone 
            );
				$insert= $this->db->insert('customer',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the data has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
			}
			else{
				$this->response([
'status' => False,
'message' => 'please fill all the fields'

], REST_Controller::HTTP_OK);
			}
	 }
		
	public function petchart_post()
		{
		$this->load->view('petchart');	
		       $Pet_Name = $this->input->post('Pet_Name');
                  $name=$this->EzPet_model->name($Pet_Name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }


				$Breed = strip_tags($this->input->post('Breed'));
                $Color = strip_tags($this->input->post('Color'));
				$ID_Mark_ifany = strip_tags($this->input->post('ID_Mark_ifany'));

				$Age =strip_tags($this->input->post('Age'));
				
                $Recommended_Immunization_Schedule = $this->input->post('Recommended_Immunization_Schedule'); 
                $Immunization_dates = strip_tags($this->input->post('Immunization_dates'));

	 $userData = array( 
                'Pet_Name' => $Pet_Name, 
				'Breed' => $Breed,
                'Color' => $Color,
				'ID_Mark_ifany' => $ID_Mark_ifany,

				'Age' => $Age,
				
                'Recommended_Immunization_Schedule' => $Recommended_Immunization_Schedule, 
                'Immunization_dates' => $Immunization_dates 
            ); 

				$insert= $this->db->insert('petchart',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }
		
		public function petlicense_post()
		{
		$this->load->view('petlicense');	
				                $License_No = strip_tags($this->input->post('License_No')); 
				$Year = strip_tags($this->input->post('Year'));
                $Applicant_Category = strip_tags($this->input->post('Applicant_Category'));
                $Ward_Name = strip_tags($this->input->post('Ward_Name'));
				                  $name=$this->EzPet_model->name($Ward_Name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }



		      $Qwner_Name = $this->input->post('Owner_Name');
                  $name=$this->EzPet_model->name($Owner_Name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }


                $Applicant_name = strip_tags($this->input->post('Applicant_name'));
					$Address_Pets_Owner_Institution = strip_tags($this->input->post('Address_Pets_Owner_Institution'));
					$Pet_Name =strip_tags($this->input->post('Pet_Name'));
					     $Pet_Name = $this->input->post('Pet_Name');
                  $name=$this->EzPet_model->name($Pet_Name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
					$Breed = strip_tags($this->input->post('Breed')); 
					$Colour = strip_tags($this->input->post('Colour')); 
					$ID_Mark_ifany = strip_tags($this->input->post('ID_Mark_ifany'));
					$Age = strip_tags($this->input->post('Age'));
					$Date_brought = strip_tags($this->input->post('Date_brought')); 
					$Veterinary_Doctors_name = strip_tags($this->input->post('Veterinary_Doctors_name'));
					$Date_ARV = strip_tags($this->input->post('Date_ARV'));
					$Stray_Dog_Adopted = strip_tags($this->input->post('Stray_Dog_Adopted'));
					$Puppy_owners_place = strip_tags($this->input->post('Puppy_owners_place'));
		$userData = array( 
                'License_No' => $License_No, 
				'Year' => $Year,
                'Applicant_Category' => $Applicant_Category,
				

				'Ward_Name' =>$Ward_Name,
				
                'Owners_Name' => $Owners_Name, 
                'Applicant_name' => $Applicant_name ,
					'Address_Pets_Owner_Institution' => $Address_Pets_Owner_Institution, 
					'Pet_Name' => $Pet_Name, 
					'Breed' => $Breed, 
					'Colour' => $Colour, 
					'ID_Mark_ifany' => $ID_Mark_ifany,
					'Age' => $Age, 
					'Date_brought' => $Date_brought, 
					'Veterinary_Doctors_name' => $Veterinary_Doctors_name,
					'Date_ARV' => $Date_ARV,
					'Stray_Dog_Adopted' => $Stray_Dog_Adopted,
					'Puppy_owners_place' => $Puppy_owners_place,
					
            ); 
			$insert= $this->db->insert('petlicense',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }

	 public function expenses_post()
		{
		$this->load->view('expenses');
		$userData = array(
			'income' => strip_tags($this->input->post('income')), 
				'expenses' => strip_tags($this->input->post('expenses')),
                'savings' => strip_tags($this->input->post('savings')),
				'total' => strip_tags($this->input->post('total')),
			);
		$insert= $this->db->insert('expenses',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }

	  public function myorders_post()
		{
		$this->load->view('myorders');
		            $Full_Name =$this->input->post('Full_Name');
               $name=$this->EzPet_model->name($Full_Name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
        $email = strip_tags($this->input->post('email'));                

               $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'message ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }


                $Contact_number = strip_tags($this->input->post('Contact_number'));
				$my_products = strip_tags($this->input->post('my_products'));
			$total = strip_tags($this->input->post('total'));
			$billing_address = strip_tags($this->input->post('billing_address'));
			$Shipping_address = strip_tags($this->input->post('Shipping_address'));
		$userData = array(
			'Full_Name' => $Full_Name, 
				'email' => $email,
                'Contact_number' =>$Contact_number,
				'my_products' => $my_products,
			'total' => $total,
			'billing_address' => $billing_address,
			'Shipping_address' => $Shipping_address,
			  ); 
		$insert= $this->db->insert('myorders',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }

	   public function findpet_post()
		{
		$this->load->view('findpet');
		$userData = array(
									 'Pet_breed' => strip_tags($this->input->post('Pet_breed')), 
                'gender' => strip_tags($this->input->post('gender')),
				'color' => strip_tags($this->input->post('color')),	
				 'weight' => strip_tags($this->input->post('weight')),
				 'Height' => strip_tags($this->input->post('Height')),
				'Purpose_Of_Pet' => strip_tags($this->input->post('Purpose_Of_Pet')),
			'phone' => strip_tags($this->input->post('phone')), 
			'Cost' => strip_tags($this->input->post('Cost')), 
			  );
		$insert= $this->db->insert('petfind',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }
	 public function petshelters_post()
		{
		$this->load->view('petshelters');

		 $Perspective_Pet_Parent = strip_tags($this->input->post('Perspective_Pet_Parent'));
			$pet_name_adopted = strip_tags($this->input->post('pet_name_adopted'));
                $gender = strip_tags($this->input->post('gender'));
			 $Pet_Name = strip_tags($this->input->post('Pet_Name'));
			$Pet_breed = strip_tags($this->input->post('Pet_breed'));
			 $phone = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);
        }

        $address = strip_tags($this->input->post('address'));
					
				 $weight = strip_tags($this->input->post('weight'));
				 $Height = strip_tags($this->input->post('Height'));
					  $rent_or_own_home = strip_tags($this->input->post('rent_or_own_home'));
					  $veterinarian_name = strip_tags($this->input->post('veterinarian_name'));
					  $veterinarian_phone_number = strip_tags($this->input->post('veterinarian_phone_number'));
					  $Hours_pet_alone = strip_tags($this->input->post('Hours_pet_alone'));
					



		$userData = array(
									 'Perspective_Pet_Parent' => $Perspective_Pet_Parent, 
			'pet_name_adopted' => $pet_name_adopted,
                'gender' => $gender,
			 'Pet_Name' => $Pet_Name,
			'Pet_breed' => $Pet_breed,
			'phone' => $phone,
			'address' => $address,
					
				 'weight' => $weight,
				 'Height' => $Height,
					  'rent_or_own_home' => $rent_or_own_home,
					  'veterinarian_name' => $veterinarian_name,
					  'veterinarian_phone_number' => $veterinarian_phone_number,
					  'Hours_pet_alone' =>$Hours_pet_alone,
					 );
				 	  
		$insert= $this->db->insert('petshelter',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }
	  public function breeders_post()
		{
		$this->load->view('breeders');

		$userData = array(
									 'Full_Name' => strip_tags($this->input->post('Full_Name')), 
                'address' => strip_tags($this->input->post('address')),
				'breeder_phone' => strip_tags($this->input->post('breeder_phone')),	
				 'address_female' => strip_tags($this->input->post('address_female')),
				 'Height' => strip_tags($this->input->post('Height')),
				
			'address_stud' => strip_tags($this->input->post('address_stud')), 
			'Veterinary_Doctor_Name' => strip_tags($this->input->post('Veterinary_Doctor_Name')), 
			'Veterinary_Doctor_ADDRESS' => strip_tags($this->input->post('Veterinary_Doctor_ADDRESS')), 
			'Veterinary_Doctor_phone_number' => strip_tags($this->input->post('Veterinary_Doctor_phone_number')), 
			'Microchip' => strip_tags($this->input->post('Microchip')), 
			'Pet_breed' => strip_tags($this->input->post('Pet_breed')), 
			'gender' => strip_tags($this->input->post('gender')), 
			'DOB' => strip_tags($this->input->post('DOB')), 
			'color' => strip_tags($this->input->post('color')), 
			'Body_Markings' => strip_tags($this->input->post('Body_Markings')), 
			'DOB_rabies' => strip_tags($this->input->post('DOB_rabies')),
			'DOB_last' => strip_tags($this->input->post('DOB_last')),
			'DOB_deworming' => strip_tags($this->input->post('DOB_deworming')),


			  );
			  $insert= $this->db->insert('breeders',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }

	  public function puppy_post()
		{
		$this->load->view('puppy');
		$userData = array(
			'adopt_pet_finder' => strip_tags($this->input->post('adopt_pet_finder')), 
				'Special_Status' => strip_tags($this->input->post('Special_Status')),
                'Pet_breed' => strip_tags($this->input->post('Pet_breed')),
				'age' => strip_tags($this->input->post('age')),
					'featured_pets' => strip_tags($this->input->post('featured_pets')),
					'search_results' => strip_tags($this->input->post('search_results')),
					'userfile' => strip_tags($this->input->post('userfile')),
					 ); 
		$insert= $this->db->insert('puppy',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }
	  public function delivery_post()
		{
		$this->load->view('delivery');

		           $Full_Name =$this->input->post('Full_Name');
               $name=$this->EzPet_model->name($Full_Name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
        	$address = strip_tags($this->input->post('address'));
        	               $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }

					$shipping_address = strip_tags($this->input->post('shipping_address'));
					$alt_address = strip_tags($this->input->post('alt_address'));
				$delivery_charges = strip_tags($this->input->post('delivery_charges'));
		$userData = array(
			'Full_Name' => $Full_Name, 
				'address' => $address,
                'phone' => $phone,
				'email' => $email,
					'shipping_address' => $shipping_address,
					'alt_address' => $alt_address,
				'delivery_charges' => $delivery_charges,
				);
		$insert= $this->db->insert('delivery',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }

	  public function estimation_post()
		{
		$this->load->view('estimation');
		$userData = array(
			'budget' => strip_tags($this->input->post('budget')), 
				'range' => strip_tags($this->input->post('range')),
                'Special_Status' => strip_tags($this->input->post('Special_Status')),
				'availability' => strip_tags($this->input->post('availability')),
				 ); 
					$insert= $this->db->insert('estimation',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }
	  public function healthvacination_post()
		{
		$this->load->view('healthvacination');
		$userData = array(
			'petname' => strip_tags($this->input->post('petname')), 
				'DOB' => strip_tags($this->input->post('DOB')),
                'DOB_vacination' => strip_tags($this->input->post('DOB_vacination')),
				'Monitoring' => strip_tags($this->input->post('Monitoring')),
					'DOB_bookvac' => strip_tags($this->input->post('DOB_bookvac')),
					'preferred_Doctor' => strip_tags($this->input->post('preferred_Doctor')),
				'hospital_preferred' => strip_tags($this->input->post('hospital_preferred')),
				'availability' => strip_tags($this->input->post('availability')),
				);
		$insert= $this->db->insert('healthvacination',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }
	 public function dietchart_post()
		{
		$this->load->view('dietchart');
		$userData = array(
			'diet_chart' => strip_tags($this->input->post('diet_chart')), 
				'Special_Status' => strip_tags($this->input->post('Special_Status')),
                'online_booking' => strip_tags($this->input->post('online_booking')),
		);
		$insert= $this->db->insert('dietchart',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }
	  public function orderpet_post()
		{
		$this->load->view('orderpet');
		$userData = array(
			
				'Special_Status' => strip_tags($this->input->post('Special_Status')),
				'images' => strip_tags($this->input->post('images')),
                'Cost' => strip_tags($this->input->post('Cost')),
				'Adopton_pets' => strip_tags($this->input->post('Adopton_pets')),
				'Status' => strip_tags($this->input->post('Status')),
		);
				$insert= $this->db->insert('orderpet',$userData);
            
			if($insert)
			{
				$this->response([
					'status'=>TRUE,
					'message'=>'the user has been added successfully.'],REST_Controller::HTTP_OK);
			}
			else
	{
			$this->response("some problem occurred,please try again.",REST_Controller::HTTP_OK);
		}
	 }


}
			
			
			
			
