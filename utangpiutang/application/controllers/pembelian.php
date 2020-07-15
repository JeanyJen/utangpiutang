<?php 

class Pembelian extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_pembelian');
	}

	function index(){
		    $data['pembelian'] = $this->m_pembelian->tampil_data();
		    $this->load->view('header');
			$this->load->view('view_pembelian',$data);   			
	}
	
	
	
	
	
	public function tambah()
    {
		$data['get_category'] = $this->m_pembelian->get_option();
		$this->load->view('header'); 
        $this->load->view('input_pembelian',$data);
		$this->load->view('footer');
    }
	
	
	
	
	function tambah_aksi(){
		$no_transaksi = $this->input->post('no_transaksi');
		$no_faktur = $this->input->post('no_faktur');
		$id_supplier = $this->input->post('id_supplier');
		$nama_barang = $this->input->post('nama_barang');
		$harga_satuan = $this->input->post('harga_satuan');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$jumlah_harga = $this->input->post('jumlah_harga');
		$tanggal_pembelian = $this->input->post('tanggal_pembelian');
		$data = array(
			'no_transaksi' => $no_transaksi,
			'no_faktur' => $no_faktur,
			'id_supplier' => $id_supplier,
			'nama_barang' => $nama_barang,
			'harga_satuan' => $harga_satuan,
			'jumlah_barang' => $jumlah_barang,
			'jumlah_harga' => $jumlah_harga,
			'tanggal_pembelian' => $tanggal_pembelian
			);
		$this->m_pembelian->input_data($data,'pembelian');
		$this->session->set_flashdata('msg','data berhasil di simpan');
		redirect('pembelian/index');
	}
	
	
	
		function hapus($id){
		$where = array('id_pembelian' => $id);
		$this->m_pembelian->hapus_data($where,'pembelian');
		redirect('pembelian/index');
	}
	
		function edit($id){
	   $data['get_category'] = $this->m_pembelian->get_option();
		$where = array('id_pembelian' => $id);
		$data['pembelian'] = $this->m_pembelian->edit_data($where,'pembelian')->result();
		 $this->load->view('header');
		 $this->load->view('edit_pembelian',$data);
			$this->load->view('footer');   
		
	}
	
	
	function update(){
	    $id_pembelian = $this->input->post('id_pembelian');
		$no_transaksi = $this->input->post('no_transaksi');
		$no_faktur = $this->input->post('no_faktur');
		$id_supplier = $this->input->post('id_supplier');
		$nama_barang = $this->input->post('nama_barang');
		$harga_satuan = $this->input->post('harga_satuan');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$jumlah_harga = $this->input->post('jumlah_harga');
		$tanggal_pembelian = $this->input->post('tanggal_pembelian');
		$data = array(
			'no_transaksi' => $no_transaksi,
			'no_faktur' => $no_faktur,
			'id_supplier' => $id_supplier,
			'nama_barang' => $nama_barang,
			'harga_satuan' => $harga_satuan,
			'jumlah_barang' => $jumlah_barang,
			'jumlah_harga' => $jumlah_harga,
			'tanggal_pembelian' => $tanggal_pembelian
			);

	$where = array(
		'id_pembelian' => $id_pembelian
	);

	$this->m_pembelian->update_data($where,$data,'pembelian');
	$this->session->set_flashdata('msg','data berhasil di update');
	redirect('pembelian/index');
}
	
	
   
}