<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('index');
	}
	function add_user(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' =>md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'level' => $this->input->post('level'),
			);
		$result = $this->model->Simpan('user', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url());
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url());
		}
	}
	public function dashboard(){
		$data = array(
				'data_user' => $this->model->getuser("order by userid asc")->result_array()
			);
		$this->load->view('dashboard', $data);
	}
	public function hapususer($kode = 1){
		$result = $this->model->Hapus('user', array('userid' => $kode));
		header('location:'.base_url().'index.php/welcome/dashboard');
	}
	public function tambahuser(){
		$this->load->view('tambahuser');
	}
	function saveuser(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' =>md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'level' => $this->input->post('level'),
			);
		$result = $this->model->Simpan('user', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'index.php/welcome/dashboard');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'index.php/welcome/tambahuser');
		}
	}
	public function edituser($kode = 0){
		$data_rute = $this->model->getuser("where userid ='$kode'")->result_array();

		$data = array(
			'userid' => $data_rute[0]['userid'],
			'username' => $data_rute[0]['username'],
			'password' => $data_rute[0]['password'],
			'fullname' => $data_rute[0]['fullname'],
			'level' => $data_rute[0]['level'],
			);
		$this->load->view('edituser', $data);
	}
	function saveedituser()
	{
		$this->cek_sessionfalse();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
		$userid = $this->input->post('userid');
		
		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level,
		);
		$where = array(
			'userid' => $userid
		);
		$simpan = $this->model->update_data($where,$data,'user');
		if ($simpan==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>EDIT</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger">Maaf Anda <strong>GAGAL</strong> Mengedit</div>');
		}
		redirect(base_url().'index.php/welcome/dashboard');
	}

}