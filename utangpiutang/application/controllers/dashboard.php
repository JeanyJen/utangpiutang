<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_pembelian');
		$this->load->model('m_penjualan');
		$this->load->model('m_hutang');
		$this->load->model('m_piutang');
	}

	
	public function index()
	{
		$data['pembelian1'] = $this->m_pembelian->tampil_pembelian();
		$data['penjualan1'] = $this->m_penjualan->tampil_penjualan();
		$data['hutang1'] = $this->m_hutang->tampil_hutang();
		$data['piutang1'] = $this->m_piutang->tampil_piutang();
		
		$this->load->view('header');
		$this->load->view('dashboard',$data);
		$this->load->view('footer');
	}
	
	public function index1()
	{
		//$this->load->view('header');
		$this->load->view('login');
		//$this->load->view('footer');
	}
	
	public function index2()
	{
		$this->load->view('header');
		$this->load->view('input');
		$this->load->view('footer');
	}
	
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}

