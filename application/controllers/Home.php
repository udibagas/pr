<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public $auth_only = true;

	public function index()
	{
		$users = $this->db->get('tbluser')->result();

		$this->page_title = 'DASHBOARD';

		$this->scripts = array(
			'home/chart'
		);

		$this->render('home/index');
	}
}
