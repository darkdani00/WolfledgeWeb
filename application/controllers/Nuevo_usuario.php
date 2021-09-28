<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nuevo_usuario extends MY_RootController {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('nuevo_usuario_page');
	}
	
  function doLogin(){
	  $this->form_validation->set_rules('pEmail','Email','required');
	  $this->form_validation->set_rules('pPassword','Password','required');

	  if($this->form_validation->run()){
		  $response = $this->_callApiRest('usuario/api/login','POST',$this->input->post());
		  if($response['status'] == "success"){
			  $response['data']['sess_email'] = $response['data']['correo_usuario'];
			  $this->session->set_userdata('sw14_sess', $response['data']);
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


  public function crear_usuario(){
	$this->form_validation->set_rules('pEmail','Email','required');
	$this->form_validation->set_rules('pPassword','Password','required');
	
  }

}
