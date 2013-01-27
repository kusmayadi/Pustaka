<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Base {

	public function before()
	{
		parent::before();
		
		$this->add_css('bootstrap.min.css');
		$this->add_css('bootstrap-responsive.min.css');
		
		$this->add_js('jquery-1.9.0.min.js');
		$this->add_js('bootstrap.min.js');
	}

}