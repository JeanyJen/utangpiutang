<?php 

class Penjualan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_penjualan');
	}

	function index(){
		    $data['penjualan'] = $this->m_penjualan->tampil_data();
		    $this->load->view('header');
			$this->load->view('view_penjualan',$data);   			
	}
	
	
	
	
	
	public function tambah()
    {
		$data['get_category'] = $this->m_penjualan->get_option();
		$data['get_category1'] = $this->m_penjualan->get_option1();
		$this->load->view('header'); 
        $this->load->view('input_penjualan',$data);
		$this->load->view('footer');
    }
	
	
	
	
	function tambah_aksi(){
		$no_transaksi = $this->input->post('no_transaksi');
		$no_nota = $this->input->post('no_nota');
		$id_barang = $this->input->post('id_barang');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$harga_satuan = $this->input->post('harga_satuan');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$jumlah_harga = $this->input->post('jumlah_harga');
		$tanggal_penjualan = $this->input->post('tanggal_penjualan');
		$data = array(
			'no_transaksi' => $no_transaksi,
			'no_nota' => $no_nota,
			'id_barang' => $id_barang,
			'id_pelanggan' => $id_pelanggan,
			'harga_satuan' => $harga_satuan,
			'jumlah_barang' => $jumlah_barang,
			'jumlah_harga' => $jumlah_harga,
			'tanggal_penjualan' => $tanggal_penjualan
			);
		$this->m_penjualan->input_data($data,'penjualan');
		$this->session->set_flashdata('msg','data berhasil di simpan');
		redirect('penjualan/index');
	}
	
	
	
		function hapus($id){
		$where = array('id_penjualan' => $id);
		$this->m_penjualan->hapus_data($where,'penjualan');
		redirect('penjualan/index');
	}
	
		function edit($id){
	    $data['get_category'] = $this->m_penjualan->get_option();
		$data['get_category1'] = $this->m_penjualan->get_option1();
		$where = array('id_penjualan' => $id);
		$data['penjualan'] = $this->m_penjualan->edit_data($where,'penjualan')->result();
		 $this->load->view('header');
		 $this->load->view('edit_penjualan',$data);
			$this->load->view('footer');   
		
	}
	
	
	function update(){
	    $id_penjualan = $this->input->post('id_penjualan');
		$no_transaksi = $this->input->post('no_transaksi');
		$no_nota = $this->input->post('no_nota');
		$id_barang = $this->input->post('id_barang');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$harga_satuan = $this->input->post('harga_satuan');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$jumlah_harga = $this->input->post('jumlah_harga');
		$tanggal_penjualan = $this->input->post('tanggal_penjualan');
		$data = array(
			'no_transaksi' => $no_transaksi,
			'no_nota' => $no_nota,
			'id_barang' => $id_barang,
			'id_pelanggan' => $id_pelanggan,
			'harga_satuan' => $harga_satuan,
			'jumlah_barang' => $jumlah_barang,
			'jumlah_harga' => $jumlah_harga,
			'tanggal_penjualan' => $tanggal_penjualan
			);

	$where = array(
		'id_penjualan' => $id_penjualan
	);

	$this->m_penjualan->update_data($where,$data,'penjualan');
	$this->session->set_flashdata('msg','data berhasil di update');
	redirect('penjualan/index');
}
	
	
   
}