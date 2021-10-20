<?php
class AboutController extends Controller {

	public function index()
	{
		$data = array();
		$this->loadTemplate('about', $data);
	}
}