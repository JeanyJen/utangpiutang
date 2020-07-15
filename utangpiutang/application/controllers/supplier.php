<?php 

class Supplier extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_supplier');
	}

	function index(){
		    $data['supplier'] = $this->m_supplier->tampil_data()->result();
		    $this->load->view('header');
			$this->load->view('view_supplier',$data);   			
	}
	
	
	
	
	
	public function tambah()
    {
		$this->load->view('header'); 
        $this->load->view('input_supplier');
		$this->load->view('footer');
    }
	
	
	
	
	function tambah_aksi(){
		$nama_supplier = $this->input->post('nama_supplier');
		$no_wa_hp = $this->input->post('no_wa_hp');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama_supplier' => $nama_supplier,
			'no_wa_hp' => $no_wa_hp,
			'alamat' => $alamat
			);
		$this->m_supplier->input_data($data,'supplier');
		$this->session->set_flashdata('msg','data berhasil di simpan');
		redirect('supplier/index');
	}
	
	
	
		function hapus($id){
		$where = array('id_supplier' => $id);
		$this->m_supplier->hapus_data($where,'supplier');
		redirect('supplier/index');
	}
	
		function edit($id){
		$where = array('id_supplier' => $id);
		$data['supplier'] = $this->m_supplier->edit_data($where,'supplier')->result();
		 $this->load->view('header');
		 $this->load->view('edit_supplier',$data);
			$this->load->view('footer');   
		
	}
	
	
	function update(){
	    $id_supplier = $this->input->post('id_supplier');
		$nama_supplier = $this->input->post('nama_supplier');
		$no_wa_hp = $this->input->post('no_wa_hp');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama_supplier' => $nama_supplier,
			'no_wa_hp' => $no_wa_hp,
			'alamat' => $alamat
			);

	$where = array(
		'id_supplier' => $id_supplier
	);

	$this->m_supplier->update_data($where,$data,'supplier');
	$this->session->set_flashdata('msg','data berhasil di update');
	redirect('supplier/index');
}
	
	
   
}