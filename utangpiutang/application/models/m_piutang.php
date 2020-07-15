<?php

class M_piutang extends CI_Model{	
	

     function tampil_data(){
		 $this->db->select('*');
		 $this->db->from('piutang');
		 $this->db->join('barang','barang.id_barang=piutang.id_barang');
		 $this->db->join('pelanggan','pelanggan.id_pelanggan=piutang.id_pelanggan');
		 $query = $this->db->get();
		 return $query->result();
	}
	
	function tampil_piutang(){
		$this->db->select('id_piutang,count(id_piutang)as piutang');
		 $this->db->from('piutang');
		 $query = $this->db->get();
		 return $query->result();
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
		
	
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
    }
	
	function edit_data($where,$table){
    $this->db->join('barang','barang.id_barang=piutang.id_barang');
    $this->db->join('pelanggan','pelanggan.id_pelanggan=piutang.id_pelanggan');		
	return $this->db->get_where($table,$where);
}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function get_option() {
		 $this->db->select('*');
		 $this->db->from('barang');
		 $query = $this->db->get();
		 return $query->result();
		}


     function get_option1() {
		 $this->db->select('*');
		 $this->db->from('pelanggan');
		 $query = $this->db->get();
		 return $query->result();
		}


        function cari($data)
			{
			$this->db->where('tanggal_jatuh_tempo >=',$this->input->post('tgl_awal'));
			$this->db->where('tanggal_jatuh_tempo <=',$this->input->post('tgl_akhir'));
			$this->db->from('piutang');
			$this->db->join('barang','barang.id_barang=piutang.id_barang');
		     $this->db->join('pelanggan','pelanggan.id_pelanggan=piutang.id_pelanggan');
			$query=$this->db->get();
			return $query->result();
			}		
}