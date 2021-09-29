<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class MY_RootController extends CI_Controller {
    function __construct(){
        parent::__construct();
    }

    public function _isAuth() {
    	$session = $this->session->userdata('sw14_sess');
    	if ( ! @$session ['sess_email'] && !$this->input->is_ajax_request() ) {
    		redirect ( 'access' );
    	} else if( ! @$session ['sess_email']  && $this->input->is_ajax_request() ) {
    		$this->output->set_status_header('302');
    	}
    }
		/*
		* $view_name:  ruta de la vista a cargar(principal)
		* $params: datos extra que se quieren mandar a la vista principal[es opcional]
		* $params_includes: datos extra que se quieren mandar alos archivos de include, ejemplo
		* $params_includes['head'] = array("title" => "Home") [es opcional]
		* Parametros para información interna(includes)
		* $params_includes['head'] = array("title" => "Home");
		* $params_includes['nav'] = array("modulo" => "Home");
		* $params_includes['menu'] = array("selected" => "Home");
		*/
		public function _load_page($view_name,$params = array(), $params_includes = array()){

			$params['head'] = $this->load->view('includes/head',@$params_includes['head'],TRUE);
			$params['nav'] = $this->load->view('includes/nav',@$params_includes['nav'],TRUE);
			$params['menu'] = $this->load->view('includes/menu',@$params_includes['menu'],TRUE);
			$params['footer'] = $this->load->view('includes/footer',@$params_includes['footer'],TRUE);
			$params['scripts'] = $this->load->view('includes/scripts',@$params_includes['scripts'],TRUE);

			$this->load->view($view_name,$params);

		}
    public function _callApiRest($endPoint, $method, $data = NULL) {
	    $response = array();
        switch ($method){
            case "POST":
                $dataToString = json_encode($data ? $data : array());
                $curlRequest = curl_init(api_url.$endPoint);
                curl_setopt($curlRequest, CURLOPT_CUSTOMREQUEST, $method);
                curl_setopt($curlRequest, CURLOPT_HTTPHEADER, array(
                        'Project-API-KEY: ' . api_key,
                        'Content-Type: application/json',
                        'Content-Length: ' . strlen($dataToString))
                );

                curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curlRequest, CURLOPT_POSTFIELDS, $dataToString);

                $response = curl_exec($curlRequest);

                if (!$response) {
                    $response = json_encode(array(
                        "status" => "error",
                        "message" => "Error Interno al ejecutar la llamada al Servidor.",
                        'error' => curl_error($curlRequest),
                        'code' => curl_errno($curlRequest)
                    ));
                }

                curl_close($curlRequest);

                break;
            case "GET":
                $queryString = http_build_query( $data ? $data : array() );

                $curlRequest = curl_init(api_url.$endPoint."?".$queryString);
                curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curlRequest, CURLOPT_HTTPHEADER, array(
                        'Project-API-KEY: ' . api_key,
                        'Content-Type: application/json')
                );

                $response = curl_exec($curlRequest);
                if(!$response){
                    $response = json_encode(array(
                        "status" => "error",
                        "message" => "Error Interno al ejecutar la llamada al Servidor.",
                        'error' => curl_error($curlRequest),
                        'code' => curl_errno($curlRequest)
                    ));
                }

                curl_close($curlRequest);
                break;
            case "PUT":
                break;
            case "DELETE":
                break;
            default:
                break;
        }
        $response = json_decode($response, true);
        return $response;

    }
}
