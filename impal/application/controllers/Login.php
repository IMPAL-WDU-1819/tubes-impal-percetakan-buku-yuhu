<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
			parent::__construct();
			$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/v_login');
		$this->load->view('layout/footer');
	}

	public function action_login()
	{
		$username= $this->input->post('username');
		$password= $this->input->post('password');

		$hasil = $this->m_login->is_user_login_ok($username, $password);
		if($hasil['ada']>0){
			echo "Login Berhasil";
		} else {
			echo "Login Gagal";
		}
	
	}
	public function action_register(){
		$user = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'jabatan' => $this->input->post('pilihan')
		);
		$this->m_login->register_acc($user);
		redirect('login/index');
	}
}
