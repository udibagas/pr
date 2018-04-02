<?php

class Message_model extends MY_Model {

    public $table = 'messages';

    public $fillable = array(
        'recipients', 'subject', 'body'
    );

    public $rules = array(
        array(
            'field' => 'Message[recipients]',
            'label' => 'recipients',
            'rules' => 'required'
        ), array(
            'field' => 'Message[subject]',
            'label' => 'Subject',
            'rules' => 'required'
        ), array(
            'field' => 'Message[body]',
            'label' => 'Body',
            'rules' => 'required'
        )
    );

    public function __construct()
    {
        parent::__construct();
    }

}
