<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function index()
	{
		// $sql = 'SELECT * FROM lot';
		// $result = $this->db->query($sql);
		// echo "<pre>";
		// print_r($result);
		// $this->load->library("Aauth");
		echo "works";
	}
	
	
	public function login() {

        if ($this->aauth->login('admin@admin.com', 'password', true)){
             echo 'OK. You are logged in';
        }

    }
	
		
	public function create_user() {

        if ( $this->aauth->create_user('ali@ali.com','pasword','Mr Ali') ){
             echo 'OK. Succesful register';
        } else {
            echo 'Please fix the issues below';
            echo $this->aauth->print_errors();
        }            
    }
	
	public function is_loggedin() {

        if ( $this->aauth->is_loggedin() ){
             echo 'OK. You are logged in';
        } else {
             echo 'you must login';
        }            
    }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */