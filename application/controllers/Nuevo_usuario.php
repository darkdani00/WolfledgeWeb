<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nuevo_usuario extends MY_RootController {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('nuevo_usuario_page');
	}
	
  public function crear_usuario(){
	$this->form_validation->set_rules('pName','Nombre','required');
	$this->form_validation->set_rules('pApellido1','Apellido Paterno','required');
	$this->form_validation->set_rules('pApellido2','Apellido Materno','required');
	$this->form_validation->set_rules('pEdad','Edad','required');
	$this->form_validation->set_rules('pPais','Pais','required');
	$this->form_validation->set_rules('pEmail','Email','required');
	$this->form_validation->set_rules('pPassword','Password','required');
	$this->form_validation->set_rules('pPrivilegios','Privilegios','required');
	if($this->form_validation->run()){
		$response = $this->_callApiRest('usuario/api/usuario','POST',$this->input->post());
		redirect('Access','refresh');
	}
	else{
		$this->session->set_flashdata('errores',$this->form_validation->error_array());
		redirect('Nuevo_usuario');
	}
}

}
