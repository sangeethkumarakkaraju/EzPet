<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Image_model extends CI_Model {
 public function insert_image($image)
 {
  // assign the data to an array
  $data = array(
   'image_id' => $this->input->post('image_id'),
   'image_name' => $this->input->post('image_name'),
   'image' => $image
  );
  //insert image to the database
  $this->db->insert('image_data', $data);
 }
 //get images from database
 public function get_images()
 {
  $this->db->select('*');
  $this->db->order_by('ID');
  $query = $this->db->get('imageS');
  return $query->result();
 }
 
 public function get_otherImages($data) 
 {
	 
	 $query = $this->db->get_where('images', array('customer_id!=' => $data['user']['email']));
	  return $query->result();

 }
 public function details($data)
 {
	 foreach ($data as $geth_index=>$geth)
	 { 
	 
							
						 $this->db->select("Pet_Name,DOB,color");
						$this->db->from('petinfo');
						$this->db->where('id=$geth_index');
					
						$query=$this->db->get();
						return  $query->result();
	  
	 }
 }
 
}