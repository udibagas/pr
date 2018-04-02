<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends MY_Controller {

	public $auth_only = true;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('message_model', 'message');
	}

	public function send()
	{
		if ($data = $this->input->post('Message', true))
		{
			// TODO: validate user input
			$data['sender'] = $this->session->userdata('user_id');
			$this->message->save($data);

			$recipients = array();
			$recipients_input = explode(',', $data['recipients']);

			// hanya kirim ke valid email
			foreach ($recipients_input as $r) {
				if (valid_email(trim($r))) {
					$recipients[] = trim($r);
				}
			}

			// kirim email hanya jika recipients valid
			if (count($recipients) > 0)
			{
				$this->load->library('email');

				// TODO: sesuaikan ini
				$this->email->initialize(array(
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://mail.lamsolusi.com',
					'smtp_port' => 465,
					'smtp_user' => 'bagas@lamsolusi.com',
					'smtp_pass' => 'p@ssw0rd',
				));

				// TODO: sesuaikan ini
				$this->email->from(
					'bagas@lamsolusi.com',
					'bagas'
				);

				$this->email->to($recipients);

				// cc ke pengirim
				if (valid_email($this->session->userdata('email'))) {
					$this->email->cc($this->session->userdata('email'));
				}

				$this->email->subject($data['subject']);
				$this->email->message($data['body']);

				if (!$this->email->send(false)) {
					// for debug only
					// $this->session->set_flashdata('error', 'Pesan Anda gagal dikirim. : '.$this->email->print_debugger());
					$this->session->set_flashdata('error', 'Pesan Anda gagal dikirim.');
				}

				else {
					$this->session->set_flashdata('success', 'Pesan Anda telah dikirim.');
				}
			}
		}

		redirect('performance');
	}

	public function index()
	{
		$q = $this->input->get('q');
		$this->breadcrumbs = array('message' => 'Feedback Histories');

		$this->render('message/index', array(
			'messages' => $this->db
						// tampilkan messages per dokumen
						->where('doc_no', $this->input->get('doc_no'))
						// message bisa di filter
						->group_start()
							->or_like('subject', $q)
							->or_like('body', $q)
							->or_like('recipients', $q)
						->group_end()
						// hanya tampilkan email dari dan ke user terkait
						->group_start()
							->where('sender', $this->session->userdata('user_id'))
							->or_like('recipients', $this->session->userdata('email'))
						->group_end()
						// tampilkan pesan terbaru dahulu
						->order_by('id', 'DESC')
						->get('messages')
						->result(),
		));

		// TODO: pagination
	}

	public function show($id)
	{
		$message = $this->message->find($id);

		if (!$message) {
			redirect('/');
		}

		$this->render('message/show', array(
			'message' => $message,
		));
	}

	public function delete($id)
	{
		$this->message->delete($id);
		redirect($this->input->get('redirect'));
	}
}
