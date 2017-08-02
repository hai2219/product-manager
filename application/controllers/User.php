<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library("session");

    }



    public function index()
    {

        $this->load->view('login');

    }



    public function login()
    {

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if (isset($email) && $email != "" && isset($password) && $password != "") {
			if($email=='admin' && $password=='product'){
				//set Session
				$this->session->set_userdata("___userInfo___", [
						"Email" => $email
					]
				);
				redirect("/examples/customers_management");
			}

		}
		$this->load->view('login');

    }


    public function logout()
    {
        $this->session->unset_userdata("___userInfo___");
        redirect("/");

    }



}
