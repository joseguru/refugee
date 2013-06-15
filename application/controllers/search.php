<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		var_dump('heloe there');
		
	}
	public function search(){
		
		print_r('This is it');
	}
}