<?php 

class Pelanggan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_pelanggan');
	}

	function index(){
		    $data['pelanggan'] = $this->m_pelanggan->tampil_data()->result();
		    $this->load->view('header');
			$this->load->view('view_pelanggan',$data);   			
	}
	
	
	
	
	
	public function tambah()
    {
		$this->load->view('header'); 
        $this->load->view('input_pelanggan');
		$this->load->view('footer');
    }
	
	
	
	
	function tambah_aksi(){
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$no_wa_hp = $this->input->post('no_wa_hp');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama_pelanggan' => $nama_pelanggan,
			'no_wa_hp' => $no_wa_hp,
			'alamat' => $alamat
			);
		$this->m_pelanggan->input_data($data,'pelanggan');
		$this->session->set_flashdata('msg','data berhasil di simpan');
		redirect('pelanggan/index');
	}
	
	
	
		function hapus($id){
		$where = array('id_pelanggan' => $id);
		$this->m_pelanggan->hapus_data($where,'pelanggan');
		redirect('pelanggan/index');
	}
	
		function edit($id){
		$where = array('id_pelanggan' => $id);
		$data['pelanggan'] = $this->m_pelanggan->edit_data($where,'pelanggan')->result();
		 $this->load->view('header');
		 $this->load->view('edit_pelanggan',$data);
			$this->load->view('footer');   
		
	}
	
	
	function update(){
	    $id_pelanggan = $this->input->post('id_pelanggan');
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$no_wa_hp = $this->input->post('no_wa_hp');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama_pelanggan' => $nama_pelanggan,
			'no_wa_hp' => $no_wa_hp,
			'alamat' => $alamat
			);

	$where = array(
		'id_pelanggan' => $id_pelanggan
	);

	$this->m_pelanggan->update_data($where,$data,'pelanggan');
	$this->session->set_flashdata('msg','data berhasil di update');
	redirect('pelanggan/index');
}
	
	
   
}