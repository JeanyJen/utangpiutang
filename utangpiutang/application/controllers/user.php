<?php 

class User extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_user');
	}

	function index(){
		    $data['user'] = $this->m_user->tampil_data()->result();
		    $this->load->view('header');
			$this->load->view('view_user',$data);   			
	}
	
	
	
	
	
	public function tambah()
    {
		$this->load->view('header'); 
        $this->load->view('input_user');
		$this->load->view('footer');
    }
	
	
	
	
	function tambah_aksi(){
		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'nama_user' => $nama_user,
			'username' => $username,
			'password' => $password,
			'level' => $level
			);
		$this->m_user->input_data($data,'user');
		$this->session->set_flashdata('msg','data berhasil di simpan');
		redirect('user/index');
	}
	
	
	
		function hapus($id){
		$where = array('id_user' => $id);
		$this->m_user->hapus_data($where,'user');
		redirect('user/index');
	}
	
		function edit($id){
		$where = array('id_user' => $id);
		$data['user'] = $this->m_user->edit_data($where,'user')->result();
		 $this->load->view('header');
		 $this->load->view('edit_user',$data);
			$this->load->view('footer');   
		
	}
	
	
	function update(){
	    $id_user = $this->input->post('id_user');
			$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'nama_user' => $nama_user,
			'username' => $username,
			'password' => $password,
			'level' => $level
			);

	  $where = array(
		'id_user' => $id_user
	);

	$this->m_user->update_data($where,$data,'user');
	$this->session->set_flashdata('msg','data berhasil di update');
	redirect('user/index');
}
	
	
   
}