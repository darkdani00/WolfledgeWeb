<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_RootController {
	function __construct(){
		parent::__construct();
		$this->_isAuth();
	}
	public function index(){
		$params_includes['head'] = array("title" => "Home");
		$params_includes['nav'] = array("modulo" => "Home");
		$params_includes['menu'] = array("selected" => "Home");
		$this->_load_page('home_page',array(),$params_includes);
	}
}
