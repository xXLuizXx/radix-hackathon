<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__FILE__).'/tcpdf/tcpdf.php';

class Pdf_gerar extends TCPDF {
	function __construct(){
		parent::__construct();

    }
   
}
