<?php
/*
 * Created on 2011-8-2
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class Login extends CI_Controller{
 	function __construct(){
 		parent::__construct();
 	}
 	$data=array();
 	public function index(){
 		$this->load->view('_login',$data);
 	}
 }
?>
