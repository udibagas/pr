<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model', 'user');
	}

	public function login()
	{
		if ($this->session->userdata('logged_in')) {
			redirect('/home');
		}

		if ($data = $this->input->post())
		{
			$user = $this->db
                    ->where('username', $data['username'])
                    ->or_where('userid', $data['username'])
                    ->or_where('email', $data['username'])
					->get('tbluser')->row();

			if ($user)
			{
				if (!md5($data['password'], $user->password)) {
					$this->session->set_flashdata('error', 'Password yang Anda masukkan salah');
					redirect('/login');
				}

				$this->session->set_userdata(array(
					'logged_in' => true,
					'user_id' => $user->userid,
					'username' => $user->username,
					'email' => $user->email,
				));

				redirect('/home');
			}

			$this->session->set_flashdata('error', 'Username & Password salah.');
		}

		$this->template = 'templates/login';

		$this->breadcrumbs = array(
			site_url('login') => 'Login'
		);

		$this->render('auth/login');
	}

	public function logout()
	{
		session_destroy();
		redirect('/home');
	}
}
