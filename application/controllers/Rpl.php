<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rpl extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('rpl_model');
		$this->load->helper('url');
	}
	
	//login & logout
	public function login(){
		$uname = $this->input->post('uname');
		$pass = $this->input->post('pass');
		$kasta = $this->rpl_model->getKasta($uname, $pass);
		$this->session->set_userdata('uname', $uname);
		$this->session->set_userdata('pass', $pass);
		$this->session->set_userdata('kasta', $kasta);
		if($this->rpl_model->getData($uname, $pass)){
			$this->session->set_userdata('logged_in', 'true');
			redirect('Rpl/homeView');
		}
		else{
			$this->session->set_userdata('logged_in', 'false');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function logout(){
		$data=array('logged_in', 'uname', 'pass');
		$this->session->unset_userdata($data);
		redirect('Rpl/loginView');
	}
	public function loginView(){
		$this->load->view('login');
	}

//home

	public function homeView(){
		$data['barang']=$this->rpl_model->tampil_data()->result();
		$this->load->view('home', $data);
	}

//report

//manipulasi report
function konfHapusReport($id){
		$data['report']=$this->rpl_model->getByIdReport($id);
		$this->load->view('hapus_report', $data);
	}
	
	
//manipulasi barang 
	function tambah(){
		$this->load->view('crud_create');
	}
	function tambah_brg(){
		$kodebarang=$this->input->post('kodebarang');
		$namabarang=$this->input->post('namabarang');
		$asal=$this->input->post('asal');
		$modal=$this->input->post('modal');
		$harga=$this->input->post('harga');
		$stock=$this->input->post('stock');
		$data=array('kodeBarang'=>$kodebarang, 'namaBarang'=>$namabarang, 'asal'=>$asal, 'modal'=>$modal, 'harga'=>$harga, 'stok'=>$stock );
		$this->rpl_model->input_data($data, 'barang');
		redirect('Rpl/homeView');
	}
	function edit($id){
		$data['barang']=$this->rpl_model->getById($id);
		$this->load->view('crud_edit', $data);
	}
	function edit_brg($id){
		$kodebarang=$this->input->post('kodebarang');
		$namabarang=$this->input->post('namabarang');
		$asal=$this->input->post('asal');
		$modal=$this->input->post('modal');
		$harga=$this->input->post('harga');
		$stock=$this->input->post('stock');
		$data=array('namaBarang'=>$namabarang, 'asal'=>$asal, 'modal'=>$modal, 'harga'=>$harga, 'stok'=>$stock );
		$this->db->where('id', $id);
		$this->rpl_model->edit_data($data, 'barang');
		redirect('Rpl/homeView');
	}
	function hapus($id){
		$data['barang']=$this->rpl_model->getById($id);
		$this->load->view('crud_delete', $data);
	}
	
	function hapus_brg($id){
		$this->db->where('id', $id);
		$this->rpl_model->hapus_data($id);
		redirect('Rpl/homeView');
	}
	function hapusReport($id){
		$this->db->where('id', $id);
		$this->rpl_model->hapus_data_report($id);
		redirect('Rpl/Report');
	}
	public function jualProses($id){
		$asal = $this->rpl_model->getStok($id);
		$terjual = $this->input->post('terjual');
		$stock = $asal - $terjual;
		$namabarang = $this->rpl_model->getNamaBarang($id);
		$waktu = date('Y-m-d H:i:s');
		$pegawai = $this->session->userdata('uname');
		$data1 = array('stok'=>$stock);
		$data = array('barang' => $namabarang ,'stok_terjual' => $terjual,'waktu' => $waktu,'pegawai' => $pegawai);
		$this->db->where('id', $id);
		$this->rpl_model->edit_data($data1, 'barang');
		$this->rpl_model->input_data($data, 'report');
		redirect('Rpl/homeView');
	}
	public function restokProses($id){
		$asal = $this->rpl_model->getStok($id);
		$restock = $this->input->post('restock');
		$stock = $asal + $restock;
		$data=array('stok'=>$stock );
		$this->db->where('id', $id);
		$this->rpl_model->edit_data($data, 'barang');
		redirect('Rpl/homeView');
	}
	public function Report(){
		$data['report']=$this->rpl_model->tampil_report()->result();
		$this->load->view('report_view', $data);
	}
	public function editView($id){
		$data['barang']=$this->rpl_model->getById($id);
		$this->load->view('jual', $data);
	}
	public function editView2($id){
		$data['barang']=$this->rpl_model->getById($id);
		$this->load->view('restok', $data);
	}
		public function inputReport(){
		$data['report']=$this->rpl_model->tampil_report()->result();
		$this->load->view('report_view', $data);
	}

}