<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('mc');

	}

	function index(){
		$this->load->view('index');	
	}

	function nf(){
		$this->load->view('404');	
	}

	function login(){
		$this->load->view('login');	
	}

	function portofolio(){
		$data['all_article'] = $this->mc->get_all_article()->result();

		$this->load->view('portofolio', $data);
	}

	

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */