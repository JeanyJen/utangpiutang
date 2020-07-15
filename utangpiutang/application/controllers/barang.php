<?php 

class Barang extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_barang');
	}

	function index(){
		    $data['barang'] = $this->m_barang->tampil_data()->result();
		    $this->load->view('header');
			$this->load->view('view_barang',$data);   			
	}
	
	
	
	
	
	public function tambah()
    {
		$this->load->view('header'); 
        $this->load->view('input_barang');
		$this->load->view('footer');
    }
	
	
	
	
	function tambah_aksi(){
		$nama_barang = $this->input->post('nama_barang');
		$jumlah = $this->input->post('jumlah');
		$harga_satuan = $this->input->post('harga_satuan');
		$data = array(
			'nama_barang' => $nama_barang,
			'jumlah' => $jumlah,
			'harga_satuan' => $harga_satuan
			);
		$this->m_barang->input_data($data,'barang');
		$this->session->set_flashdata('msg','data berhasil di simpan');
		redirect('barang/index');
	}
	
	
	
		function hapus($id){
		$where = array('id_barang' => $id);
		$this->m_barang->hapus_data($where,'barang');
		redirect('barang/index');
	}
	
		function edit($id){
		$where = array('id_barang' => $id);
		$data['barang'] = $this->m_barang->edit_data($where,'barang')->result();
		 $this->load->view('header');
		 $this->load->view('edit_barang',$data);
			$this->load->view('footer');   
		
	}
	
	
	function update(){
	    $id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah = $this->input->post('jumlah');
		$harga_satuan = $this->input->post('harga_satuan');
		$data = array(
			'nama_barang' => $nama_barang,
			'jumlah' => $jumlah,
			'harga_satuan' => $harga_satuan
			);

	$where = array(
		'id_barang' => $id_barang
	);

	$this->m_barang->update_data($where,$data,'barang');
	$this->session->set_flashdata('msg','data berhasil di update');
	redirect('barang/index');
}
	
	
   
}