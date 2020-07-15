<?php

class M_penjualan extends CI_Model{	
	

     function tampil_data(){
		 $this->db->select('*');
		 $this->db->from('penjualan');
		 $this->db->join('barang','barang.id_barang=penjualan.id_barang');
		 $this->db->join('pelanggan','pelanggan.id_pelanggan=penjualan.id_pelanggan');
		 $query = $this->db->get();
		 return $query->result();
	}
	
	function tampil_penjualan(){
		$this->db->select('id_penjualan,count(id_penjualan)as penjualan');
		 $this->db->from('penjualan');
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
    $this->db->join('barang','barang.id_barang=penjualan.id_barang');
    $this->db->join('pelanggan','pelanggan.id_pelanggan=penjualan.id_pelanggan');		
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
}