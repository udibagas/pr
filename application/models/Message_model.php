<?php

class Message_model extends MY_Model {

    public $table = 'messages';

    public $fillable = [
        'recipients', 'subject', 'body'
    ];

    public $rules = [
        [
            'field' => 'Message[recipients]',
            'label' => 'recipients',
            'rules' => 'required'
        ], [
            'field' => 'Message[subject]',
            'label' => 'Subject',
            'rules' => 'required'
        ], [
            'field' => 'Message[body]',
            'label' => 'Body',
            'rules' => 'required'
        ]
    ];

    public function __construct()
    {
        parent::__construct();
    }

}
