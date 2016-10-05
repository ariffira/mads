<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	/**
	 * Index Page for this controller.
	 * All files will call by this one
	 * 
	 */
	public function index()
	{
		echo Modules::run('portfolio'); 
	}
}
