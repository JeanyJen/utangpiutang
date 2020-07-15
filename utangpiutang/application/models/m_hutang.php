<?php

class M_hutang extends CI_Model{	
	

     function tampil_data(){
		 $this->db->select('*');
		 $this->db->from('hutang');
		 $this->db->join('supplier','supplier.id_supplier=hutang.id_supplier');
		 $query = $this->db->get();
		 return $query->result();
	}
	
	function tampil_hutang(){
		$this->db->select('id_hutang,count(id_hutang)as hutang');
		 $this->db->from('hutang');
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
    $this->db->join('supplier','supplier.id_supplier=hutang.id_supplier');		
	return $this->db->get_where($table,$where);
}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function get_option() {
		 $this->db->select('*');
		 $this->db->from('supplier');
		 $query = $this->db->get();
		 return $query->result();
		}	
}