<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('test');
    }

    public function index()
	{
        var_dump($this->test->sendSql());
		$this->load->view('welcome_message');
	}
}
