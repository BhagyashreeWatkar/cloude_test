<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	 
	public function index()
	{
		//$error = array('error_image' => '',
		 //'error_name'=>'');
		$this->load->view('upload_image');
	}
	public function upload()
	{

		$config_image = array();
		$config_image['upload_path'] = './image/';
		$config_image['allowed_types'] = "jpeg|png|gif";
		//$config_image['max_size'] = "1024";
		//$config_image['max_width'] = "1024";
		//$config_image['max_height'] = "768";

		$this->load->library('upload',$config_image);
		$this->upload->do_upload();
		//echo "<pre>";
		$data = array('upload_data'=> $this->upload->data());
		$company=array('company_name'=> $this->input->post['companyname'],
			'company_image'=>$data['upload_data']['file_name']);
		$this->load->model('mymodel');
		$this->mymodel->insert($company);
		//echo "<pre>";
		print_r($company);
	}
}
