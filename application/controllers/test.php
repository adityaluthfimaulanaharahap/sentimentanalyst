<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
	}

	public function index()
	{
		$test = 'adit' ;
		$hasi = 'is_array' ;
		$nama = 'test satu tambha satu' ;



		echo $this->unit->run($test, $hasi);

		
	}

}