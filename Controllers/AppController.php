<?php
class AppController extends Controller {

	public function index()
	{
		$data = array();
		$this->loadTemplate('app', $data);
	}
}