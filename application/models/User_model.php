<?php

class User_model extends MY_Model {

    public $table = 'tbluser';

    public $fillable = array(
        'username', 'password', 'email', 'userid'
    );

    public $rules = array(
        'create' => array(
            array(
                'field' => 'User[username]',
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]'
            ), array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[6]'
            ), array(
                'field' => 'passconf',
                'label' => 'Confirm Password',
                'rules' => 'matches[password]'
            ), array(
                'field' => 'User[email]',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]'
            )
        ),
        'edit' => array(
            array(
                'field' => 'User[username]',
                'label' => 'Username',
                'rules' => 'required'
            ), array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'min_length[6]'
            ), array(
                'field' => 'passconf',
                'label' => 'Confirm Password',
                'rules' => 'matches[password]'
            ), array(
                'field' => 'User[email]',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            )
        )
    );

    public function __construct()
    {
        parent::__construct();
    }

}
