<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $template = 'templates/main';

    public $title = 'Records Performance';

    public $breadcrumbs = array();

    public $auth_only = false;

    public $page_title = '';

    public $scripts = array();

    function __construct()
    {
        parent::__construct();

        if ($this->auth_only == true) {
            $this->check_session();
        }
    }

    public function check_session()
    {
        if ($this->session->userdata('logged_in')) {
            return true;
        } else {
            redirect('/login');
        }
    }

    public function render($view, $data = null)
    {
        return $this->load->view($this->template, array(
            'content' => $this->load->view($view, $data, true),
        ));
    }
}
