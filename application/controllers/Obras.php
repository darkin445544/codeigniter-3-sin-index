<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Obras extends CI_Controller {

	public function __construct(){
		parent::__construct();

		//$this->load->model(array('M_login'));
		$this->load->helper(array('url','form'));

		
	}


	public function index(){

		$data['title'] = 'Podemos Perú';
		$data['project_url']=$this->config->item('project_url');
		$data['imagenes']=$this->config->item('imagenes');
		$data['repositorios']=$this->config->item('repositorios');

		$this->load->view('obra',$data);
		 	
	}

	
}
