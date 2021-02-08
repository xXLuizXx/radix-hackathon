<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$header['titulo'] = 'Home';
		$this->load->view('home');
	}
}
