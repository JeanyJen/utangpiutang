<?php 

class Suratjalan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_suratjalan');
	}

	function index(){
		    $data['suratjalan'] = $this->m_suratjalan->tampil_data();
		    $this->load->view('header');
			$this->load->view('view_suratjalan',$data);   			
	}
	
	
	
	
	
	public function tambah()
    {
		$data['get_category'] = $this->m_suratjalan->get_option();
		$data['get_category1'] = $this->m_suratjalan->get_option1();
		$this->load->view('header'); 
        $this->load->view('input_suratjalan',$data);
		$this->load->view('footer');
    }
	
	
	
	
	function tambah_aksi(){
		$no_surat_jalan = $this->input->post('no_surat_jalan');
		$id_barang = $this->input->post('id_barang');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$harga_satuan = $this->input->post('harga_satuan');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$jumlah_harga = $this->input->post('jumlah_harga');
		$tanggal_surat_jalan = $this->input->post('tanggal_surat_jalan');
		$data = array(
			'no_surat_jalan' => $no_surat_jalan,
			'id_barang' => $id_barang,
			'id_pelanggan' => $id_pelanggan,
			'harga_satuan' => $harga_satuan,
			'jumlah_barang' => $jumlah_barang,
			'jumlah_harga' => $jumlah_harga,
			'tanggal_surat_jalan' => $tanggal_surat_jalan
			);
		$this->m_suratjalan->input_data($data,'surat_jalan');
		$this->session->set_flashdata('msg','data berhasil di simpan');
		redirect('suratjalan/index');
	}
	
	
	
		function hapus($id){
		$where = array('id_surat_jalan' => $id);
		$this->m_suratjalan->hapus_data($where,'surat_jalan');
		redirect('suratjalan/index');
	}
	
		function edit($id){
	    $data['get_category'] = $this->m_suratjalan->get_option();
		$data['get_category1'] = $this->m_suratjalan->get_option1();
		$where = array('id_surat_jalan' => $id);
		$data['suratjalan'] = $this->m_suratjalan->edit_data($where,'surat_jalan')->result();
		 $this->load->view('header');
		 $this->load->view('edit_suratjalan',$data);
			$this->load->view('footer');   
		
	}
	
	
	function update(){
	    $id_surat_jalan = $this->input->post('id_surat_jalan');
		$no_surat_jalan = $this->input->post('no_surat_jalan');
		$id_barang = $this->input->post('id_barang');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$harga_satuan = $this->input->post('harga_satuan');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$jumlah_harga = $this->input->post('jumlah_harga');
		$tanggal_surat_jalan = $this->input->post('tanggal_surat_jalan');
		$data = array(
			'no_surat_jalan' => $no_surat_jalan,
			'id_barang' => $id_barang,
			'id_pelanggan' => $id_pelanggan,
			'harga_satuan' => $harga_satuan,
			'jumlah_barang' => $jumlah_barang,
			'jumlah_harga' => $jumlah_harga,
			'tanggal_surat_jalan' => $tanggal_surat_jalan
			);

	$where = array(
		'id_surat_jalan' => $id_surat_jalan
	);

	$this->m_suratjalan->update_data($where,$data,'surat_jalan');
	$this->session->set_flashdata('msg','data berhasil di update');
	redirect('suratjalan/index');
}
	
	
   
}