<?php

class NotFoundController extends Controller {

	public function index()
	{
		$data = array();
		$this->loadTemplate('404', $data);
	}
}