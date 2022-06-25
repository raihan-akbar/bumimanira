<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class main extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	function index(){
	$this->load->view('index');	
	}

	function nf(){
	$this->load->view('404');	
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */