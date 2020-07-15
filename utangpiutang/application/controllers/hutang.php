<?php 

class Hutang extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_hutang');
	}

	function index(){
		    $data['hutang'] = $this->m_hutang->tampil_data();
		    $this->load->view('header');
			$this->load->view('view_hutang',$data);   			
	}
	
	
	
	
	
	public function tambah()
    {
		$data['get_category'] = $this->m_hutang->get_option();
		$this->load->view('header'); 
        $this->load->view('input_hutang',$data);
		$this->load->view('footer');
    }
	
	
	
	
	function tambah_aksi(){
		$no_transaksi = $this->input->post('no_transaksi');
		$no_faktur = $this->input->post('no_faktur');
		$tanggal_transaksi = $this->input->post('tanggal_transaksi');
		$id_supplier = $this->input->post('id_supplier');
		$hutang = $this->input->post('hutang');
		$bayar = $this->input->post('bayar');
		$sisa_bayar = $this->input->post('sisa_bayar');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'no_transaksi' => $no_transaksi,
			'no_faktur' => $no_faktur,
			'tanggal_transaksi' => $tanggal_transaksi,
			'id_supplier' => $id_supplier,
			'hutang' => $hutang,
			'bayar' => $bayar,
			'sisa_bayar' => $sisa_bayar,
			'keterangan' => $keterangan
			);
		$this->m_hutang->input_data($data,'hutang');
		$this->session->set_flashdata('msg','data berhasil di simpan');
		redirect('hutang/index');
	}
	
	
	
		function hapus($id){
		$where = array('id_hutang' => $id);
		$this->m_hutang->hapus_data($where,'hutang');
		redirect('hutang/index');
	}
	
		function edit($id){
	   $data['get_category'] = $this->m_hutang->get_option();
		$where = array('id_hutang' => $id);
		$data['hutang'] = $this->m_hutang->edit_data($where,'hutang')->result();
		 $this->load->view('header');
		 $this->load->view('edit_hutang',$data);
			$this->load->view('footer');   
		
	}
	
	
	function update(){
	    $id_hutang = $this->input->post('id_hutang');
		$no_transaksi = $this->input->post('no_transaksi');
		$no_faktur = $this->input->post('no_faktur');
		$tanggal_transaksi = $this->input->post('tanggal_transaksi');
		$id_supplier = $this->input->post('id_supplier');
		$hutang = $this->input->post('hutang');
		$bayar = $this->input->post('bayar');
		$sisa_bayar = $this->input->post('sisa_bayar');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'no_transaksi' => $no_transaksi,
			'no_faktur' => $no_faktur,
			'tanggal_transaksi' => $tanggal_transaksi,
			'id_supplier' => $id_supplier,
			'hutang' => $hutang,
			'bayar' => $bayar,
			'sisa_bayar' => $sisa_bayar,
			'keterangan' => $keterangan
			);

	$where = array(
		'id_hutang' => $id_hutang
	);

	$this->m_hutang->update_data($where,$data,'hutang');
	$this->session->set_flashdata('msg','data berhasil di update');
	redirect('hutang/index');
}
	
	
   
}