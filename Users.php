<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {	

	public function __construct(){
        parent::__construct();  	    
  	    $this->load->model('UsersModel');
  }


	public function index()
	{	
		$data['userdata']  = $this->UsersModel->getdata();	 
		
		$this->load->view('welcome_mes',$data);
	}

	public function usersList(){
		echo "usersList";
	}
}