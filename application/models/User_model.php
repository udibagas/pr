<?php

class User_model extends MY_Model {

    public $table = 'tbluser';

    public $fillable = [
        'username', 'password', 'email', 'userid'
    ];

    public $rules = [
        'create' => [
            [
                'field' => 'User[username]',
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]'
            ], [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[6]'
            ], [
                'field' => 'passconf',
                'label' => 'Confirm Password',
                'rules' => 'matches[password]'
            ], [
                'field' => 'User[email]',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]'
            ]
        ],
        'edit' => [
            [
                'field' => 'User[username]',
                'label' => 'Username',
                'rules' => 'required'
            ], [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'min_length[6]'
            ], [
                'field' => 'passconf',
                'label' => 'Confirm Password',
                'rules' => 'matches[password]'
            ], [
                'field' => 'User[email]',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ]
        ]
    ];

    public function __construct()
    {
        parent::__construct();
    }

}
