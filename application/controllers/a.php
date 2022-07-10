<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class a extends CI_Controller {
	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('mc');
	}

	function index(){
		redirect(base_url('/'));
	}

	function article($article_id=null){
		if ($article_id != null) {
			$where = array('article_id' => $article_id);
			$count = $this->mc->get('article', $where)->num_rows();
			if ($count == 1) {
				$this->load->view('article');
			}
			else{
				$this->load->view('404');
			}

		}
		else{
			redirect(base_url('portofolio'));
		}
	}

}

/* End of file a.php */
/* Location: ./application/controllers/a.php */