<?php
    class Login extends CI_Controller{
    	
		function index(){
			$this->load->view('includes/header');
			$this->load->view('login_form');
			$this->load->view('includes/footer');
			
		}
		
    } 
?>