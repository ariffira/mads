<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * General Marketing page for people to understand the site
	 */

	public function __construct(){
		parent :: __construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('front_page_view');
	}
}
