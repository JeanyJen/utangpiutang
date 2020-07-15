<?php 

class Piutang extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_piutang');
	}

	function index(){
		    $data['piutang'] = $this->m_piutang->tampil_data();
		    $this->load->view('header');
			$this->load->view('view_piutang',$data);   			
	}
	
	
	
	
	
	public function tambah()
    {
		$data['get_category'] = $this->m_piutang->get_option();
		$data['get_category1'] = $this->m_piutang->get_option1();
		$this->load->view('header'); 
        $this->load->view('input_piutang',$data);
		$this->load->view('footer');
    }
	
	
	
	
	function tambah_aksi(){
		$no_transaksi = $this->input->post('no_transaksi');
		$no_nota = $this->input->post('no_nota');
		$id_barang = $this->input->post('id_barang');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$piutang_awal = $this->input->post('piutang_awal');
		$jumlah_bayar = $this->input->post('jumlah_bayar');
		$sisa_piutang = $this->input->post('sisa_piutang');
		$tanggal_jatuh_tempo = $this->input->post('tanggal_jatuh_tempo');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'no_transaksi' => $no_transaksi,
			'no_nota' => $no_nota,
			'id_barang' => $id_barang,
			'id_pelanggan' => $id_pelanggan,
			'piutang_awal' => $piutang_awal,
			'jumlah_bayar' => $jumlah_bayar,
			'sisa_piutang' => $sisa_piutang,
			'tanggal_jatuh_tempo' => $tanggal_jatuh_tempo,
			'keterangan' => $keterangan
			);
		$this->m_piutang->input_data($data,'piutang');
		$this->session->set_flashdata('msg','data berhasil di simpan');
		redirect('piutang/index');
	}
	
	
	
		function hapus($id){
		$where = array('id_piutang' => $id);
		$this->m_piutang->hapus_data($where,'piutang');
		redirect('piutang/index');
	}
	
		function edit($id){
	    $data['get_category'] = $this->m_piutang->get_option();
		$data['get_category1'] = $this->m_piutang->get_option1();
		$where = array('id_piutang' => $id);
		$data['piutang'] = $this->m_piutang->edit_data($where,'piutang')->result();
		 $this->load->view('header');
		 $this->load->view('edit_piutang',$data);
			$this->load->view('footer');   
		
	}
	
	
	function update(){
	    $id_piutang = $this->input->post('id_piutang');
		$no_transaksi = $this->input->post('no_transaksi');
		$no_nota = $this->input->post('no_nota');
		$id_barang = $this->input->post('id_barang');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$piutang_awal = $this->input->post('piutang_awal');
		$jumlah_bayar = $this->input->post('jumlah_bayar');
		$sisa_piutang = $this->input->post('sisa_piutang');
		$tanggal_jatuh_tempo = $this->input->post('tanggal_jatuh_tempo');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'no_transaksi' => $no_transaksi,
			'no_nota' => $no_nota,
			'id_barang' => $id_barang,
			'id_pelanggan' => $id_pelanggan,
			'piutang_awal' => $piutang_awal,
			'jumlah_bayar' => $jumlah_bayar,
			'sisa_piutang' => $sisa_piutang,
			'tanggal_jatuh_tempo' => $tanggal_jatuh_tempo,
			'keterangan' => $keterangan
			);

	$where = array(
		'id_piutang' => $id_piutang
	);

	$this->m_piutang->update_data($where,$data,'piutang');
	$this->session->set_flashdata('msg','data berhasil di update');
	redirect('piutang/index');
}


public function cetak (){
		ob_start();
      $data['piutang']=$this->m_piutang->cari();
	$this->load->view('print_piutang',$data);
	$html = ob_get_contents();
        ob_end_clean();
        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Piutang .pdf', 'D');
		
	}
	
	public function laporan()
    {
		  $data['piutang'] = $this->m_piutang->tampil_data();
		 $this->load->view('header');
        $this->load->view('laporan_piutang',$data);
		
    }
	
	
   
}