<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends MY_RootController {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->_check_session();
		$this->load->view('access_page');
	}
  function doLogin(){
	  $this->form_validation->set_rules('pEmail','Email','required');
	  $this->form_validation->set_rules('pPassword','Password','required');

	  if($this->form_validation->run()){
		  $response = $this->_callApiRest('users/api/Login','POST',$this->input->post());
		  if($response['status'] == "success"){
			  $response['data']['sess_email'] = $response['data']['user_email'];
			  $this->session->set_userdata('almacen_sw14_sess', $response['data']);
			  redirect('home','refresh');
		  }else if($response['status'] == "error"){
			$this->session->set_flashdata('error_msg',$response['message']);
			redirect('access');
		  }else{

		  $this->session->set_flashdata('error_msg',"Error al entrar, intente mas tarde");
		  redirect('access');
		  }
	  }else{

		  $this->session->set_flashdata('errores',$this->form_validation->error_array());
		  redirect('access');
	  }
  }
	public function logout(){
		$this->session->unset_userdata('almacen_sw14_sess');
    redirect('access','refresh');
	}

	public function _check_session(){
			$session = $this->session->userdata('almacen_sw14_sess');
			if (@$session['sess_email'] && !$this->input->is_ajax_request() ) {
					redirect ( 'home' );
			}
	}
}
