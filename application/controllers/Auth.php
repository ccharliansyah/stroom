<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$newdata = array(
			'logged_' => true,
			'ID' => "Charlie",
			'Nama' => "Charlie",
		);

		$this->session->set_userdata($newdata);

		$data['nav'] = 0;
		$this->load->view('dashboard', $data);

	}

	public function verification()
	{

		$user = $this->input->post('user-name');
		$pass = $this->input->post('user-password');

		$newdata = array(
			'logged_' => true,
			'ID' => "Charlie",
			'Nama' => "Charlie",
		);

		$this->session->set_userdata($newdata);

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'status' => true,
				'text' => 'Login Berhasil!',
				'type' => 'success',
			)));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}
}
