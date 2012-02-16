<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Base {

	public function before()
	{
		parent::before();
		
		$this->add_css('reset.css');
		$this->add_css('css3.css');
		$this->add_css('general.css');
		$this->add_css('grid.css');
		
		$this->add_js('modernizr-1.7.min.js');
		$this->add_js('jquery-1.7.1.min.js');
	}

}