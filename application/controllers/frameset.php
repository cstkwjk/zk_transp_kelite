<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * frameset为用户登录完成后进入的主界面
 * 完成根据用户权限不同生成对应的系统功能菜单
 * 
 * 
 * 
 */
class Frameset extends CI_Controller {
	public function __construct(){
		parent::__construct();

		if (! $this->session->userdata('logged_in')){
		  redirect('login');
		  exit();
		}
	}

	public function index()
	{
		$this->load->view('_login');
		$this->output->enable_profiler(TRUE);
	}
	public function wkk(){
		echo "Wkk must ~  ";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */