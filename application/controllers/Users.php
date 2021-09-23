<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_RootController {
	function __construct(){
		parent::__construct();
		$this->_isAuth();
	}
	public function index(){
		$params_includes['head'] = array("title" => "Users");
		$params_includes['nav'] = array("modulo" => "Users");
		$params_includes['menu'] = array("selected" => "Users");
		$this->_load_page('users/user_page',array(),$params_includes);
        $this->load->view('users/user_js');
	}



    function user_form(){
        if($this->input->is_ajax_request()){
            echo $this->load->view('users/user_form',null,TRUE);
        }else{
            redirect('home');
        }
    }
}
